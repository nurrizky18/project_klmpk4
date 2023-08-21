<?php

include_once '../controllers/c_login.php';

$login = new c_login();


        if ($_GET['aksi'] == 'register') {

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $role = $_POST['role'];



            //memanggil method register
            $login->register($id, $nama, $email, $pass,$role)
        }