<?php

require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $pageTitle ?> </title>
    <link rel="stylesheet" href="./public/style.css">
</head>

<body>
    <div class="grid-container">
        <div class="item1"></div>
        <div class="item2">
            <div class="flex">
                <div class="col-7 fundo-01">
                    <h1 class="title-01">Welcome back!</h1>
                    <p class="p-01">You can sign in to access with your existing account.</p>
                </div>

                <div class="col-5 fundo-02">
                    <form action="autenticar.php" method="post" class="form" name="myform" onsubmit="return validateform()">
                        <h1 class="title-02">Sign In</h1>
                        <div class="form-group flex flex-col">
                            <label for="username"></label>
                            <input type="text" name="username" id="username" placeholder="Username or email" >
                        </div>
                        <div>
                            <label for="password"></label>
                            <input type="password" name="password" id="password" placeholder="Password" >
                        </div>
                        <br>
                        <div>
                            <button>Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item3"></div>
    </div>


    <script src="script.js"></script>
</body>
</html>