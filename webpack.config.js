var path = require('path')
var webpack = require('webpack')

var config = {
    entry: './src/js/custom-javascript.js',
    output: {
        filename: 'custom-javascript.bundle.js',
        path: path.join(__dirname, '/src/js/')
    },
}


module.exports = { config }