<h1>Loops</h1>

<h4>While loop</h4>
<?php 
$max = 0;

while($max < 10){
    print $max . "<br>";
    $max++;
}
?>


<h4>Do while loop</h4> 

<?php
$x = 14;
do{
    print $x . "<br>";
    $x++;
}while($x < 7);
?>



<h4>For loop</h4>

<?php
for($r =3; $r<12; $r++){
    print $r . "<br>";
}
?><br>

<?php
//Even numbers between 14 and 24
for($n=14; $n<24; $n+=2){
    print $n . "<br>";
}
?>


<h4>For each loop</h4>

<select name="" id="">
<?php
//foreach

$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

foreach($months AS $month){
    ?>
    <option value=""><?php print $month; ?></option>
    <?php
}
?>
</select><br>

<select name="" id="">
    <?php
    //while loop
    $y = 2014;

    while($y < 2030){
        $y++;
        ?>
    <option value=""><?php print $y; ?></option>
    <?php
    }
    ?>
</select>