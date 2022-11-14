<form method="POST" >
    username: <input name="username" /> <br />
    password: <input name="password" /> <br />
    <input type="submit" value="Login" />
    <br />
            
</form>

<?php 
    if($_POST["username"]){
        if ($_POST["username"] == "admin" && $_POST["password"] == "123456789") {
            echo "pass";
        }else{
            echo "fail";
        }
    }
?>