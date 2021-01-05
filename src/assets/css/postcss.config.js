// postcss.config.js
const tailwindcss = require("tailwindcss");

module.exports = {
    plugins: [
        tailwindcss("tailwind.config.js"),
        require('postcss-import'),
        require('postcss-nested'),
        require('postcss-custom-properties'),
        require('autoprefixer'),
    ]
}