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
	<title>Time Frame</title>
</head>
<body>

<form name = "confirm" method = "POST">
<h2>HOW LONG AGO WAS YOUR SURGERY</h2>

<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	24 HOURS AGO?<br></br>
	<input type="radio" name="24" value="Yes" >
	<label for="24">Yes</label>
	<input type="radio" name="24" value="No" >
	<label for="24">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	2-4 DAYS AGO ?<br></br>
	<input type="radio" name="2-4" value="Yes">
	<label for="2-4">Yes</label>
	<input type="radio" name="2-4" value="No" >
	<label for="2-4">No</label><br></br>

	1 WEEK AGO ?<br></br>
	<input type="radio" name="1" value="Yes">
	<label for="1">Yes</label>
	<input type="radio" name="1" value="No" >
	<label for="1">No</label><br></br>	

	A WEEK AND SOME DAYS?<br></br>
	<input type="radio" name="somedays" value="Yes">
	<label for="somedays">Yes</label>
	<input type="radio" name="somedays" value="No" >
	<label for="somedays">No</label><br></br>

	2 - 4 WEEKS ?<br></br>
	<input type="radio" name="weeks" value="Yes">
	<label for="weeks">Yes</label>
	<input type="radio" name="weeks" value="No" >
	<label for="weeks">No</label><br></br>


	<div>
		<input class="button" type="submit" name="submit" value="Submit" />
	</div>

	<?php  
	session_start();
	if (isset($_POST["submit"]))
	{	
	$answer1 = $_POST['24'];
	$answer2 = $_POST['2-4'];
	$answer3 = $_POST['1'];
	$answer4 = $_POST['somedays'];		
	$answer5 = $_POST['weeks'];
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
 	echo "<P>Okay.</p>";
?>
 	

<?php
//Analysis
 	$data_id = "";
 	$illness = "timeframe";
 	$user_id = $_SESSION["user_id"];
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		  //  $con->query($sql);

 }
 else 
 {
 	echo "Okay.";


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
 <a href="../HTML/detect.html" class="button button1">Back</a>
 
</html>