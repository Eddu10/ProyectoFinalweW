const mongoose = require("mongoose");

const password = "1234"
const dbname = "login"
const uri = `mongodb+srv://Bryan:${password}@cluster0.auemh.mongodb.net/${myFirstDatabase}?retryWrites=true&w=majority`

module.exports = () => mongoose.connect(uri, {userNewUrlParser: true, useUnifiedTopology: true})