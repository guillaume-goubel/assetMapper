<?php

return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    'container' => [
        'path' => './assets/styles/components/container.css',
        'entrypoint' => true,
        'type' => 'css',
    ],
    'change-color-hover-css' => [
        'path' => './assets/styles/pages/change-color-hover-css.css',
        'entrypoint' => true,
        'type' => 'css',
    ],
    'change-color-hover-js' => [
        'path' => './assets/styles/pages/change-color-hover-js.css',
        'entrypoint' => true,
        'type' => 'css',
    ],
    'change-color-js' => [
        'path' => './assets/typescript/pages/change-color-hover.ts',
        'entrypoint' => true,
    ],
    'change-size-js' => [
        'path' => './assets/typescript/pages/change-size-click.ts',
        'entrypoint' => true,
    ],
    'toggleClass' => [
        'path' => './assets/typescript/components/toggleClass.ts',
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
    'jquery' => [
        'version' => '3.7.1',
    ],
];
