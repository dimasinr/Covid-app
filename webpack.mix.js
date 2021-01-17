const mix = require('laravel-mix');

mix.react('resources/js/app.js', 'public/js')
// .sass('resources/sass/app.scss', 'public/css');  
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
       ]);

mix.react('resources/js/backend.js', 'public/js')
// .sass('resources/sass/backend.scss', 'public/css');  