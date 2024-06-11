<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include_once ("templates/nav.php");?>
   <div class="banner">
    <h1>Forms</h1>
</div>

<div class="row">
    <div class="content">
    <form action="" autocomplete="off">
        <label>Fullname:</label>
        <input type="text" name="fullname" placeholder="Fullname" id="fullname"><br><br>
        <label>Password:</label>
        <input type="password" name="userpass"><br><br>
        <label>Age:</label>
        <input type="number" name="age"><br><br>
        <label>Email:</label>
        <input type="email" name="email_address"><br><br>

        <label for="Basic">Basic</label>
        <input type="radio" name="rate" value="1" id="Basic">
        <label for="Intermediate">Intermediate</label>
        <input type="radio" name="rate" value="2" id="Intermediate">
        <label for="Advanced">Advanced</label>
        <input type="radio" name="rate" value="3" id="Advanced"><br><br>

        <input type="checkbox" id="Swahili" name="" value=""><label for="Swahili">Swahili</label><br><br>
        <input type="checkbox" id="English" name="" value=""><label for="English">English</label><br><br>
        <input type="checkbox" id="" name="" value=""><label for="Japanese">Japanese</label><br><br>
        <input type="checkbox" id="" name="" value=""><label for="Spanish">Spanish</label><br><br>

        <label for="Color">Colour</label>
        <input type="color" id="color" name="color"><br><br>
        <label for="range">Range</label>
        <input type="range" id="range" name="range"><br><br>

        <select name="" id="">
            <option value="">--Select Gender--</option>
            <option value="">--Female--</option>
            <option value="">--Male--</option>
            <option value="">--Rather not say--</option>
            <option value="">--Custom--</option>
        </select>
        <br><br>

        <input type="submit" value="Register">
    </form>
    </div>

    <div class="sidebar">
        <h4>Side Bar</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    </div>

    <div class="main_box">
        Content
      </div>
    
      <div class="footer">
        Copyright &copy; BBIT 2.1 - All rights reserved.
</body>
</html>