<?php

include("includes/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body{
            background-color: cornflowerblue;
        }
        .cont{
            margin-top: 150px;
            text-align: center;
            font-size: larger;
            border: solid black;
            border-radius: 10px;
            margin-left: 500px;
            margin-right: 500px;
            background-color: rgb(82, 104, 176);
            padding-top: 30px;
        }
        .form{
            padding-top: 20px;
            padding-bottom: 30px;
        }
        .sub{
            border: solid black 2px;
            border-radius: 5px;
            height: 20px;
        }
        #name{
            border: solid black 2px;
        }
        #date{
            border: solid black 2px;
        }
        #email{
            border: solid black 2px;
        }
        #password{
            border: solid black 2px;
        }
    </style>
</head>
<body>
    <div align="center" class="cont">
    <h1>Login Here!</h1>
    <div class="form">
    <form action="callback/form_callback.php" method="post">
        <label for="name"><b>Enter your name:</b></label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="date"><b>Enter your DOB:</b></label>
        <input type="date" name="date" id="date" required><br><br>
        <label for="email"><b>Enter your Email:</b></label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="password"><b>Create Password:</b></label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="LOGIN" class="sub" name="submit">
    </form>
</div>
</div>
</body>
</html>

