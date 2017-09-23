    <h1>Humane Society Donations</h1>

    <h2>Help the Animals and Receive a Free Gift in Return</h2>

    <h3><mark>For this assignment, you will fill in all the fields correctly unless you want to validate the form for extra credit</mark></h3>
    
    <form method="post"> 
   
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
  

        
            <input type="submit" name="submit" value="Send in My Donation">
            
            <input type="submit" name="reset" value="Clear Form">
        
        </div>
                 


</form>
