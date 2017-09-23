<!--Fadeea Kannah-->

<?php

    $success = false;
    //variables set to empty values
    $fname  = "";
    $lname = "";
    $email = "";
    $amount = "";
    $gift = "";



    if($_POST) 
    {

        // not empty and correct email format
        $errors = array();  


        //start validation
        if(empty($_POST['fname']))
        {
            $errors['fname'] = "Your first name cannot be empty";
        }



        if(empty($_POST['lname']))
        {
            $errors['lname'] = "Your last name cannot be empty";
        }    




        if(empty($_POST['email'])) 
        {
            $errors['email1'] = "Email cannot be empty";
        }    
        else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['email'])) 
        {  
            $errors['email2'] = "Invalid email format";
        }



        if(empty($_POST['amount'])) {
            $errors['amount'] = "Please select a donation amount";
        }      



        //check errors
        if(count($errors) == 0) 
        {
            $success= true;
        }
        
        if (isset($_POST['reset'])) {
            $_POST = Array();
            $errors = Array();
        }
   }


?>



<!DOCTYPE html>

<html>

<head>
    
    <meta charset="utf-8">
    <title>Assignment 2</title>
    <style>
        body {
            font-family: arial;
            font-size: 100%;
        }
        
        #outer {
            width: 960px;
            margin: 50px auto;
            padding: 10px;
            border: 1px solid #a8a8a8;
            box-shadow: 0px 0px 20px #a8a8a8;
            background-color: aliceblue;
            background-image: url(http://sdhumane.org/wp-content/uploads/2015/07/cat_dog_final_FL6.gif);
            background-repeat: no-repeat;
            background-position: right 30%;
        }
        
        h1,
        h2 {
            font-size: 1.5em;
            color: navy;
        }
        
        h1,
        h2,
        h3 {
            text-align: center;
        }
        
        input:not([type=radio]) {
            display: block;
        }
        
        .block:after {
            content: " ";
            display: block;
        }
        
        input[type=checkbox] {
            display: inline;
        }
        
        input {
            margin-bottom: 25px;
        }
        
        input[type=submit] {
            margin-top: 25px;
        }
        
        p {
            margin-bottom: 15px;
        }
        
        .error {
            color: #FF0000;
        }


    </style>

<body>

    <?php 
        if ($success) {
            include("./assign2-output.php");
        } else {
            include("./assign2-form.php");
        }
    ?>
</body>
</head>
</html>
