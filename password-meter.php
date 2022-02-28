<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Password Strength Checker. How Secure Is My Password?">
<meta name="keywords" content="password strength checker, how secure is my password, password strength meter">
<title>Password Strength Checker</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Password Strength Meter</h2>

Simple Password Strength Checker<br>
How Secure Is My Password?<br>
How long it would take a computer to crack your password?<br><br>

        <script>
            function validatePassword(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                        strength = "It's easy to crack! Suggestion: use minimum 32 symbols pass with lowercase and uppercase letters, numbers and special characters";
                        color = "red";
                        break;
                    case 2:
                        strength = "Very Weak! It's easy to crack! Suggestion: use minimum 32 symbols pass with lowercase and uppercase letters, numbers and special characters";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium level. Enter more symbols! Suggestion: use minimum 32 symbols pass with lowercase and uppercase letters, numbers and special characters";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong :) Now it's safe!";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }
        </script>

Password: <input type="text" id="pwd" size="50" placeholder="Your Password here" onkeyup="validatePassword(this.value);"/> <span id="msg"></span>

<p>All your password must have got combination with: Numbers, Lowercase Uppercase Letters, ASCII symbols! This is good practice.</p>
<p>This website didn't collect your password! Be carefull when you test your password in such password strength checker websites!</p>

<?php
include 'footer.php';
?> 
