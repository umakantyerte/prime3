<?php
include_once '../conn.php';
$email = $_POST['email'];
if(isset($_POST['submit']))
{
    $result = mysqli_query($conn,"SELECT * FROM admin WHERE `email`='$email'");
    $row = mysqli_fetch_assoc($result);
    $fetch_user_mail=$row['email'];
    $fetch_user_pass=$row['password'];
    $email = $_POST['email'];
    if($email==$fetch_user_mail) {
                $to = $fetch_user_mail;
                $subject = "Forgot Password ";
                // $txt = "<span>Your Password : ".$fetch_user_pass."</span>";
                $txt = "If you want change Password .. Please <a href='/changepassword.php'>Click here</a>";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                mail($to,$subject,$txt,$headers);
                echo " <script>alert('Password Link is shared On Registered email Please check email');location.replace('login.php')</script> ";
            }
                else{
                 echo "<script>alert('Invalid email ID');location.replace('')</script> ";
                }
    }
?>