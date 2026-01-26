from fastapi import FastAPI
from pydantic import BaseModel
from msmart.device import AirConditioner
import asyncio

app = FastAPI()

# 🔐 DADOS DO SEU AR (LAN)
DEVICE = {
    "ip": "192.168.1.50",
    "id": 123456789012345,
    "token": "abcdef1234567890",
    "key": "0987654321abcdef"
}

ac = AirConditioner(
    DEVICE["ip"],
    DEVICE["id"],
    DEVICE["token"],
    DEVICE["key"]
)

class Power(BaseModel):
    on: bool

class Temperature(BaseModel):
    value: int

class Mode(BaseModel):
    mode: str

class Fan(BaseModel):
    speed: str

@app.on_event("startup")
async def connect():
    await ac.authenticate()
    await ac.refresh()

@app.post("/api/power")
async def power(p: Power):
    ac.power = p.on
    await ac.apply()
    return {"ok": True}

@app.post("/api/temperature")
async def temperature(t: Temperature):
    ac.target_temperature = t.value
    await ac.apply()
    return {"ok": True}

@app.post("/api/mode")
async def mode(m: Mode):
    ac.mode = {
        "cool": ac.MODES.COOL,
        "heat": ac.MODES.HEAT,
        "fan": ac.MODES.FAN_ONLY
    }[m.mode]
    await ac.apply()
    return {"ok": True}

@app.post("/api/fan")
async def fan(f: Fan):
    ac.fan_speed = {
        "low": ac.FAN_SPEEDS.LOW,
        "medium": ac.FAN_SPEEDS.MEDIUM,
        "high": ac.FAN_SPEEDS.HIGH
    }[f.speed]
    await ac.apply()
    return {"ok": True}
