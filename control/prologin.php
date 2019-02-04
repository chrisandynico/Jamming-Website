<?php
//Koneksi sederhana dengan PDO
$con=new PDO("mysql:host=localhost;dbname=jamming","root","");

        if (isset($_POST['login']))
        {
            $username = $_POST['username'];
            $password  = md5($_POST['password']);

            $query=$con->prepare("select * from j_user where username=? and password=?");
            $query->BindParam(1,$username);
            $query->BindParam(2,$password);
            $query->execute();
            
            if ($query->rowCount()>0) {
                session_start();
                $data=$query->fetch();
                
                if($data['level']=="member")
                {  
                    $_SESSION['username']=$data['username'];
                    $_SESSION['level']=$data['level'];
                    echo"<script>window.alert('Login as Member');location = '../dashboard.php'</script>";
                }
                else 
                {
                    $_SESSION['username']=$data['username'];
                    $_SESSION['level']=$data['level'];
                    echo"<script>window.alert('Login as Administrator');location = '../view/j_admin/dashboard.php?page=home'</script>";          
                }
        }
             else 
                {
                    echo"<script>window.alert('Failed login, Please check Username and Password again !');location = '../index.php'</script>";          
                }
        } 
            
?>