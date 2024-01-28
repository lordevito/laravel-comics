# Laravel + vite template

Steps:

1-Installare laravel (composer create-project laravel/laravel .)
2-lanciare server (php artisan serve)
3-scarico tutti i pacchetti npm in un altre terminale (npm install - npm run dev)
4-Installare SASS (npm i --save-dev sass)
5-modificare il file css in sass
6-in viteConfig aggiungere: resolve: {
alias: {
'~resources': '/resources/'
}
},
7-