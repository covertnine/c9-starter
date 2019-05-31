var path = require("path");
// var webpack = require('webpack')

module.exports = {
  mode: "development",
  entry: "./js/main.js",
  output: {
    filename: "main.bundle.js",
    path: path.join(__dirname, "/js/")
  }
};
