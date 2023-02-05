<!DOCTYPE html>
<html>

<!--- 
    Yash Patel , Student number : 000842226, Date : Oct 20, 2021 --->
<?php

// Gets the post parameters from the result.php 
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$name = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$result = filter_input(INPUT_POST, "result", FILTER_VALIDATE_INT);
$date = date("Y-m-d");

// it will update the wins and losse
if ($result === 1)
{
    $wins = 0;
    $loss = 1;
}
else
{
    $wins = 1;
    $loss = 0;
}

// Connect to the database; 
include "connect.php";

// Select Query to insert the values to the database.
$command = "INSERT INTO Players (Email, Name, Wins , Losses, Date_Last_played) VALUES (?, ?, ?, ?, ?)";
$stmt = $dbh->prepare($command);
$param = [$email , $name , $wins, $loss, $date];
$stmt->execute($param);


// Select Query to get the data from database.

$cmd = "SELECT * FROM Players ORDER BY Wins";
$stmnt = $dbh->prepare($cmd);
$stmnt->execute();
$scores  = [];

// Using while loop and array push to display the score board.
while ($row = $stmnt->fetch())
{
    array_push($scores, ["email"=>$row["Email"], "name"=>$row["Name"], "wins"=>$row["Wins"], "loss"=>$row["Losses"], "date"=>$row["Date_Last_played"]]);
}
?>
<head>
    <title>Save </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/save.css">
</head>
<body>

<!-- Using table to display the data.-->
<div class="table">
<table>
    <tr>
        <!-- The table headers (Email, Name, Wins, Losses, Date Last played)-->
        <th class="tableheader"> Email</th>
        <th class="tableheader"> Name </th>
        <th class="tableheader"> Wins </th>
        <th class="tableheader"> Losses </th>
        <th class="dateheader"> Date Last played </th>

        
    </tr>
    <?php        
        // using foreach funtion to display data in each row in the table
        foreach ($scores as $score)
        {
            echo "<tr><td class = 'td'>$score[email]</td><td class = 'td'>$score[name]</td><td class = 'td'> $score[wins]</td> <td class = 'td'> $score[loss]</td> <td class = 'td' id = 'date'> $score[date]</td></tr>";
        }


    ?>
</table>
</div>

    <!-- The link for users if they want to play again! -->

<h1 class="link"> <a href="index.php"> Play again</a></h1>


</body>

</html>