<!--Fadeea Kannah-->

<?php

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
        //redirect to output page
        header("Location: assign2-output.php");
        exit();
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

    <h1>Humane Society Donations</h1>

    <h2>Help the Animals and Receive a Free Gift in Return</h2>

    <h3><mark>For this assignment, you will fill in all the fields correctly unless you want to validate the form for extra credit</mark></h3>
    
    <form method="post" action="assign2-output.php"> 
   
        <div id="outer">
        
            <p><span class="error">Required fields are marked *</span></p>
            <br>

            <label for="fname">First Name</label> <span class="error">* </span>
            <input type="text" name="fname" id="fname" placeholder="First Name"           value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>"/>
            <p><span class="error"><?php if(isset($errors['fname'])) echo $errors['fname'];?></span></p>

        
        
            <label for="lname">Last Name</label> <span class="error">* </span> 
            <input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php if(isset($_POST['lname'])) echo $_POST['lname'];?>"/>
            <p><span class="error"><?php if(isset($errors['lname'])) echo $errors['lname'];?></span></p>

        
        
            <label for="email">Email Address</label> <span class="error">* </span> 
            <input type="text" name="email" id="email" placeholder="Email Address" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"/>
            <p><span class="error"><?php if(isset($errors['email1'])) echo $errors['email1'];?></span></p>
            <p><span class="error"><?php if(isset($errors['email2'])) echo $errors['email2'];?></span></p>
      
        
        
            <p>Donation Amount <span class="error">* </span> </p>
            <p><span class="error"><?php if(isset($errors['amount'])) echo $errors['amount'];?></span></p>
            <input type="radio" name="amount" id="20" value="20">
            <label for="20" class="block">$20.00 - free pen</label>
            
        
        
              
            <input type="radio" name="amount" id="40" value="40">
            <label for="40" class="block">$40.00 - free mug</label>

            <input type="radio" name="amount" id="60" value="60">
            <label for="60" class="block">$60.00 - free t-shirt</label>

            <input type="radio" name="amount" id="100" value="100">
            <label for="100" class="block">$100.00 - free back pack</label>
           

        
            <input type="checkbox" name="gift" id="gift">
            <label for="gift" class="block">I do not wish to receive a free gift</label>
  

        
            <input type="submit" value="Send in My Donation">
            
            <input type="reset" value="Clear Form">
        
        </div>
                 


</form>
</body>
</head>
</html>
