const path = require('path');
const HtmlWebPackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");



module.exports = {
  watchOptions: {
    poll: true
},

  entry:  ['./src/js/main.js', './src/js/login.js', './src/css/main.scss'],
  output: {
    path: __dirname + '/dist',
    filename: './js/bundle.min.js'
  },
  
  module:{
      rules:[
        {
          test: /\.m?js$/,
          exclude: /(node_modules)/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
      },
      {

        test: /\.scss$/,
        exclude: [/node_modules/],
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
 
    },

        
///////End rules////
      ]
  },
  
  plugins: [
    // new HtmlWebPackPlugin({
    //   template: "./index.html", //from
    //   filename: "./index.html" //lo mete en Dist
    // }),
    new MiniCssExtractPlugin({
      template: "[name].css", //from
      filename: "./css/main.min.css" //lo mete en Dist
    }),
    new CopyPlugin([
      { from: './src/img', to: './img' },
      { from: './src/css/admin.css', to: './css' },
      { from: './src/css/login.css', to: './css' },
    ]),
  
  ],
  optimization: {
    minimizer: [
      // enable the js minification plugin
      new UglifyJSPlugin({
        cache: true,
        parallel: true
      }),
      // enable the css minification plugin
      new OptimizeCSSAssetsPlugin({})
    ]
  }

}