    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
        if ($_POST['pass'] == '{Perry_very_berry}') {
        echo 'http://cybersoc.cf';
        } else if($pass == 'perry'){
         echo 'perry is right';   
        }
        else {
        echo 'Hmm we couldn't find what you were looking for, try again?';
        }
    ?>
