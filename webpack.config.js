var path = require("path");
// var webpack = require('webpack')

module.exports = {
  mode: "production",
  bail: false,
  entry: "./js/main.js",
  watch: true,
  module: {
    rules: [
      {
        enforce: "pre",
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "eslint-loader"
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader"
      }
    ]
  },
  output: {
    filename: "main.bundle.js",
    path: path.join(__dirname, "/js/")
  }
};
