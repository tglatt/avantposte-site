<?php

return [
    'auth' => [
      'methods' => ['password', 'password-reset']
    ],
    'debug' => true,
    'routes' => [
        [
          'pattern' => 'accueil/espacesdetravail',
          'action'  => function () {
            return page('activites/coworking');
            // do something here
            // when the URL matches the pattern above
          }
        ],
        [
          'pattern' => 'my/second/url',
          'action'  => function () {
            // ...
          }
        ]
      ]

];