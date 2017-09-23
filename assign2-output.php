<!--Fadeea Kannah-->


<?php
    
    //variables set to empty values
    
    $fname  = "";
    $lname = "";
    $email = "";
    $amount = "";
    $gift = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $gift = $_POST['gift'];

   }
          
  

/*POST method*/
    
     $fname = filter_input(INPUT_POST,'fname');
     $lname = filter_input(INPUT_POST,'lname');
     $email = filter_input(INPUT_POST,'email');

     //Radiobuttons 
     $amount = filter_input(INPUT_POST,'amount');
     if ($amount == NULL) {
         $amount = 'unknown';
     }
     //gift
     $gift = filter_input(INPUT_POST,'gift');  
 
    
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
            width: 760px;
            height: 200px;
            margin: 50px auto;
            padding: 25px 0px 180px 40px;
            border: 1px solid #a8a8a8;
            box-shadow: 0px 0px 20px #a8a8a8;
            background-color: aliceblue;
            background-image: url(http://sdhumane.org/wp-content/uploads/2015/07/cat_dog_final_FL6.gif);
            background-repeat: no-repeat;
            background-position: left 20% top 65%;
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

    </style>

</head>

<body> 

    
    <div id="outer">  

        <p>Thank you <?php echo $_POST['fname']?> <?php echo $_POST['lname']?> for sending a donation of 
        <?php echo ("$" . $_POST['amount']) ?>!</p>
    
        <p>Your tax deductible receipt is #<?php echo substr("$lname",-6,-5) ,strtoupper ("") ;?><?php echo mt_rand(1000, 9999);?> which will be sent to <?php echo $_POST['email'] ?></p> 
        
    </div>

</body>

</html>