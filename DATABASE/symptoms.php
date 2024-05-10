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
	<title>Symptoms</title>
</head>
<body>

<form name = "confirm" method = "POST">
<h2>HOW ARE YOU FEELING ?</h2>

<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	MILD DISCOMFORT ?<br></br>
	<input type="radio" name="discomfort" value="Yes" >
	<label for="discomfort">Yes</label>
	<input type="radio" name="discomfort" value="No" >
	<label for="discomfort">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	SEVERE DISCOMFORT ?<br></br>
	<input type="radio" name="severe" value="Yes">
	<label for="severe">Yes</label>
	<input type="radio" name="severe" value="No" >
	<label for="severe">No</label><br></br>

	BLURRY VISION ?<br></br>
	<input type="radio" name="vision" value="Yes">
	<label for="vision">Yes</label>
	<input type="radio" name="vision" value="No" >
	<label for="vision">No</label><br></br>	

	CHANGES IN COLOUR ?<br></br>
	<input type="radio" name="colour" value="Yes">
	<label for="colour">Yes</label>
	<input type="radio" name="colour" value="No" >
	<label for="colour">No</label><br></br>

	HALOS AROUND LIGHTS ?<br></br>
	<input type="radio" name="light" value="Yes">
	<label for="light">Yes</label>
	<input type="radio" name="light" value="No" >
	<label for="light">No</label><br></br>


	<div>
		<input class="button" type="submit" name="submit" value="Submit" />
	</div>

	<?php  
	session_start();
	if (isset($_POST["submit"]))
	{	
	$answer1 = $_POST['discomfort'];
	$answer2 = $_POST['severe'];
	$answer3 = $_POST['vision'];
	$answer4 = $_POST['colour'];		
	$answer5 = $_POST['light'];
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
 	echo "<P style='color: red; font-size: 30px;'>You may have some complications, Please see your doctor.</p>";
     
?>
 	

<?php
//Analysis
 	$data_id = "";
 	$illness = "symptoms";
 	$user_id = $_SESSION["user_id"];
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		   // $con->query($sql);

 }
 else 
 {
 	echo "You do not have complications.";

 	$data_id = "";
 	$illness = "Healthy";
 	$user_id = $_SESSION["user_id"];

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		   // $con->query($sql);
 }
}
?>
 </div>	
</form>
 </body>
 <a href="../HTML/detect.html" class="button button1">Back</a>
 
</html>