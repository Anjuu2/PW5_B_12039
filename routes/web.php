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

Route::get('/gyms/presensi', function(){
    setlocale(LC_TIME, 'id_ID.UTF-8');
    $tanggal = strftime('%A, %d-%b-%Y');
    $hari = strftime('%A');
    $tglModal = strftime('%d-%b-%Y');

    return view('gyms.presensi',  [
        'data' => [
            [
                'kelas' => "Gaming",
                'instruktur' => 'Petrus Juan Pradipta Raindarta',
                'ruang' => 'Kelas B',
                'total' =>  6,
                'rating' => 5,
                'tanggal'=> $tanggal,
                'hari' =>  $hari,
                'tglModal'=> $tglModal,
                'kode' => '220712039'
            ],
        ],
        'members' => [
            [
                'nama' => 'Amba',
                'email' => 'amba@gmail.com',
                'telp' => '083386058366',
                'kartu' => 'Gold',
                'pembayaran' => 'Hutang teman',
            ],
            [
                'nama' => 'Rusdi',
                'email' => 'rusdi@gmail.com',
                'telp' => '082576921872',
                'kartu' => 'Silver',
                'pembayaran' => 'Langsung Bayar',
            ],
            [
                'nama' => 'Faiz',
                'email' => 'faiz@gmail.com',
                'telp' => '084476377979',
                'kartu' => 'Gold',
                'pembayaran' => 'Hutang teman',
            ],
            [
                'nama' => 'Azizi',
                'email' => 'azizi@gmail.com',
                'telp' => '0825693659469',
                'kartu' => 'Silver',
                'pembayaran' => 'Langsung  Bayar',
            ],
            [
                'nama' => 'Muthe',
                'email' => 'muthe@gmail.com',
                'telp' => '083385329548',
                'kartu' => 'Gold',
                'pembayaran' => 'Hutang teman',
            ],
            [
                'nama' => 'Kathrin',
                'email' => 'kathrin@gmail.com',
                'telp' => '093362549773',
                'kartu' => 'Silver',
                'pembayaran' => 'Langsung  Bayar',
            ]
        ]
    ]);
});