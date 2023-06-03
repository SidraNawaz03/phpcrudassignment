<?php 
    if( isset( $_GET['login-form'] ) ){
        $username = $_GET['username'];
        $password = $_GET['password'];

        if($username == 'admin' && $password == 'test') {

            header( 'Location: /dashboard.php?username=' . $username);
            exit;
        }
        else{
            echo "Username or password is wrong";
        }

    }
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="input-form">
            <h2 class="header">LOGIN</h2>
            <h4>Please enter your login and password</h4>
            <form action="">

                <div class="field-group">
                    <input type="text" name="username" placeholder="Username"/>
                </div>

                <div class="field-group">
                    <input type="password" name="password" placeholder="Password"/>
                </div>

                <div class="field-group">
                    <input type="submit" name="login-form" value="Login" />
                </div>

            </form>
        </div>
    </body>
</html>