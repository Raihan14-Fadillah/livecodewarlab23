<!-- ceklogin -->
<?php
require 'koneksi.php';
$user=@$_POST['email'];
$pass=@$_POST['password'];

if (empty($user)){
    $result="email tidak boleh kosong";
}elseif (empty($pass)){
    $result="Password Tidak boleh kosong";
}elseif (empty($email) && empty($pass)){
    $ressult="email dan password tidak boleh kosong";
}else{
    $query="SELECT * FROM pengguna WHERE email ='$user'";
    $execute=$konek->query($query);
    if ($execute->num_rows > 0){
        $data=$execute->fetch_array(MYSQLI_ASSOC);
        if (password_verify($pass,$data['password'])){
            session_start();
            $_SESSION['email']=$data['email'];
            $_SESSION['pass']=$data['password'];
            $result='success';
            if ($data['nim']= NULL){
                header('location:./admin.php');
            }else{
                header('location:./mahasiswa.php');
            }
        }else{
            $result="email dan Password tidak cocok";
        }
    }else{
        $result="email tidak terdaftar";
    }
}
echo json_encode($result);