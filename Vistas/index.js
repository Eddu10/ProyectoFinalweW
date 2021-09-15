const express = require("express");
const app = express();
const mongoose = require("mongoose");
var bodyParser = require('body-parser')

var jsonParser = bodyParser.json()
 
// create application/x-www-form-urlencoded parser
var urlencodedParser = bodyParser.urlencoded({ extended: false })



app.use(bodyParser.urlencoded({extnded: true}));


mongoose.connect("mongodb+srv://Bryan:1234@cluster0.auemh.mongodb.net/Foraneo")

//<link ref="stylesheet" href="../login/css/style.css" type="text/css">



app.get("/", function(req, res){
    res.sendFile(__dirname + "/login/login.html" );
    res.sendFile(__dirname + "/login/css/style.css");
})



app.post("/", jsonParser, function (req, res){
    res.redirect("/");
})




//creacion del esquema
const estudiantesSchema = {
    nombre: String,
    email: String,
    username: String,
    pass: String
}
const Estudiantes = mongoose.model("Estudiantes", estudiantesSchema);

app.get("/Signin/signin.html", function(req, res){
    res.sendFile(__dirname + "/Signin/signin.html");
})


app.post("/Signin/signin.html", jsonParser, function (req, res){
    console.log(req.body.nombre);
    let newEstudiantes = new Estudiantes({
        nombre:req.body.nombre,
        email:req.body.email,
        username:req.body.username,
        pass:req.body.pass
    });
    console.log(newEstudiantes);
    newEstudiantes.save();
    res.redirect("/Signin/signin.html");
})



app.get("/Pantalla/index.html", function(req, res){
    res.sendFile(__dirname + "/Pantalla/index.html");
})


app.post("/Pantalla/index.html", jsonParser, function (req, res){
    
    res.redirect("/Pantalla/index.html");
})






app.get("/Pantalla/transaccion.html", function(req, res){
    res.sendFile(__dirname + "/Pantalla/transaccion.html");
})



app.post("/Pantalla/transaccion.html", jsonParser, function (req, res){
    res.redirect("/Pantalla/transaccion.html");
})







const transaccionesSchema = {
    tipo: String,
    monto: parseFloat(),
    fecha: Date,
    descripcion: String
}
const Transacciones = mongoose.model("Transacciones", transaccionesSchema);

app.get("/Pantalla/index.html", function(req, res){
    res.sendFile(__dirname + "/Pantalla/index.html");
})


app.post("/Pantalla/index.html", jsonParser, function (req, res){
    console.log(req.body.tipo);
    let newTransacciones = new Transacciones({
        tipo:req.body.Tipo_Transaccion,
        monto:req.body.Monto,
        fecha:req.body.Fecha,
        descripcion:req.body.Descripción
    });
    console.log(newTransacciones);
    newTransacciones.save();
    res.redirect("/Pantalla/index.html");
})






app.get("/login/login.html", function(req, res){
    res.sendFile(__dirname + "/login/login.html");
})



app.post("/login/login.html", jsonParser, function (req, res){
    res.redirect("/login/login.html");
})



app.get("/Pantalla/examples/icons.html", function(req, res){
    res.sendFile(__dirname + "/Pantalla/examples/icons.html");
})



app.post("/Pantalla/examples/icons.html", jsonParser, function (req, res){
    res.redirect("/Pantalla/examples/icons.html");
})





app.get("/Pantalla/objetivos.html", function(req, res){
    res.sendFile(__dirname + "/Pantalla/objetivos.html");
})



app.post("/Pantalla/objetivos.html", jsonParser, function (req, res){
    res.redirect("/Pantalla/objetivos.html");
})





app.get("/Pantalla/examples/dashboard.html", function(req, res){
    res.sendFile(__dirname + "/Pantalla/examples/dashboard.html");
})



app.post("/Pantalla/examples/dashboard.html", jsonParser, function (req, res){
    res.redirect("/Pantalla/examples/dashboard.html");
})



app.get("/login/login.html", function(req, res){
    res.sendFile(__dirname + "/login/login.html");
})



app.post("/login/login.html", jsonParser, function (req, res){
    res.redirect("/login/login.html");
})


//creacion del esquema
const objetivosSchema = {
    producto: String,
    costo: parseFloat()
}
const Objetivos = mongoose.model("Objetivos", objetivosSchema);

app.get("/Pantalla/examples/icons.html", function(req, res){
    res.sendFile(__dirname + "/Pantalla/examples/icons.html");
})


app.post("/Pantalla/examples/icons.html", jsonParser, function (req, res){
    console.log(req.body.producto);
    let newObjetivos = new Objetivos({
        producto:req.body.producto,
        costo:req.body.costo
    });
    console.log(newObjetivos);
    newObjetivos.save();
    res.redirect("/Pantalla/examples/icons.html");
})





app.listen(3000, ()=>console.log("La aplicacion esta corriendo"));

