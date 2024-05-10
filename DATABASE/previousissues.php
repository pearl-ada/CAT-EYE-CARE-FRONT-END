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
	<title>Previous Issues</title>
</head>
<body>

<form name = "confirm" method = "POST">
<h2>WHAT PREVIOUS ISSUES HAVE YOU HAD ?</h2>

<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	DO YOU HAVE GLAUCOMA ?<br></br>
	<input type="radio" name="glaucoma" value="Yes" >
	<label for="glaucoma">Yes</label>
	<input type="radio" name="glaucoma" value="No" >
	<label for="glaucoma">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	DO YOU HAVE MACULAR DEGENERATION ?<br></br>
	<input type="radio" name="md" value="Yes">
	<label for="md">Yes</label>
	<input type="radio" name="md" value="No" >
	<label for="md">No</label><br></br>

	DO YOU HAVE EYE INJURIES ?<br></br>
	<input type="radio" name="injuries" value="Yes">
	<label for="injuries">Yes</label>
	<input type="radio" name="injuries" value="No" >
	<label for="injuries">No</label><br></br>	

	HAVE YOU HAD EYE SUGRIES BEFORE ?<br></br>
	<input type="radio" name="surgies" value="Yes">
	<label for="surgies">Yes</label>
	<input type="radio" name="surgies" value="No" >
	<label for="surgies">No</label><br></br>

	DO YOU HAVE CHRONIC EYE INFLAMMATION ?<br></br>
	<input type="radio" name="inflammation" value="Yes">
	<label for="inflammation">Yes</label>
	<input type="radio" name="inflammation" value="No" >
	<label for="inflammation">No</label><br></br>


	<div>
		<input class="button" type="submit" name="submit" value="Submit" />
	</div>

	<?php  
	session_start();
	if (isset($_POST["submit"]))
	{	
	$answer1 = $_POST['glaucoma'];
	$answer2 = $_POST['md'];
	$answer3 = $_POST['injuries'];
	$answer4 = $_POST['surgies'];		
	$answer5 = $_POST['inflammation'];
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
 	echo "<P style='color: red; font-size: 30px;'>The chances of success after the surgery below 99%.</p>";
?>
 	

<?php
//Analysis
 	$data_id = "";
 	$illness = "activities";
 	$user_id = $_SESSION["user_id"];
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		  //  $con->query($sql);

 }
 else 
 {
 	echo "The chances of sucess after the surgery is above 99%.";

 	$data_id = "";
 	$illness = "Healthy";
 	$user_id = $_SESSION["user_id"];

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		  //  $con->query($sql);
 }
}
?>
 </div>	
</form>
 </body>
 <a href="../HTML/predict.html" class="button button1">Back</a>
 
</html>