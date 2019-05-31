var path = require("path");
// var webpack = require('webpack')

module.exports = {
  mode: "development",
  entry: "./js/custom-javascript.js",
  output: {
    filename: "custom-javascript.bundle.js",
    path: path.join(__dirname, "/js/")
  }
};
