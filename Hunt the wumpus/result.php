<!DOCTYPE html>


<!--- 
    Yash Patel , Student number : 000842226, Date : Oct 20, 2021
    The result file use to get parameters from index.php and also finds if the user found the wumpus or not 
     --->
<html>
<head>
    <title>Result</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>

<?php

    // Connect to database.
    include "connect.php";

    // GET the rows and column from index.php file 
    $row = filter_input(INPUT_GET,"row", FILTER_VALIDATE_INT);
    $column = filter_input(INPUT_GET,"column", FILTER_VALIDATE_INT);
    
    //SQL Query to check if the user found a wumpus or not.
    $command = "SELECT * FROM Wumpuses WHERE Wumpuses_row = $row AND Wumpuses_column = $column ";
    $stmt = $dbh->prepare($command);
    $success = $stmt->execute();

    // Result if the user found the match or not.
     $result = 0;

    // if the Query finds the match the result will be updated and the image will be displayed 
    if($stmt->rowCount() > 0)
        {
            $result = 0;
            
            echo '<img src= "wum.jpg"><h1>Congratulation! </h1>';
        }
    else
        {
            $result = 1;
            echo '<img src= "nwum.jpg"><h1>Try Again! </h1>';
          
        }
?>

<!-- The form file that should be displayed in the leader board -->
<div class="form">
    <form method="POST"  action ="Save.php">

    <h2> Enter your Email: 
    <input type = "Email" name = "email" id = "text"> </h2>
    <h2> Enter your name!
    <input type="text" name = "username" id = "text">
    <?php echo ('<input type = "hidden" id="result" name="result" value ='.$result.'> ')?> </h2>
    <input type="submit" name = "submit" id = "button_submit">
    <br><br>

    </form>
</div>




</body>

</html>