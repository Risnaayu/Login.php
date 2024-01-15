<?php

$conn = mysqli_connect ("localhost","root","","db_user");
if (mysqli_connect_errno()){
echo "Koneksi Gagal".mysqli_connect_error();
}

function registerasi ($data) {
    global $conn;

    $username = strtolower(stripslashes ($data ["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username yang sama 
    $result = mysqli_query($conn, "SELECT username FROM tb_userr WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script> 
                alert('username sudah terdaftar!')
                </script>";
            return false;
    }



//konfirmasi password
    if( $password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
            
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO tb_userr VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);



}  