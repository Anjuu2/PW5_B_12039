<?php

Route::get('/', function(){
    return view('Login');
});

Route::get('/dashboard', function(){
    return view('Dashboard');
});

Route::get('/gyms/index', function(){
    return view('gyms.index', [
    'kelas'=> [
        [
            'no' => 1,
            'gambar' => asset('img/gambar1.png'),
            "nama" => "Body Combat",
            'instruktur' => 'Charli',
            'ruang' => 'Kelas A',
            'rating' => '4'
        ],
        [
            'no' => 2,
            'gambar' => asset('img/gambar2.png'),
            "nama" => "Bungee",
            'instruktur' => 'Ayas',
            'ruang' => 'Kelas B',
            'rating' => '3'
        ],
        [
            'no' => 3,
            'gambar' => asset('img/gambar3.png'),
            "nama" => "Yoga",
            'instruktur' => 'Bobob',
            'ruang' => 'Kelas C',
            'rating' => '4'
        ],
        [
            'no' => 4,
            'gambar' => asset('img/gambar4.png'),
            "nama" => "Boxing",
            'instruktur' => 'Tio',
            'ruang' => 'Kelas D',
            'rating' => '5'
        ],
    ]
    ]);
});