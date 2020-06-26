<?php 
// Import Data dari file
require_once('animal-oop.php');
require_once('forg.php');
require_once('ape.php');

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~RELEASE 0
$sheep = new Animal("shaun");

// ------------------------------- --Ambil data property(Berfungsi)
// echo $sheep->name; // "shaun"
// echo"</br>";
// echo $sheep->legs; // 2
// echo"</br>";
// echo $sheep->cold_blooded; // false

// ---------------------------------Pengembangan

// Bisa juga untuk ubah data bisa menggunakan method set
$sheep->set_name('Kafri Bung');

// Untuk ambil data menggunakan method get
print $sheep->get_name();
echo"</br>";
print $sheep->get_legs();
echo"</br>";
print $sheep->get_cold();

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~RELEASE 1

// Kelas Kodok yang diturunkan dari kelas animal
echo "<h3>Kelas Animal inheritance kelas Kodok </h3>";

$kodok = new Frog("buduk");
print $kodok->get_name();  //Get name milik dari class animal tetapi dapat digunakan di kelas frog karena sudah diwariskan
echo"</br>";
print $kodok->jump() ; // "hop hop"
echo"</br>";
print $kodok->get_legs() ; // "4" // get_legs tidak diwariskan dari animal (Sudah di overwriting) sehingga kaki kodok == 4


// Kelas Ape yang diturunkan dari kelas animal
echo "<h3>Kelas Animal inheritance kelas Ape </h3>";

$kodok = new Ape("kera-sakti");
print $kodok->get_name();  //Get name milik dari class animal tetapi dapat digunakan di kelas frog karena sudah diwariskan
echo"</br>";
print $kodok->yell() ; // "hop hop"
echo"</br>";
print $kodok->get_legs() ; // "2" // get_legs  diwariskan dari animal  sehingga kaki kera == 2 
