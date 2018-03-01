<?php

return [

	/*
    |--------------------------------------------------------------------------
    | End Point Api ( Konfigurasi Server Akun )
    |--------------------------------------------------------------------------
    |
    | Starter : http://rajaongkir.com/api/starter
    | Basic : http://rajaongkir.com/api/basic
    | Pro : http://pro.rajaongkir.com/api
    |
    */

	'end_point_api' => env('RAJAONGKIR_ENDPOINTAPI', 'http://rajaongkir.com/api/starter'),

	/*
    |--------------------------------------------------------------------------
    | Api key
    |--------------------------------------------------------------------------
    |
    | Isi dengan api key yang didapatkan dari rajaongkir
    |
    */

	'api_key' => env('RAJAONGKIR_APIKEY', '0df6d5bf733214af6c6644eb8717c92c '),
];
