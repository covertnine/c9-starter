var path = require("path");
const cfg = require("./buildconfig.json");

module.exports = {
	mode: "production",
	bail: false,
	entry: path.join(__dirname, cfg.paths.js, "main.js"),
	watch: true,
	optimization: {
		minimize: false
	},
	module: {
		rules: [
			{
				enforce: "pre",
				test: /\.js$/,
				exclude: /node_modules/,
				loader: "eslint-loader"
			},
			{
				test: /.js$/,
				exclude: /node_modules|admin\.js/,
				loader: "babel-loader"
			},
			{
				test: /admin\.js$/,
				exclude: /node_modules/,
				loader: "babel-loader",
				options: {
					presets: ["react"],
					plugins: ["transform-object-rest-spread"]
				}
			}
		]
	},
	output: {
		filename: "main.bundle.js",
		path: path.join(__dirname, cfg.paths.dist)
	}
};
