<?php

return [

    'columns' => [

        'tags' => [
            'more' => 'i :count més',
        ],

    ],

    'fields' => [

        'search_query' => [
            'label' => 'Cerca',
            'placeholder' => 'Cerca',
        ],

    ],

    'pagination' => [

        'label' => 'Paginació Navegació',

        'overview' => 'Es mostra :first de :last de :total resultats',

        'fields' => [

            'records_per_page' => [

                'label' => 'per pàgina',

                'options' => [
                    'all' => 'Tot',
                ],

            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Ves a la pàgina :page',
            ],

            'next' => [
                'label' => 'Següent',
            ],

            'previous' => [
                'label' => 'Anterior',
            ],

        ],

    ],

    'buttons' => [

        'disable_reordering' => [
            'label' => 'Finalitza la reordenació de registres',
        ],

        'enable_reordering' => [
            'label' => 'Reordena els registres',
        ],

        'filter' => [
            'label' => 'Filtre',
        ],

        'open_actions' => [
            'label' => 'Accions obertes',
        ],

        'toggle_columns' => [
            'label' => 'Intercanvia les columnes',
        ],

    ],

    'empty' => [
        'heading' => 'No s\'han trobat registres',
    ],

    'filters' => [

        'buttons' => [

            'remove' => [
                'label' => 'Elimina el filtre',
            ],

            'remove_all' => [
                'label' => 'Elimina tots els filtres',
                'tooltip' => 'Elimina tots els filtres',
            ],

            'reset' => [
                'label' => 'Reincia els filtres',
            ],

            'close' => [
                'label' => 'Tanca',
            ],

        ],

        'indicator' => 'Activa els filtres',

        'multi_select' => [
            'placeholder' => 'Tots',
        ],

        'select' => [
            'placeholder' => 'Tots',
        ],

        'trashed' => [

            'label' => 'Esborra els registres',

            'only_trashed' => 'Només els registres eliminats',

            'with_trashed' => 'Amb els registres eliminats',

            'without_trashed' => 'Sense els registres eliminats',

        ],

    ],

    'reorder_indicator' => 'Arrossega i enganxa els registre en ordre.',

    'selection_indicator' => [

        'selected_count' => '1 registre seleccionat.|:count registres seleccionats.',

        'buttons' => [

            'select_all' => [
                'label' => 'Selecciona\'ls tots :count',
            ],

            'deselect_all' => [
                'label' => 'Deselecciona\'ls tots',
            ],

        ],

    ],

];
