// webpack.mix.js
let mix = require("laravel-mix");

mix.sass("src/style.scss", "/").js("src/index.js", "/").setPublicPath("dist");
