<?php
return [
    //Simple Links
    '/' =>'site/index',

    [
        'pattern'=>'listas/lista-<idUser:\d+>-de-<list:[a-zA-Z0-9-]+>',
        'route'=>'list/index',
    ],
];