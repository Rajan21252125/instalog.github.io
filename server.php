<?php
    $con = new mysqli ("localhost","root","","users"); 
    session_start();
    // for login
    if(isset($_POST['login']))
    {
        $query1="SELECT * FROM `test` WHERE `user`='$_POST[email_username]' OR `email`='$_POST[email_username]'";
        $result1=mysqli_query($con,$query1);
        if($result1)
        {
            if(mysqli_num_rows($result1)==1)
            {
                $result_fetch1=mysqli_fetch_assoc($result1);
                if(password_verify($_POST['password'],$result_fetch1['password']))
                {
                    $_SESSION['logged_in']=true;
                    $_SESSION['username']=$result_fetch1['user'];
                    echo"
                    <script>
                      alert('Registeration Succesfully');
                      window.location.href='dev.php';
                    </script>
                    ";
                }
                else
                {
                    echo"
                    <script>
                      alert('Incorrect password');
                      window.location.href='practice.html';
                    </script>
                    ";
                }
            }
            else
            {
                echo"
                <script>
                  alert('Incorrect Username and Email-id');
                  window.location.href='practice.html';
                </script>
                ";
            }
        }
        else
        {
            echo"
            <script>
              alert('sorry for incovnience we will be back shortly.....');
              window.location.href='practice.html';
            </script>
            ";
        }
    } 
    // for registeration
    if(isset($_POST['register']))
    {
        $user_exist_query="SELECT * FROM `test` WHERE `user`='$_POST[username]' OR `email`='$_POST[email]'";
        $result=mysqli_query($con,$user_exist_query);
        if($result)
        {
            if(mysqli_num_rows($result)>0)
            {
                $result_fetch=mysqli_fetch_assoc($result);
                // agr username match hua toh
                if($result_fetch['user']==$_POST['username'])
                {
                    echo"
                    <script>
                      alert('$_POST[username] - USERNAME ALREADY EXIST');
                      window.location.href='practice.html';
                    </script>
                    ";
                }
                // agr email match hua toh
                else
                {
                    echo"
                    <script>
                      alert('$_POST[email] - EMAIL-ID ALREADY EXIST');
                      window.location.href='practice.html';
                    </script>
                    ";
                }
            }
            else
            // agr sabh kuch sahi rha toh
            {
                $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                $query="INSERT INTO `test`(`email`, `password`, `user`) VALUES ('$_POST[email]','$password','$_POST[username]')";
                if(mysqli_query($con,$query))
                {
                    // agr query succesfully register hua toh
                    echo"
                    <script>
                      alert('REGISTERATION SUCCESFULLY');
                      window.location.href='dev.php';
                    </script>
                    ";
                }
                else
                {
                    // kuch error hua toh
                    echo"
                    <script>
                      alert('sorry for incovnience we will be back shortly.....');
                      window.location.href='practice.html';
                    </script>
                    ";
                }
            }
        }
        else
        {
            echo"
            <script>
              alert('sorry for incovnience we will be back shortly.....');
              window.location.href='practice.html';
            </script>
            ";
        }
    }
?>