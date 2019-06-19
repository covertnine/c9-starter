var path = require("path");
const cfg = require("./buildconfig.json");

module.exports = {
  mode: "production",
  bail: false,
  entry: "./js/src/main.js",
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
    path: path.join(__dirname, "/js/dist")
  }
};
