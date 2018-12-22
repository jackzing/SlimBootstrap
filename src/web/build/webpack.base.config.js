const path = require('path');
const webpack = require('webpack');
//const ExtractTextPlugin = require('extract-text-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
//const HtmlWebpackPlugin = require('html-webpack-plugin');
const devMode = true; //process.env.NODE_ENV !== 'production';

module.exports = {
    entry: {
        vendor: 'jquery',
        index: path.resolve(__dirname, '../js/index.js')
    },
    output: {
        filename: 'js/[name].min.js',
        path: path.resolve(__dirname, '../../../public/'),
        publicPath: '/public/'
    },
    module: {
        rules: [
        {
            test: /\.(le|sc|c)ss$/,
            use: [
                // devMode ? 'style-loader' : MiniCssExtractPlugin.loader,
                MiniCssExtractPlugin.loader,
                'css-loader',
                'less-loader'
//                'postcss-loader',
            ],
        },
        {
            test: /\.js$/,
            exclude: /node_modules/,
            loader:'babel-loader'
        }, {
                test: /\.(png|svg|jpg|gif)$/,
                use: [
                    {
                        loader: 'url-loader',
                        options: {
                            limit: 1024,
                            name: 'images/[name].[ext]'
                        }
                    }
                ]
        }, {
                test:/\.(woff|svg|eot|ttf|woff2)$/,
                use: [
                         {
                            loader: "url-loader",
                            options: {
                                limit: 2048,   //小于50K的 都打包
                                name: 'webfonts/[name].[ext]'
                            }
                         }
                ]
	        }  
        ]
    },
    plugins: [
        // new webpack.optimize.CommonsChunkPlugin({
        //     name: 'vendor'
        // }),
        //new HtmlWebpackPlugin({
        //    template: './src/index.html',
        //    chunks: ['vendor', 'index'],
        //    hash: true
        //}),
        // new ExtractTextPlugin('css/style.min.css'),
        new MiniCssExtractPlugin({
            filename: "css/style.min.css"
        })
    ]
};
