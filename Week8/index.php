<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jason Lino - Profile</title>
    <script src="script.js" type="module" defer></script>
    <style>
        body {
            font-family: 'Trebuchet MS', sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(41, 41, 41);
        }

        header {
            background-color: rgb(15, 15, 15);
            color: #ffffff;
            text-align: center;
            display: grid;
            place-items: center;
            height: 100dvh; 

        }

        header h1 {
            font-size: 4.5rem;
            font-family:'Trebuchet MS', sans-serif;
        }

        section {
            max-width: 600px;
            margin: 2em auto;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 100%;
            height: auto;
            border-radius: 32px;
        }

        h1 {
            color: bisque;
        }
        
        h2 {
            padding: 10px;
            display: inline-block;
            color:black;
            background-color: bisque;
            border-radius: 16px;
            margin-top: 3rem;

        }
        
        h3{
            padding: 8px;
            display: inline-block;
            color:black;
            background-color: bisque;
            border-radius: 10px;
            margin-top: 1.5rem; 
        }

        p {
            font-size: 20px;
            margin: 0;
            line-height: 1.5;
            color:bisque;
            padding: 9px;

        }

        ul {
            font-size: 20px;
            margin: auto;
            line-height: 1.5;
            color:bisque;
            padding: 6px; 
            margin-bottom: 16px;

        }

        #section {
            font-size: 1.5rem;
            color: bisque;
        }

        #quote {
            font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
            font-size: 1.7rem;
            margin-top: 3rem;
        }

        #Infos {
            background: rgb(48, 48, 48);
        }

        #doggos {
            height: 100%;
            width: 90%;
            background-color: rgb(41, 41, 41);
            margin: 0 auto;
            padding: 2rem;
            align-items: center;
        }

        #image-track > .image {
            width: 30vmin;
            height: 46vmin;
            object-fit: cover;
            object-position: center;
        }

        #image-track {
            display: flex;
            gap: 5.5vmin;
            left: 50%; right: 50%;
            overflow-x: scroll;
        }

        #DogsIntro {
            display:block;
            text-align: center;
            color:bisque;
            font-weight: bold;
            font-size: 2rem;
        }

        .iconz {
            height: 2rem;
            width: auto;


        }

        .mailers {
            background-color: white;
            height: 2rem;
            width: auto;
        }
        .error {
          color: bisque;
        }


    </style>
    
</head>
<body>

    <header>
        <div class="container">
            <h1>Yes, I am Jason </h1>
            <p id="section">A BS-IT Student in Asia Pacific College</p>
        </div>
    </header>

    <section>
        <img src="./images/mew.gif" alt="Myew">
        <h2>About Me</h2>
        <div id="Infos"><p>I'm a second-year college student in Asia Pacific College.<br>
            I spend my time finding happiness in exploring novel ideas and perspectives,
            I consistently strive to approach each challenge with innovative insights.
            I have a passion for connecting with people, and I always try to give out
            an encouraging and collaborative spirit in every environment I encounter.
        </p></div>
        <h2>More about me!</h2>
        
        <div><ul>
            <li>I was born on April 10, 1999 which makes me <strong>24</strong> years old!
            <li>I like going on walks, working out, and absolutely love playing videogames!
            <li>I mostly play <strong><em>Dota 2</em></strong>, <strong><em>Valorant</em></strong>,
            but I enjoy all sorts of genres!! <br>
            <li>Oh, and I suuuper duuper love MEW!
            
        </ul></div>

        <p id="quote">“<em>You are what you believe yourself to be</em>.”  -Paulo Coelho

        </p>

        <h3>Contact me through:</h3>
        <div .>
        <a href="https://www.facebook.com/jasonlino4" target="_blank"
        ><img class = "iconz"
          src="images/facebook.png"
          alt="Facebook logo"
          height="28"
      /></a>
      <a href="mailto:jglino@student.apc.edu.ph"
      ><img class = "mailers"
        src="images/email.png"
        alt="Email logo"
        height="28"
    /></a>
    <a href="https://github.com/JasonLino" target="_blank"
    ><img class = "iconz"
      src="images/github.png"
      height="28"
  /></a>
      </div>
    </section>

    <p id="DogsIntro"> Here are some bonus pictures of my dogs <span class="dog1name"></span>, Riley, and our newest addition Kiri!</p>
            
        <div id="doggos">

        <div id="image-track">
            <img class="image" src="images\MicrosoftTeams-image (7).png" alt="Riley"/>
            <img class="image" src="images\MicrosoftTeams-image (8).png" alt="BarryRiley"/>
            <img class="image" src="images\MicrosoftTeams-image (9).png" alt="Barry"/>
            <img class="image" src="images\MicrosoftTeams-image (10).png" alt="Barry2"/>
            <img class="image" src="images\MicrosoftTeams-image (13).png" alt="BarryRiley2"/>
            <img class="image" src="images\MicrosoftTeams-image (14).png" alt="Kiri"/>
            </div>
        </div>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <p>Name: <input type="text" name="name" value="<?php echo $name;?>"> <span class="error">* <?php echo $nameErr;?></span></p>
  <br><br>
  <p>E-mail: <input type="text" name="email" value="<?php echo $email;?>"> <span class="error">* <?php echo $emailErr;?></span></p>
  <br><br>
  <p>Website: <input type="text" name="website" value="<?php echo $website;?>"> <span class="error"><?php echo $websiteErr;?></span></p>
  <br><br>
  <p>Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></p>
  <br><br>
  <p>Gender: <span class="error">* <?php echo $genderErr;?></span></p>
  <p><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female</p>
  <p><input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male</p>
  <p><input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other</p>
  
  <br><br>
  <h2><input type="submit" name="submit" value="Submit"></h2>
</form>

<?php
echo "<div style='font-size: 20px;'>";
echo "<p>Your Input:</p>";
echo "<p style='font-size: 1.2em;'>Name: $name</p>";
echo "<br>";
echo "<p style='font-size: 1.2em;'>Email: $email</p>";
echo "<br>";
echo "<p style='font-size: 1.2em;'>Website: $website</p>";
echo "<br>";
echo "<p style='font-size: 1.2em;'>Comment: $comment</p>";
echo "<br>";
echo "<p style='font-size: 1.2em;'>Gender: $gender</p>";
echo "</div>";
?>

</body>
</html>