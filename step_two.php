<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Creature Generator</title>
<link rel="stylesheet" href="css/style.css">
		<style>
		
		</style>
	
	</head>
	<body>
		
		<div id="holder">
				<!-- start php code-->
				<?php 

					$name_err=$radio_err="";


					if(isset($_POST["name"]))
					{

			         $name=ucwords(strtolower(htmlspecialchars(strip_tags($_POST["name"]))));

					}
        
					if(isset($_POST["creature_type"]))

					{
					  $creature_type= htmlspecialchars(strip_tags($_POST["creature_type"]));
					}
					else 
					{

					?> <!-- end php code-->
								<!--  Javascript code -->
											<script>
											window.location.href="step_one.php";
												alert("missing one or more field");
											</script>
								<!-- Javascript ended -->
			<!-- start php code-->
					<?php
					}

					$today = date("D M dS Y"); 
				echo "<p>Thanks $name </p><br>Today is $today and seems like you are tired an wanted to try something new!!.<br>Take a deep breath grab a cup of coffee and relax meanwhile we will make a creature for you.Click the button when you are ready to see it??</p>";

					?><!-- end php code-->
		
	    <input type='button' value='click here' id="link"><br><br>
		<div id="hidden">
			<!-- start php code-->
			<?php
$description= array("These sneaky little devils seem intent on becoming the archetypal visiting alien.  Roswell saw their emergence into the limelight during an ill-fated expedition to spy on American atomic secrets, or radar or God-knows what.  Whatever the reason, there they were, altering world history forever.  Swiftly came the National Security state, MJ12 and the development of an exceedingly successful anti-flying saucer campaign by the intelligence services.  These critters abduct humans, mutilate cattle and invade our skies with impunity. It's no wonder the secret's kept under wraps.","These mad beasts terrorise Puerto Rico and surrounding islands.  The “goat-suckers” have even been sighted in Mexico and Florida.  Whether they're aliens, biological experiments given free reign or a hitherto undiscovered natural predator remains to be seen.  But a flying mini T-Rex with mad eyes should keep zoologists guessing for a while yet.","These are saurian 'grey' type entities which are apparently somewhat taller than the usually-encountered greys yet with extremely thin 'rail-like' torso and limbs yet very strong.

","Cybernetic forms controlled by 'human' entities. OR humans who have been implanted or surgically altered to such an extent that they have become cybernetic in nature, yet still retaining a soul-matrix.");
$images_alien= array("images/alien2.jpg","images/alien.png","images/alien3.jpg","images/alien4.jpg");

  $description1= array("Most of the time an indoor robot will move on even floors. The differentialdrive is an easy to handle concept for such a situation.","Robots should stand up for themselves and not try to be humans. They should either utterly destroy us or protect us from aliens. And vampires. And pirates.","The danger of the past was that men became slaves. The danger of the future is that man may become robots.
","What will we be doing, when everything that can be done, can be done better by robots?");  
$images_robots=array("images/robot.png","images/robot1.jpg","images/robot2.jpeg","images/robto3.jpeg");
                 
                if ($creature_type == 'alien') 
				{ 
                    echo 'Name: '.ucwords(strtolower($name)).'zila!<br><br>';
                    echo 'Creature Type:Alien <br>';     
         			$rand_image=rand(0,3);
              ?><!-- end php code-->
			
	<img src="<?php echo $images_alien[$rand_image];?>" width="180" height="200"><br><br> 
			
			<!-- start php code-->
			<?php
           
                    $rand_no = rand(0,4);
                    echo $description[$rand_no];
			$message_body = "<p><strong>Name:</strong> {$name}</p><p><strong>Creature Type:</strong> robot </p><p><strong>Description: </strong> {$description[$rand_no]} </p>";
   
    mail('eric.chen@senecacollege.com', 'A New Creature is created!', $message_body);
				
                }

				else {
                    echo 'Name: '.ucwords(strtolower($name)).'bots!<br><br>';
                    echo 'Creature Type: Robots<br>';
             		$rand_image1=rand(0,3);
              ?><!-- end php code-->
			
<img src="<?php echo $images_robots[$rand_image1];?>" width="180" height="200"><br><br>
			
             <!-- start php code-->       
            <?php
                    $rand_no1 = rand(0,4);
                    echo $description1[$rand_no1].'<br><br>';
		$message_body = "<p><strong>Name:</strong>{$name}</p><p><strong>Creature Type:</strong> robot </p><p><strong>Description: </strong> {$description1[$rand_no1]} </p>";
   
    mail('eric.chen@senecacollege.com', 'A New Creature is created!', $message_body);
				
                    
                }
?><!-- end php code-->
            </div>
	</div>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>

				$("#link").click(function()
				 {
					$("#hidden").slideDown(3000);
				});


</script>
		
</body>

</html>