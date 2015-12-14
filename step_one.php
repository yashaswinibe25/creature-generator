<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Creature Generator</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/uniform.default.css">
	<style>
	.error
		{
		 color:red;	
		}
	
	</style>
</head>
<body>
			
	
	
	<div id="holder">

<h1>Seneca College</h1>
<h2>Webmaster Program</h2>
<h3>Creature Generator</h3>

<p>Step right up, step right up! Learn your creature-name in 3 short steps!</p>

<h4>Step One: Information Gathering</h4>

<form method="post" action="step_two.php">
	<span class="error">* Required</span>
<p>
	<label for="name">Name:</label>
	<input type="text" name="name" id="name"><span id="error1"> * <?php echo $name_err;?></span>
</p>

<fieldset id="radio">
	<legend>Choose your creature type:<span id="error2"> * <?php echo $radio_err;?></span></legend><br>
	<p>
		<input type="radio" name="creature_type" value="alien" id="alien">
		<label for="alien">Alien</label>
	</p>
	<p>
		<input type="radio" name="creature_type" value="robot" id="robot">
		<label for="robot">Robot</label>
	</p>
</fieldset>

<p>
	<input type="submit" name="submit" value="Go to step 2 (if you dare)">
</p>

</form>

</div>

	
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script>
	
</body>
</html>
