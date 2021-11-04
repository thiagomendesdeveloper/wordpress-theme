const path = require('path')

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const settings = {
	host: 'localhost',
	port: 3333,
	proxy: 'localhost/SeoGram',
};

module.exports = {
    mode: 'development',
    entry: ['./src/js/script.js', __dirname+'/src/scss/app.scss'],
    output: {
        filename: './assets/js/app.main.js',
        path: path.resolve(__dirname),
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                loader: "babel-loader",
                    options: {
                        presets: ['babel-preset-env']
                    }
                }
            },
            {
                test: /\.(sass|scss)$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
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
                      },
                      // optipng.enabled: false will disable optipng
                      optipng: {
                        enabled: false,
                      },
                      pngquant: {
                        quality: [0.65, 0.90],
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
                ],
            }
        ]
    },
    
    plugins: [
        new MiniCssExtractPlugin({
            filename: './assets/css/main.min.css'
        }),
        new BrowserSyncPlugin ({
            files: "**/*.php",
            port: 3000,
            proxy: settings.proxy,
            watch: true,
            delay: 500,
            open: true,
            reload: true
        }),
    ],
}