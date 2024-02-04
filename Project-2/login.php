<?php

include("includes/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: rgb(81, 166, 81);
        }
        .cont{
            text-align: center;
            margin-top: 200px;
            border: 1px solid black;
            margin-left: 550px;
            margin-right: 550px;
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        .sub{
            background-color: rgb(92, 199, 92);
            border: none;
            height: 30px;
            width: 150px;
        }
        .email{
            border: none;
            background-color: rgb(193, 190, 190);
            text-align: center;
            height: 25px;
            width: 200px;
        }
        .pass{
            border: none;
            background-color: rgb(193, 190, 190);
            text-align: center;
            height: 25px;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="cont">
    <form action="callback/login_callback.php" method="post">
        <input type="email" name="email" id="email" placeholder="email" class="email" required><br><br>
        <input type="password" name="password" id="password" placeholder="password" class="pass" required><br><br><br>
        <input type="submit" value="LOGIN" name="submit" class="sub">
    </form>
    </div>
</body>
</html>