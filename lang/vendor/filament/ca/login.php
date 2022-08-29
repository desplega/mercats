<?php

return [

    'title' => 'Registre',

    'heading' => 'Entra al teu compte',

    'buttons' => [

        'submit' => [
            'label' => 'Entra',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'Correu electrònic',
        ],

        'password' => [
            'label' => 'Contrasenya',
        ],

        'remember' => [
            'label' => 'Recorda\'m',
        ],

    ],

    'messages' => [
        'failed' => 'Aquestes credencials no coincideixen amb les registrades.',
        'throttled' => 'Massa intents de registre. Si us plau, prova-ho en :seconds segons.',
    ],

];
