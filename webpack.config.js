var path = require("path");
// var webpack = require('webpack')

module.exports = {
  mode: "production",
  bail: false,
  entry: "./js/main.js",
  watch: true,
  output: {
    filename: "main.bundle.js",
    path: path.join(__dirname, "/js/")
  }
};
