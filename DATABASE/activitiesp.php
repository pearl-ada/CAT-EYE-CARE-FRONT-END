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
	<title>Activities Carried Out</title>
</head>
<body>

<form name = "confirm" method = "POST">
<h2>WHAT KIND OF ACTIVITIES HAVE YOU BEEN CARRYING OUT?</h2>

<div class="boxed">
<h3>Answer the following questions by clicking either Yes or No.</h3>

	HEAVY LIFTING?<br></br>
	<input type="radio" name="heavyl" value="Yes" >
	<label for="heavyl">Yes</label>
	<input type="radio" name="heavyl" value="No" >
	<label for="heavyl">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	RUBBNG MY EYES?<br></br>
	<input type="radio" name="rubbing" value="Yes">
	<label for="rubbing">Yes</label>
	<input type="radio" name="toilet" value="No" >
	<label for="rubbing">No</label><br></br>

	SWIMMING OR HOT TUBS?<br></br>
	<input type="radio" name="hottub" value="Yes">
	<label for="hottub">Yes</label>
	<input type="radio" name="hottub" value="No" >
	<label for="hottub">No</label><br></br>	

	GARDENING WITHOUT PROTECTION?<br></br>
	<input type="radio" name="gardening" value="Yes">
	<label for="gardening">Yes</label>
	<input type="radio" name="gardening" value="No" >
	<label for="gardening">No</label><br></br>

	NOT WEARING SHADES?<br></br>
	<input type="radio" name="shades" value="Yes">
	<label for="shades">Yes</label>
	<input type="radio" name="shades" value="No" >
	<label for="shades">No</label><br></br>


	<div>
		<input class="button" type="submit" name="submit" value="Submit" />
	</div>

	<?php  
	session_start();
	if (isset($_POST["submit"]))
	{	
	$answer1 = $_POST['heavyl'];
	$answer2 = $_POST['rubbing'];
	$answer3 = $_POST['hottub'];
	$answer4 = $_POST['gardening'];		
	$answer5 = $_POST['shades'];
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

		   // $con->query($sql);
 }
}
?>
 </div>	
</form>
 </body>
 <a href="../HTML/predict.html" class="button button1">Back</a>
 
</html>