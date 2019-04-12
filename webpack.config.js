const path                    = require('path');
const HtmlWebPackPlugin       = require('html-webpack-plugin');
const MiniCssExtractPlugin    = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const UglifyJSPlugin          = require('uglifyjs-webpack-plugin');




module.exports = {


  entry:  ['./src/js/main.js', './src/css/main.scss'],
  output: {
    path: __dirname + '/dist',
    filename: 'bundle.js'
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
        // use: [
        //   {
        //     loader: "style-loader" // creates style nodes from JS strings
        //   },
        //   {
        //     loader: "css-loader" // translates CSS into CommonJS
        //   },
        //   {
        //     loader: "sass-loader" // compiles Sass to CSS
        //   }
        // ]
    },
        {
          test: /\.(gif|png|jpe?g|svg)$/i,
          use: [
            'file-loader',
            {
              loader: 'image-webpack-loader',
              options: {
                mozjpeg: {
                  progressive: true,
                  quality: 65
                },
                // optipng.enabled: false will disable optipng
                optipng: {
                  enabled: false,
                },
                pngquant: {
                  quality: '65-90',
                  speed: 4
                },
                gifsicle: {
                  interlaced: false,
                },
                // the webp option will enable WEBP
                webp: {
                  quality: 75
                }
              }
            },
          ]
        },

      ]
  },
  
  plugins: [
    // new HtmlWebPackPlugin({
    //   template: "./index.html", //from
    //   filename: "./index.html" //lo mete en Dist
    // }),
    new MiniCssExtractPlugin({
      template: "[name].css", //from
      filename: "main.min.css" //lo mete en Dist
    }),
  
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