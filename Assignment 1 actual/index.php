<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <main>
        <div>
            <?php
            //set default value of variables for initial page load
            if (!isset($_POST['signup'])) {
                $name        = $_POST['name'];
                $password    = $_POST['password'];
                $email       = $_POST['email'];
                $age         = $_POST['age'];
                $membership  = $_POST['membership'];
                $locker      = $_POST['locker'];
                $fitness     = $_POST['fitness'];

                echo $name + "" + $email + "" + $age;
                    }

            // this is where you should check to see if the interest_rate and $years are set
            ?>
        </div>
    <?php
    //This code checks to see if we got an error message from the display_result.php page
     if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
           <form action="display_results.php" method="post">

               <div class = "container">
                   <div class ="col-sm-3">
                       <div id="data">

                           <h1>Sign up form</h1>

                           <hr class = "mb-3">
                           <label>name:</label>
                           <input class = "form-control" type="text" name="name"

                           <label>Password:</label>
                           <input class = "form-control" type="password" name="password"

                           <label>Email:</label>
                           <input class = "form-control" type="email" name="email"

                           <label>Age:</label>
                           <input class = "form-control" type="text" name="age"

                           <label>Membership Length:</label>
                           <select id="membership" name="membership">
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                           </select>

                           <label>Do you need a locker?</label>
                           <input type="checkbox" name="locker" value="Yes?">

                           <label>Fitness Level:</label>
                           <input type="range" min="1" max="100" value="50" name = 'fitness'>

                           <hr class = "mb-3">

                           <div id="buttons">
                               <input class = "btn btn-primary" type ="submit" name = "signup" value="Sign Up">
                           </div>
                       </div>
                   </div>
               </div>
           </form>
       </main>
   </body>
</html>