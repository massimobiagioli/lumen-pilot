var webpack = require("webpack");
var CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
  entry: './src/main.js',
  output: {
    path: '../public/js',
    filename: 'client.min.js'
  },
  plugins: [
    new webpack.optimize.UglifyJsPlugin({minimize: true}),
    new CopyWebpackPlugin([
        { from: 'node_modules/x-tag/dist/x-tag-core.min.js', to: 'x-tag-core.min.js' },
    ])
  ],
  module: {
    loaders: [
      {
        test: /\.js$/,
        loader: 'babel',
        exclude: /node_modules/
      }
    ]
  }
};