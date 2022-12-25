<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Lukuso</title>
    </head>
    <body>
        <form method="post" action="login.php">
            <h1>Login</h1>
            <div class="textboxdiv">
                <input type="text" placeholder="Username" name='username'>
            </div>
            <div class="textboxdiv">
                <input type="password" placeholder="Password" name='password'>
            </div>
            <input type="submit" value="Login" class="loginbtn" name="login_btn">
            <div class="signup">
                Don't have an account ?
                <br>
                <a href="#">Sign up</a>
            </div>
        </form>
    </body>
</html>
<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login_btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM website.logindetails WHERE username = '$username'";
    $result= mysqli_query($conn,$sql);
    while($row = mysqli_fetch.assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:index.html');
        }else{
            echo "<script>
            alert('Login unsuccessful');
            </script>"
        }
           
    }

}
?>

