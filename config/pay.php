<?php

return [
    'alipay' => [
        'app_id' => 2016092700610783,
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAweIpdwguj8lufjun02RzBlYQ3Glz3MBMX3dhtzMVu5hhK3/h5j9E+DazQiobD1oyfyK/giCqzln3lFNk50T0Ch8IjoiFRMQKE8VQOG5a2JbLvZ3HJiushuw/JTrU+1AA+Wv3AkIM3PO9XSaeCi2yV/zcqfKhaM51iFgokGbk/vqkKbU2eT3mhFOoMIMvRV57nQQnxbnzLDI1Y5IaAJbjk2qPsYWHIzsrqirae1TKe352BaLmLDnRWC/Yt7KVrA4s65ITU5b/5iKAhW+cA6rCqqdRotPaJ7NRuSY2fBw7j4gLK74TMmaM2jAUzxR2zSuotJ/ut/wltaJb75V9hNlPTwIDAQAB',
        'private_key' => 'MIIEogIBAAKCAQEAqiMm6KbwwG6aU9qN7l31nlOf2zwRqtlr59K7HBnuD8xDy2GAZtUVbj/t6cHOqL87HY/qXB45aD+n0UlyRXD/L8A25idI9BS5yGOxJGCaEKXBUsqVFiHUYuPGwxtY5tr8JtfDuXy3/FMLCFyG44uOlCJNetCgu5e6/lnpDwWy2TTT1T5l715WngP/Feq7zLLntFZFfZV3aYEjc+yQ2qhXu0dCMjdfozoJb9Qk3/dQQNAqr/vX+dkOhB5FmDpZj6BmJmaVJO4VCw2+z8ywhrcEVruSbBKBGBypMu5Ph1UpdyyzeGw8Ybnjuhd4lZEip1kk87bgF1NikuZLHRVTkrbY6wIDAQABAoIBADRKJXUviaK623eWHjT6b7i/XswUhCGMPRu8qoESfxYf414okzwHlVSTFV3YkNlQHK0TRCYXq/EcT0mFVzd8aRGV88l8nXFWxVqPOSxC/FbNesMlO/jXYN0bwETKrOIWv5R4j9D8Qdes9iEVvudERwfEGyf54syE75WosHZLfBJBJ9nYQlnEbCkT55fssPLTYGHAydifuTJWXrwwXRVEepp7HZ6OxjmPE+IYLMPjB+V9TCw19RTWo/rGKI4qbxe/DebJ3N5vDyJ2ndbFvyIel/whsBlrYvYC8WbctbU5ZjprcAipK/vR/w5tYvh51jbpKJGZosV+OSJMOKGd5hKcCbECgYEA1yhCizm3Wp59HJ5kly7SqtyqIeaJmJg7topGc3b3pVWM8vmOyjxxfMI34EeM97k3+yyzGjSiujheI5NSRYjx+llovCGtbpB2Bv1+ddCRoRusfC048/mZsQdnOfBeGQqX3UeAITKkKllDS3jMWmOGRsY6HMryxJCMUcK62g4VDocCgYEAym8cfZJ2Owt/qC6eADjayFSYMJY9CLVDruuKmD8kfANIEqaXy/kU5DVGDzauEPESAA+SpRPwpNuZC9LkzvwA1e3jL94Qj+MR7metC5xfxmIOf9L51Eas+Eyy3/sUGadbBuTGhydIBKpcosf1ejEsenJ/rnCjb+q+syVy2x9id30CgYBcmMISwzMq99ymbXCjNA6MZE2AK4R6PMIuLFJnrQKlkC0KAOc4GE1LQRblGkYL8xWprrIiDBcgh9PUAbo9nNNvR/1wQhou5FM3bO946ttR9+QCyT+imIBRlPsTD2Sf6FQ1cmktYGsQorv4hjOEjyKh4PvvmlRizkblhSX/ZGIhjwKBgDEY58kQ97n0XP7WZ53YLEAAPHU0SxNMm2DWYePxFJE7XoSfgRuIiueagCZ6dZdIULxRCpkdD/V8CU+T08jb1/wK2Vonus6bHSM8Y/z37Ua5S5j2+37fsV37hDrMs6BRNcOjQv9OqKnxA8y7QK9lM8ty78LIMOuY/K2IfKXmo8QlAoGAEg7nLX0p06JsJfFm10nhc60ltFP+jmXygmj5S0s1jQMqwXszIt/PnnOi6izzoMyDmaqdXLca+g4X6HxR0wIwWbI0MGhMEl+ru29DDjIurAPahX9SxtDD5rmURhOAs+Td9Fzkyx2SBC9/uOpmTpOeU8ovEcGTTj4bZacoWp3NLHQ=',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ]
    ],

    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' =>[
            'file' => storage_path('logs/wechat_pay.log'),
        ]
    ],

];