<?php

//nama kelas harus sama persis dengan nama file
class c_koneksi{

    //membuat fungsi untuk koneksi ke database project klmpk4
    public function conn(){
       $conn = mysqli_connect('localhost', 'root', '', 'project_klmpk4');

       //untuk mengecek apakah koneksi kedatabase berhasil atau tidak 
 if (!$conn) {
     die("koneksi gagal:" . mysqli_connect_error());

    }else{
     //retrun $conn;
     echo "koneksi ke database berhasil";
      }
    }
}


//inisialisasi objek atau membuat objek hadir kelas c_koneksi
$conn = new c_koneksi();
//memanggil fungsi atau method conn
$conn->conn();
?>