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
	<input type="radio" name="abdominal" value="Yes" >
	<label for="abdominal">Yes</label>
	<input type="radio" name="abdominal" value="No" >
	<label for="abdominal">No</label><br></br>
                                                                                                                                                                                                                                                                                                                                               
	RUBBNG MY EYES?<br></br>
	<input type="radio" name="toilet" value="Yes">
	<label for="toilet">Yes</label>
	<input type="radio" name="toilet" value="No" >
	<label for="toilet">No</label><br></br>

	SWIMMING OR HOT TUBS?<br></br>
	<input type="radio" name="faeces" value="Yes">
	<label for="faeces">Yes</label>
	<input type="radio" name="faeces" value="No" >
	<label for="faeces">No</label><br></br>	

	GARDENING WITHOUT PROTECTION?<br></br>
	<input type="radio" name="nauseous" value="Yes">
	<label for="nauseous">Yes</label>
	<input type="radio" name="nauseous" value="No" >
	<label for="nauseous">No</label><br></br>

	NOT WEARING SHADES?<br></br>
	<input type="radio" name="vomitting" value="Yes">
	<label for="vomitting">Yes</label>
	<input type="radio" name="vomitting" value="No" >
	<label for="vomitting">No</label><br></br>


	<div>
		<input class="button" type="submit" name="submit" value="Submit" />
	</div>

	<?php  
	session_start();
	if (isset($_POST["submit"]))
	{	
	$answer1 = $_POST['abdominal'];
	$answer2 = $_POST['toilet'];
	$answer3 = $_POST['faeces'];
	$answer4 = $_POST['nauseous'];		
	$answer5 = $_POST['vomitting'];
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
 	echo "<P style='color: red; font-size: 30px;'>You may be having peptic ulcer.</p>";
?>
 	<a href="diarrhoeadiag.php?category=diarrhoea" class=""></a>

<?php
//Analysis
 	$data_id = "";
 	$illness = "Diarrhoea";
 	$user_id = $_SESSION["user_id"];
 

	$sql = "INSERT INTO data(illness,user_id) 
		    VALUES('$illness', '$user_id')";

		    $con->query($sql);

 }
 else 
 {
 	echo "You may not be having Ulcer, You might be having heartburn.";

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