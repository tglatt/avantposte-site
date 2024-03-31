<?php

return [
    'auth' => [
      'methods' => ['password', 'password-reset']
    ],
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
        ],
    'sylvainjule.matomo.url'        => 'https://avantposte.matomo.cloud/',
    'sylvainjule.matomo.id'         => '1',
    'sylvainjule.matomo.token'      => '93978a3b86df24aeeb10e8575f0b1c67',
];