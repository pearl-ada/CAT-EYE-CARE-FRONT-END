<?php include "connect.php" ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>	h1{
      color: white;
      text-align: center;
      font-size: 28px;
	  padding-top: 10px;
	}	

	h2{
		color: white;
		text-align: center;
		font-size: 35px;
	}

	h3{
		font-size: 25px;
	}

	body {
		background: url(../assets/oneeye.jpg);
      font-family: Times New Roman;
    }

    .boxed{
    font-size: 18px;
    text-align: center;
  	width: 100%;
  	padding-top: 10px;
  	/* border: 5px solid gray; */
  	display: block;
  	margin-left: -10px;
  	margin-right: auto;
	color: #fff; 
    }

    .button{
  background-color: brown;
  border-radius: 20px;
  /* width: 10%; */
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 30px 5px;
  cursor: pointer;
}

.button:hover{
  background-color: silver;
  border: 2px solid black;
  color:black;
}

.button1{
  background-color: brown;
  border-radius: 20px;
  width: 10%;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 30px 5px;
  cursor: pointer;
}

.button1:hover{
  background-color: silver;
  border: 2px solid black;
  color:black;
}
	</style>
	<title>Lifestyle</title>
</head>
<body>

<form name = "confirm" method = "POST">
<h2>WHAT ARE LIFESTYLE CHOICES </h2>

<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	DO YOU SMOKE ?<br></br>
	<input type="radio" name="smoke" value="Yes" >
	<label for="smoke">Yes</label>
	<input type="radio" name="smoke" value="No" >
	<label for="smoke">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	DO YOU DRINK ALCOHOL IN EXCESS ?<br></br>
	<input type="radio" name="alcohol" value="Yes">
	<label for="alcohol">Yes</label>
	<input type="radio" name="alcohol" value="No" >
	<label for="alcohol">No</label><br></br>

	DO YOU TAKE STEROIDS ?<br></br>
	<input type="radio" name="steroids" value="Yes">
	<label for="steroids">Yes</label>
	<input type="radio" name="steroids" value="No" >
	<label for="steroids">No</label><br></br>	

	DO YOU HAVE HIGH BLOOD PRESSURE ?<br></br>
	<input type="radio" name="bp" value="Yes">
	<label for="bp">Yes</label>
	<input type="radio" name="bp" value="No" >
	<label for="bp">No</label><br></br>

	DO YOU AUTOIMMUE DISEASE ?<br></br>
	<input type="radio" name="autoimmue" value="Yes">
	<label for="autoimmue">Yes</label>
	<input type="radio" name="autoimmue" value="No" >
	<label for="autoimmue">No</label><br></br>


	<div>
	<a href="responsep.php">	<input class="button" type="submit" name="submit" value="Submit" /></a>
	</div>

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
</form>
 </body>
 <a href="../HTML/detect.html" class="button button1">Back</a>
 
</html>