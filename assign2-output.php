<!--Fadeea Kannah-->

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

        <p>Thank you <?php echo $_POST['fname']?> <?php echo $_POST['lname']?> for sending a donation of $<?php echo number_format((float)$_POST['amount'], 2, '.', ''); ?>!
            <?php 
            //Free gifts will not show when checkbox is checked.
            //Free gift will appear when check box not checked.
                if(!isset($_POST['gift'])) {
                    switch ($_POST['amount']) {
                        case '20':
                             echo 'We will send your free pen.';
                            break;
                        case '40':
                             echo 'We will send your free mug.';
                            break;
                        case '60':
                             echo  'We will send your free t-shirt.';
                            break;
                        case '100':
                             echo  'We will send your free back pack.';
                            break;
                    }
                }
            ?> 
        </p>
    
        <p>Your tax deductible receipt is #<?php echo substr($_POST['lname'],-6,-5) ,strtoupper ("") ;?><?php echo mt_rand(1000, 9999);?> which will be sent to <?php echo $_POST['email'] ?>.</p> 
 
        
    </div>

</body>

</html>