<?php

$menu = [
  [
    "nama" => "Beranda",
    'subMenu' => [
        [
          "nama" => "Olahraga",
          "subMenu" => [
            [
              "nama" => "Bola"
            ],
            [
              "nama" => "Bulu Tangkis"
            ]
          ]
        ],
        [
          "nama" => "Politik",
          "subMenu" => [
              
          ],
        ],
        [
          "nama" => "Manca Negara"
        ]
      ]
  ],
  [
    "nama" => "Berita",
    "subMenu" => [
      [
        "nama" => "Olahraga",
        "subMenu" => [
          [
            "nama" => "Bola"
          ],
          [
            "nama" => "Bulu Tangkis"
          ]
        ]
      ],
      [
        "nama" => "Politik"
      ],
      [
        "nama" => "Manca Negara"
      ]
    ]
  ],

];

foreach($menu as $val){
    echo $val['nama']."</br>";
    echo "<ul>";
    foreach($val['subMenu'] as $menu){
        echo "<li>".$menu['nama']."</li>";

        echo "</ul>";
    }
}
