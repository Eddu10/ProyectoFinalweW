const express = require("express");
const app = express();

app.use("/login", express.static("../login"));

app.listen(8080, ()=>console.log("La aplicacion esta corriendo"));