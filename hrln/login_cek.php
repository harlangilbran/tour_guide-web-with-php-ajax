<?php
session_start();
//panggil koneksi
require_once 'koneksi.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST ['email'];
     $password = sha1($_POST ['password']);

    if ($email=="" || $password=="") {
        echo "<script> alert ('email / password harus di isi') 
        window.location='login.php'
        </script>";
    }else{
        // jika inputan telah diisi
        $user = mysqli_query($koneksi,"SELECT id,fullname FROM users WHERE `email`= '$email' AND `password`='$password' ");
        //var_dump($user);
        //cek apakah data ada
        if (mysqli_num_rows ($user) > 0 ){
            //login berhasil
            $data_user = mysqli_fetch_assoc($user);
            //var_dump($data_user);
            $_SESSION['id'] = $data_user ['id'];
            $_SESSION['nama'] = $data_user ['fullname'];
            $_SESSION['is_login'] = true;
            echo "<script> alert ('Login Berhasil')
            window.location='index.php'
             </script>";

        }else{
            //login gagal
            echo "<script> alert ('Login gagal : Email / Password tidak ditemukan')
            window.location='login.php'
             </script>";
        }
    }


}
?>