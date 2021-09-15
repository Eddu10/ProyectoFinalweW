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
const objetivosSchema = {
    producto: String,
    costo: parseFloat()
}
const Objetivos = mongoose.model("Objetivos", objetivosSchema);

app.get("/", function(req, res){
    res.sendFile(__dirname + "/objetivos.html");
})


app.post("/", jsonParser, function (req, res){
    console.log(req.body.producto);
    let newObjetivos = new Objetivos({
        producto:req.body.producto,
        costo:req.body.costo
    });
    console.log(newObjetivos);
    newObjetivos.save();
    res.redirect("/");
})


app.listen(3000, ()=>console.log("La aplicacion esta corriendo"));
