<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <form action="login.php" method="POST">
                Username : <input type="text" name="username" value="" /><br/>
                Password : <input type="password" name="password" value="" /><br/>
                <input type="submit" value="Login" name="submit"/><br/>
                <input type="reset" value="Reset" name="reset" />
            </form>
        </div>
    </body>
</html>
