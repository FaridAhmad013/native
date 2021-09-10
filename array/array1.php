<?php 

$buah = ['Mangga', 'Apel', 'Jeruk', 'Kedondong'];
$nama = ['email' => 'farid@gmail.com', 'password' => '12345'];
echo $buah[0];
echo $buah[2];

echo "<hr>";
echo "Email :".$nama['email'];
echo "<br>";
echo "Password :".md5($password['password']);
echo "<hr>";

$warna = ['Bleu', 'Rouge', 'Blanc', 'Noir'];
 for($i = 0; $i < count($warna); $i++){
        echo $warna[$i];
 }

 echo "<hr>";
 $penulis = [
        'judul' => 'parahmen', 'gila men'  
 ];

echo $penulis['judul']."<hr>";

$hobies = [
       'Membaca',
       'Menulis',
       'NgeBlog',
];

$hobies[1] .= ' Codingan';
unset($hobies[2]);

$hobies[] = 'tidur';

foreach($hobies as $hobi){
       echo $hobi."<br>";
}

echo "<hr>";

$email['subjek'] = "Apa Kabar";
$email['pengirim'] = 'farid@admin';
$email['isi'] = 'Apa Kabar? lama tak jumpa';

echo "<pre>";
print_r($email);
echo "</pre>";

echo $email['pengirim'].'<hr>';

//baris kebawah kolom kesamping
$matriks = [
       [2,3,4],
       [5,6,7],
       [8,9,10],
];

foreach($matriks as $key => $value){
       echo "$key :$value[0] $value[1] $value[2] <br>";
}

echo '<hr>';

       $posts = [
              [
                     'judul' => 'Mencari biji naga',
                     'penulis' => 'Unda',
              ],
              [
                     'judul' => 'Perjuangan mencari biji Naga',
                     'penulis' => 'Unda',
              ],
              [
                     'judul' => 'Melawan emak Biji Naga',
                     'penulis' => 'Unda',
              ],
       ];

       foreach($posts as $post){
              echo "<h2>".$post['judul']."</h2>";
              echo "<p>".$post['penulis']."</p>";
              echo "<hr>";
       }
?>