const express=require("express");
const cors=require("cors");
const app=express();

app.use(cors());
app.use(express.json());

// 🔐 CONFIGURAÇÃO MIDEA
const MIDEA={
 token:"SEU_TOKEN_MIDEA",
 deviceId:"SEU_DEVICE_ID"
};

// 🔁 Simulação (troque pela lib real)
function sendToMidea(cmd,value){
 console.log("MIDEA:",cmd,value);
}

app.post("/api/power",(req,res)=>{
 sendToMidea("power",req.body.on);
 res.sendStatus(200);
});

app.post("/api/temperature",(req,res)=>{
 sendToMidea("temperature",req.body.value);
 res.sendStatus(200);
});

app.post("/api/mode",(req,res)=>{
 sendToMidea("mode",req.body.mode);
 res.sendStatus(200);
});

app.post("/api/fan",(req,res)=>{
 sendToMidea("fan",req.body.speed);
 res.sendStatus(200);
});

app.listen(3000,()=>console.log("🔥 API Midea rodando"));
