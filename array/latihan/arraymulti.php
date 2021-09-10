<?php 

    $kampus = [
        [
            //dosen aceng
            'namaDosen' => 'Aceng Fikri',
            
            //daftar mahasiswa
            'daftarMahasiswa' => [
        
                //mahasiswa 1
                ['namaMahasiswa' => 'Farid',

                'daftarMakul' => [
                    [
                      'namaMakul' => 'fisika',  
                    ],
                    [
                        'namaMakul' => 'Manajemen',
                    ],
                    [
                        'namaMakul' => 'RPL',
                    ],
                ],

                'daftarHobi' => [
                    ['namaHobi' => 'Mendengarkan musik'],
                    ['namaHobi' => 'renang'],
                ],

            ],

            //mahasiswa 2
                ['namaMahasiswa' => 'Ahmad',

                'daftarMakul' => [
                    [
                      'namaMakul' => 'TKR',  
                    ],
                    [
                        'namaMakul' => 'Perkantoran',
                    ],
                    [
                        'namaMakul' => 'Wirausaha',
                    ],
                ],

                'daftarHobi' => [
                    ['namaHobi' => 'Nonton film'],
                    ['namaHobi' => 'renang'],
                ],

            ],

            //mahasiswa 3
                ['namaMahasiswa' => 'Fadhilah',

                'daftarMakul' => [
                    [
                      'namaMakul' => 'IPA',  
                    ],
                    [
                        'namaMakul' => 'IPS',
                    ],
                    [
                        'namaMakul' => 'Desain',
                    ],
                ],

                'daftarHobi' => [
                    ['namaHobi' => 'Ngoding'],
                    ['namaHobi' => 'renang'],
                ],

            ],

            ]
        ],
      
        //dosen ujang
        [
            'namaDosen' => 'Ujang Betok',

            //daftar mahasiswa
            'daftarMahasiswa' => [
                
                //mahasiswa 1
                ['namaMahasiswa' => 'Cecep',

                'daftarMakul' => [
                    [
                      'namaMakul' => 'fisika',  
                    ],
                    [
                        'namaMakul' => 'Desain',
                    ],
                    [
                        'namaMakul' => 'Ips',
                    ],
                ],

                'daftarHobi' => [
                    ['namaHobi' => 'Bersantuy ria'],
                    ['namaHobi' => 'renang'],
                ],

            ],
            //mahasiswa 2
                ['namaMahasiswa' => 'Ikbal',

                'daftarMakul' => [
                    [
                      'namaMakul' => 'fisika',  
                    ],
                    [
                        'namaMakul' => 'IPA',
                    ],
                    [
                        'namaMakul' => 'Biologi',
                    ],
                ],

                'daftarHobi' => [
                    ['namaHobi' => 'Tidur'],
                    ['namaHobi' => 'renang'],
                ],

            ],

            //mahasiswa 3
                ['namaMahasiswa' => 'Ardiansyah',

                'daftarMakul' => [
                    [
                      'namaMakul' => 'fisika',  
                    ],
                    [
                        'namaMakul' => 'rpl',
                    ],
                    [
                        'namaMakul' => 'Biologi',
                    ],
                ],

                'daftarHobi' => [
                    ['namaHobi' => 'Mancing'],
                    ['namaHobi' => 'renang'],
                ],
            ],

            ]

        ]
    ];

    //menampilkan nama dosen
    foreach($kampus as $dosen){
        echo "Nama Wali Dosen : <b>".$dosen['namaDosen']."</b><br>";

        //menampilkan daftar mahasiswa
        foreach($dosen['daftarMahasiswa'] as $mahasiswa){
            $index +=1;
            echo "<ul>";
            echo "<li>Data ke $index </li>";
            echo "Nama Mahasiswa :".$mahasiswa['namaMahasiswa']."<br>";


            //menampilkan mata kuliah
            echo "Daftar mata kuliah: <br>";
            echo "<ol>";
            foreach($mahasiswa['daftarMakul'] as $makul){
                echo "<li>".$makul['namaMakul']."</li>";
            }
            echo "</ol>";

            //menampilkan daftar hobi
            echo "<li>Nama Hobi:</li>";
            echo "<ol>";
            foreach($mahasiswa['daftarHobi'] as $hobi){
                echo "<li>".$hobi['namaHobi']."</li>";
            }
            echo "</ol>";


            echo "</ul>";
        }
    }