const webpack = require('webpack');
const path = require('path');

module.exports = {
  entry: "./ts-theme/js/script.js",
  devtool: "source-map",
  output: {
    path: path.resolve(__dirname, 'ts-theme/js/min'),
    filename: 'script.js'
  },
  plugins: [
    new webpack.optimize.UglifyJsPlugin()
  ]
};