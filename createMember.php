<?php 
session_start();
include_once 'classes\Member.php';

if (!empty($_POST)){
        $first_name= $_POST["first_name"];
        $last_name= $_POST["last_name"];
        $dob=$_POST["dob"];
        $first_line=$_POST["first_line"];
        $city=$_POST["city"];
        $county=$_POST["county"];
        $post_code=$_POST["post_code"];
        $phone=$_POST["phone"];
        $date_joined=$_POST["date_joined"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $user_type_id=$_POST["user_type_id"];
        $mem = new Member($first_name, $last_name, $dob, $first_line, $city, $county, $post_code, $phone, $date_joined, $username, $password, $user_type_id);
        $mem->insertNewUser();
    
    }
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>New Membership</title>
        <meta charset="UTF-8">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Bootstrap responsiveness -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="container py-3">
            <h4 class="my-3 text-center"> Create New Library Member</h4>

            <form class="p-3 m-2 bg-light" method="post">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="validationDefault1">First Name</label>
                        <input type="text" name="first_name" class="form-control form-control-sm" id="validationDefault1" placeholder="first name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputLastName">Last Name</label>
                        <input type="text" name="last_name" class="form-control form-control-sm" id="inputLastName" placeholder="last name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputDob">DOB</label>
                        <input type="date" name="dob" class="form-control form-control-sm" id="inputDob" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="first_line" class="form-control form-control-sm" id="inputFirstLine" placeholder="1234 Main St">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" name="city" class="form-control form-control-sm" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCounty">County</label>
                        <input type="text" name="county" class="form-control form-control-sm" id="inputCounty">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPostCode">Post Code</label>
                        <input type="text" name="post_code" class="form-control form-control-sm" id="inputpost_code">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputPhone">Phone</label>
                        <input type="tel" name="phone" class="form-control form-control-sm" id="inputphone" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputDateJoined">Date Joined</label>
                        <input type="date" name="date_joined" class="form-control form-control-sm" id="inputdate_joined" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="validationDefaultUsername">Username</label>
                        <input type="text" name="username" class="form-control form-control-sm" id="validationDefaultUsername" placeholder="username">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="inputPassword4" placeholder="pa55word">
                        <small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers or special characters.
</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="validationDefault1">User Type ID</label>
                        <input type="integer" name="user_type_id" class="form-control form-control-sm" id="validationDefault1" placeholder="member = 1, librarian = 2">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>



        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
        <?php
        // put your code here
        ?>
