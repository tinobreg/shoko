<?php
return [
    //Simple Links
    '/' =>'site/index',

    [
        'pattern'=>'lista/<idUser:\d+>/lista-de-<list:[a-zA-Z0-9-]+>',
        'route'=>'list/index',
    ],
];