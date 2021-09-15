const express = require("express");
const app = express();
const mongoose = require("mongoose");
var bodyParser = require('body-parser')

var jsonParser = bodyParser.json()
 
// create application/x-www-form-urlencoded parser
var urlencodedParser = bodyParser.urlencoded({ extended: false })



app.use(bodyParser.urlencoded({extnded: true}));


mongoose.connect("mongodb+srv://Bryan:1234@cluster0.auemh.mongodb.net/Foraneo")



//creacion del esquema
const transaccionesSchema = {
    tipo: String,
    monto: parseFloat(),
    fecha: Date,
    descripcion: String
}
const Transacciones = mongoose.model("Transacciones", transaccionesSchema);

app.get("/", function(req, res){
    res.sendFile(__dirname + "/transaccion.html");
})


app.post("/", jsonParser, function (req, res){
    console.log(req.body.tipo);
    let newTransacciones = new Transacciones({
        tipo:req.body.Tipo_Transaccion,
        monto:req.body.Monto,
        fecha:req.body.Fecha,
        descripcion:req.body.Descripción
    });
    console.log(newTransacciones);
    newTransacciones.save();
    res.redirect("/");
})


app.listen(3000, ()=>console.log("La aplicacion esta corriendo"));
