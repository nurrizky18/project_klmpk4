<?php
//memanggil class atau file c_koneksi
include_once 'c_koneksi.php';

//ini nama kelas dan diwajibkan nama kelas harus sama dengan nama file
class c_login{

    //fungsi atau method untuk memasukan data dari form register
    public function register($id, $nama, $email, $pass, $role){
        
        //membuat objek dari kelas c_koneksi
        $conn = new c_koneksi();
       
        //$sql adalah variable yang isinya perintah untuk memasukan data ke tabel users
        $sql = "INSERT INTO user VALUES('$id', '$nama', '$email', '$pass', '$role','')";

        //mysqli_query adalah exsekutor untuk menjalankan perintah yang diatas,dengan memiliki 2 parameter,parameter 1 koneksi, parameter 2 adalah perintah
        $query = mysqli_query($conn->conn(), $sql);

        //untuk mengecek apakah data berhasil masuk ke database atau tidak 
        if ($query) {
        //echo "<script>alert('Data User Berhasil Ditambahkan');window.location='register.php'</script;
            echo"data tidak gagal ditambahkan";

        } else {
            //echo "<script>alert('Data User Tidak Berhasil Ditambahkan');window.location='register.php'</script;
            echo "data gagal ditambahkan";
        }
    }

}
    
    public function login(){

}


?>