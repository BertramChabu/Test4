<h1>Numeric Arrays</h1>

<?php
//Index Array or Numeric Array
$color = array("Black", "Green", "White", "Red", "Black", 45, 78, 78.59);

$item = [45, 78, 45, 'Book', 'Pen', 'Ruler'];
?>

<pre>
    <?php 
    print_r ($color); 
    print_r ($item);
    ?>
</pre><br>

<?php print $color[1]; ?><br>
<?php print $item[4]; ?><br>

<pre>
    <?php 
    var_dump($color);
    var_dump($item);
    ?>
</pre>



<h1>Associative Arrays</h1>

<?php
    $user_emails = array(
        "Alex" => "aokama@yahoo.com",
        "Peter" => "pokama@yahoo.com",
        "Amani" => "aokama@yahoo.com"
    );
?>

<pre>
    <?php print_r($user_emails); ?>
</pre>

<?php print $user_emails["Peter"]; ?><br>



<h1>Multi-dimensional Array</h1>

<?php
$user_details = [
    "Director" => [
        "Fullname" => "Alex Okama",
        "Email" => "aokama@yahoo.com",
        "Address" => "Mada",
        "Phone" => [
            "Mobile" => "+254791301389",
            "Cell" => "+254791301389",
            "Work" => "+254791301389"
        ],
    ],

    "Secretary" => [
        "Fullname" => "Juliette Okama",
        "Email" => "jokama@yahoo.com",
        "Address" => "Mada",
        "Phone" => [
            "Mobile" => "+25478428389",
            "Cell" => "+25479020989",
            "Work" => "+25477291389"
        ],
    ],

    "Manager" => [
        "Fullname" => "Peter Okama",
        "Email" => "pokama@yahoo.com",
        "Address" => "Mada",
        "Phone" => [
            "Mobile" => "+254792747389",
            "Cell" => "+254792849389",
            "Work" => "+254793421389"
        ],
    ],
]
?>

<pre>
<?php print_r ($user_details); ?>
</pre>

<?php $user_details["Secretary"]["Phone"]["Cell"]; ?>

<?php
$call["fname"] = "Alex";
$call["lname"] = "Okama";
$call["Email"] = "aokama@yahoo.com";
?>

<pre>
    <?php print_r($call); ?>
</pre>