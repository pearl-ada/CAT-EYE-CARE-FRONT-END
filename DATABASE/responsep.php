<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/responsep.css">
    <title>PREDICT OUTCOME</title>
</head>
<body>
    <div class="headers">
        <h1>CAT-EYE CARE</h1>
        <h3>PREDICT OUTCOME</h3>
    </div>
    <div class="form">
        response
    
<?php  
	session_start();
	if (isset($_POST["submit"]))
	{	
	$answer1 = $_POST['smoke'];
	$answer2 = $_POST['alcohol'];
	$answer3 = $_POST['steroids'];
	$answer4 = $_POST['bp'];		
	$answer5 = $_POST['autoimmue'];
	$totalCorrect = 0;

if ($answer1 == "Yes") 
	{ $totalCorrect++; }

if ($answer2 == "Yes") 
	{ $totalCorrect++; }

if ($answer3 == "Yes") 
	{ $totalCorrect++; }

if ($answer4 == "Yes") 
	{ $totalCorrect++; }

if ($answer5 == "Yes") 
	{ $totalCorrect++; }

 if ($totalCorrect >= 3)
 {
 	echo "<P style='color: red; font-size: 30px;'> The chances of success after the surgery below 99%.</p>";
?>
 	

<?php
//Analysis
 	$data_id = "";
 	$illness = "lifestle";
 	$user_id = $_SESSION["user_id"];
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		    $con->query($sql);

 }
 else 
 {
 	echo "The chances of sucess after the surgery is above 99%.";

 	$data_id = "";
 	$illness = "Healthy";
 	$user_id = $_SESSION["user_id"];

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		    $con->query($sql);
 }
}
?>
 </div>	
 <div class="back">
      <a href="dashboard.html">  <input type="submit" value="OKAY" id="back"></a>
    </div>


 </body>
 
 
</html>