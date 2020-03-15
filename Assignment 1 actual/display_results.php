<?php
    // get the data from the form
    $name        = filter_input(INPUT_POST, 'name');
    $age         = 0; //This should be replaced with a proper filter_input method call
    //Here is where you should create the add the interest_rate variable and get it via the filter_input method
    $password    = filter_input(INPUT_POST,'password');
    $email       = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $age         = filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT);
    $membership  = filter_input(INPUT_POST,'membership',FILTER_VALIDATE_INT);
    $locker      = filter_input(INPUT_POST,'locker', FILTER_VALIDATE_BOOLEAN);
    $fitness     = filter_input(INPUT_POST,'fitness',FILTER_VALIDATE_INT);

    // validate name
        if ($name === FALSE ) {
            $error_message = 'name must be a letter.';
    }
    // Here is where you should validate interest rate

        if ($password === FALSE){
            $error_message = 'Please enter a password';
        }
    // Here is where you should validate years (make it larger than 0 and less than 50 years)

        if ($email === FALSE){
            $error_message = 'Please enter an email';
        }

        if ($age=== FALSE) {
            $error_message = 'Please enter a number for age';
        } else if ($age <=0){
            $error_message = 'Age must be above zero';
        }

        if ($membership === FALSE){
            $error_message = 'Please select a membership length in years';
        }

        if ($locker === TRUE){
            echo 'You do not need a locker';
        } else if ($locker === FALSE){
            echo 'you need a locker';
        }

        if ($fitness === FALSE){
            echo 'Your fitness level is 50';
        }

    // set error message to empty string if no invalid entries
        else {
            $error_message = '';
        }

    // if an error message exists, go to the index page
        if ($error_message != '') {
            //This redirects us to the index.php page again and displays the error_message
            include('index.php');
            exit();
        }

    // Here is where you should set the correct currency and percent formatting
    $name_f = $name; //replace this empty string with the correct number_format call
    $password_f = $password; //replace this empty string with the correct number_format call
    $email_f = $email; //replace this empty string with the correct number_format call
    $age_f = $age;
    $membership_f = $membership;
    $locker_f = $locker;
    $fitness_f = $fitness;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Sign Up Form</h1>

        <label>Name:</label>
        <span><?php echo $name_f; ?></span><br>

        <label>Password:</label>
        <span><?php echo $password_f; ?></span><br>

        <label>Email:</label>
        <span><?php echo $email_f; ?></span><br>

        <label>Age:</label>
        <span><?php echo $age_f; ?></span><br>

        <label>Membership Length:</label>
        <span><?php echo $membership_f; ?></span><br>

        <label>Locker needed?</label>
        <span><?php echo $locker_f;?></span><br>

        <label>Fitness Level:</label>
        <span><?php echo $fitness_f;?> </span><br>


    </main>
</body>
</html>
