// postcss.config.js
const tailwindcss = require("tailwindcss");

module.exports = {
    plugins: [
        require('postcss-partial-import'),
        tailwindcss("tailwind.config.js"),
        require('postcss-nested'),
        require('autoprefixer'),
        require('cssnano')({
            preset: 'default',
        }),
    ]
}