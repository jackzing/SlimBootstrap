const webpack = require('webpack');
const merge = require('webpack-merge');
const baseConfig = require('./webpack.base.config.js');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

module.exports = merge(baseConfig, {
    devtool: false,
    optimization: {
        minimizer: [
            // we specify a custom UglifyJsPlugin here to get source maps in production
            // new UglifyJsPlugin({
            //     cache: true,
            //     parallel: true,
            //     uglifyOptions: {
            //         compress: false,
            //         ecma: 6,
            //         mangle: true
            //     },
            //     sourceMap: true
            // }),
            new OptimizeCSSAssetsPlugin({})
        ]
    }
});
