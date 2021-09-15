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
const estudiantesSchema = {
    nombre: String,
    email: String,
    username: String,
    pass: String
}
const Estudiantes = mongoose.model("Estudiantes", estudiantesSchema);

app.get("/", function(req, res){
    res.sendFile(__dirname + "/sign in.html");
})


app.post("/", jsonParser, function (req, res){
    console.log(req.body.nombre);
    let newEstudiantes = new Estudiantes({
        nombre:req.body.nombre,
        email:req.body.email,
        username:req.body.username,
        pass:req.body.pass
    });
    console.log(newEstudiantes);
    newEstudiantes.save();
    res.redirect("/");
})


app.listen(3000, ()=>console.log("La aplicacion esta corriendo"));
