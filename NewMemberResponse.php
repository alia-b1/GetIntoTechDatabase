<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="database.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Member Created</title>
    </head>
    <body>
        <h1 class="title">New member created!</h1>
        <br>
        <div class="container-fluid" align="center">
        <input type="button" class="btn btn-info" value="Create another member" onclick="location.href = 'createMember.php';">
        <input type="button" class="btn btn-info" value="Search for a book" onclick="location.href = 'index.php';">
        <input type="button" class="btn btn-info" value="Logout" onclick="location.href = 'Loginpage.1.php';">
       </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
