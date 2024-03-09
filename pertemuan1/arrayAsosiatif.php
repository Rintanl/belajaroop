<?php
    $mahasiswa = [
        'nim' => '2222105193',
        'nama' => 'ranti rahmayani',
        'kelas' => '2TI04',
        'jurusan' => 'teknik informatika',
        'fakultas' => 'teknik'
    ];
    //cara manggil array
    //echo $mahasiswa['nim'],'<br>;

    $mahasiswaBanyak = [
        ['nim' => '2222105193',
        'nama' => 'ranti rahmayani',
        'kelas' => '2TI04',
        'jurusan' => 'teknik informatika',
        'fakultas' => 'teknik'
         ],
        ['nim' => '2222105193',
        'nama' => 'ranti rahmayani',
        'kelas' => '2TI04',
        'jurusan' => 'teknik informatika',
        'fakultas' => 'teknik'
        ],
        ['nim' => '2222105193',
        'nama' => 'ranti rahmayani',
        'kelas' => '2TI04',
        'jurusan' => 'teknik informatika',
        'fakultas' => 'teknik'
    ],
];
foreach ($mahasiswaBanyak as $manggilin11){
    echo $manggilini11['nim']."<br>";
    echo $manggilini11['nama']."<br>";
    echo $manggilini11['kelas']."<br>";
    echo $manggilini11['jurusan']."<br>";
    echo $manggilini11['fakultas']."<br>";

}
?>