!!! Asset Mapper tutorial !!!

# 1. new project 
    sy new assetMapper --webapp

# 2. installation de assetMapper
    composer require symfony/asset-mapper symfony/asset symfony/twig-pack

# 3. installer la CLI de tailwind et déplacer dans le projet
    curl -sLO https://github.com/tailwindlabs/tailwindcss/releases/latest/download/tailwindcss-linux-x64
    chmod +x tailwindcss-linux-x64
    mv tailwindcss-linux-x64 ./bin/tailwindcss

# 4. Init TailWind via la CLI

    cf. https://tailwindcss.com/docs/guides/symfony
    
    # 4.1 changer dans le tailwind.config les folders à scanner pour tailwind
    content: [
        "./assets/**/*.js",
        "./templates/**/*.html.twig",
    ],

    # 4.2 Create a tailwind.config.js file
    ./bin/tailwindcss init

# 5. Changer dans le base le lien vers le tailwind.config.js
    <link rel="stylesheet" href="{{ asset('styles/app.tailwind.css') }}">

    et build en mode dev : 

    # Start a watcher
    ./bin/tailwindcss -i assets/styles/app.css -o assets/styles/app.tailwind.css --watch

    ou build en mode prod : 

    # Compile and minify your CSS for production
    ./bin/tailwindcss -i assets/styles/app.css -o assets/styles/app.tailwind.css --minify

# ajouter une bibliotheque js : JQUERY par exemple

    sc importmap:require jquery

    Et dans app.js => 


