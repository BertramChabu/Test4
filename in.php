<?php
    date_default_timezone_set("Africa/Nairobi");

    echo 'This is my first php code'; //Displaying a string

    print '<br>'; //Using HTML break line tag

    print "Today is <span style='colour: #FF5733'> Tuesday </span>"; //Using CSS in a sentence

    print '<br>';

    print 92472; //This is an integer

    print '<br>';

    print "927239"; //This is a string

    print '<br>';

    print 4 + 8;// This is an operation using integers

    print '<br>';

    print "8 + 6"; // This is a string

    print '<br>';

    print date('l');

    print '<br>';

    print date('Y');

    print '<br>';

    print date('l', strtotime('+5 days'));

    print '<br>';

    print date('l, jS-F-Y', strtotime('+5 days'));

    print '<br>';

    print "Today is " . date('l, jS-F-Y H:i:s');

    print '<br>';

    print date('H:i:s');

    print '<br>';

    //Create (Declare) a PHP variable
    $fname = "Alex Okama"; //Declaration of a string (or a group of words)
    print $fname;

    print '<br>';

    $yob = 1997;//Declaration of an integer (or digit)
    print $fname . " was actually born on" . $yob;

    print '<br>';

    $current_year = date('Y'); //Declaring the current year
    print $current_year;

    print '<br>';

    //Use the subtraction operator to find the user's age
    $age = $current_year - $yob;
    print $fname . "is " . $age . "years old"; 

    print '<br>';

    $user_dob = "$yob-05-24";
    print date('l, jS-F-Y', strtotime($user_dob));

    $birthday = new DateTime($user_dob);
    $today = new DateTime('today');

    $interval = $birthday->diff($today);

    print '<br>';

    print '<pre>';
    print_r($interval);
    print '</pre>';

    print $fname . "is " . $interval->y . " years " . $interval->m . " months " . $interval->d . " days old.";

    print '<br>';

    $adult_age = 18;

    if($interval->y >= $adult_age){
        print $fname . " is an adult"; //{} event in block will be executed if the condition is true
    }else{
        print $fname . " is not an adult"; //{} event in block will be executed if the condition is not true
    }

    print '<br>';

    //Variable xtics
    $lname = "Okama";
    echo "My last name is $lname";

    print '<br>';

    echo 'My last name is ' . $lname;

    print '<br>';

    $call["lname"] = "Okama";
    print $call["lname"];

    print '<br>';

    define('LNAME', 'Okama');
    print LNAME;
?>