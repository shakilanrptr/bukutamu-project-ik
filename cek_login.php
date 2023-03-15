
<?php
$koneksi = mysqli_connect(
    "localhost", "root", "123456", "dbbukutamu"); 
        
// Check connection 
if (mysqli_connect_errno()) { 
    echo "Database connection failed."; 
} 
  
//atur variabel
$err    = "";
$username = "";


if(isset($_POST['login'])){
    
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES) ;
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES) ;

    if($username == '' or $password == ''){
        $err .="<li>Silahkan masukkan username dan juga password.</li>";
    }else{
        $sql = "SELECT * FROM login WHERE username='$username' LIMIT 1";
        $q1 = mysqli_query($koneksi, $sql);
        $r1 = mysqli_fetch_array($q1);

        if(!$r1){
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
            echo 'gagal 1';
        }elseif($r1['password'] != $password){
            $err .= "<li>password yang dimasukkan tidak sesuai</li>";
            echo 'gagal 2';
        }

        if(empty($err)){
            session_start();
            $_SESSION['session_username'] = $username; //server
            $_SESSION['session_password'] = md5($password);

            header("location:admin.php");
        } else{
            echo "<script>alert('Email atau password salah')</script>";
        }
    }
}

?>