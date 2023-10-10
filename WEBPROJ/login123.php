<?php

        $host="localhost";
        $dbusername="root";
        $dbpassword="oracle";
        $dbname="login";

        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
        if($conn->connect_error){
            die("connection failed".$conn->connect_error);
        }
    
            $username=$_POST['uname'];
            $password=$_POST['password'];
        
            $sql="select * from user where user_name='$username' and password='$password'";
        
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count=mysqli_num_rows($result);
            if($count==1){
                echo "succes";

                header("Location:about.html");
                
            
            }
            else{
                echo "successssssss";

                echo '<script>
                window.location.href="index.html";
                 alert("login failed.Invalid username or password");
               </script>';
           }
        
        ?>
       