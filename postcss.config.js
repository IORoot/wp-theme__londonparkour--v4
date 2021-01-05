// postcss.config.js
const tailwindcss = require("tailwindcss");

module.exports = {
    plugins: [
        tailwindcss("./src/assets/css/tailwind.config.js"),
        require('postcss-import'),
        require('postcss-nested'),
        require('postcss-custom-properties'),
        require('autoprefixer'),
    ]
}