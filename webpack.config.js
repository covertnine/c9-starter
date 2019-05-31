var path = require('path')
// var webpack = require('webpack')

var config = {
    entry: './js/custom-javascript.js',
    output: {
        filename: 'custom-javascript.bundle.js',
        path: path.join(__dirname, '/js/')
    },
}


module.exports = { config }