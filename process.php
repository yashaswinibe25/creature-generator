<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Creature Generator - processing</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/uniform.default.css">
</head>
<body>
    <div id="holder">

        <h1>Seneca College</h1>
        <h2>Webmaster Program</h2>
        <h3>Creature Generator</h3>

        <p>Step right up, step right up! Learn your creature-name in 3 short steps!</p>

        <h4>Step Two: Processing</h4><br>

        <?php
            date_default_timezone_set('Canada/Eastern');
            if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['creature_type'])) {
                $name = $_POST['name'];    
                $creature_type = $_POST['creature_type'];
                $alienArray = array('Alien description 1:<br>3-4ft tall, bluish grey in colour, large bug-like black eyes, slit for a mouth, small nose. 3 fingers and a thumb, long spindly arms and legs. Often seen with small dwarf-like creatures. Type most commonly seen in abduction cases.', 'Alien description 2:<br>5-7ft in height, red eyes. resembles a lizard, very intelligent, very nasty, in other words... do not mess with these guys. Said to live in underground bases, in fact rumoured to have taken over a US military underground base...and to live on human blood...GULP. Have been seen in charge of other races. These could be the top guys!', 'Alien description 3:<br>Newest of the Alien species, first seen in Varginha, Brazil in the early 90s. Small tan coloured imp-like being, said to resemble the Devil and give off a strange ammonia smell. Glowing red eyes, 3 large horns on the head, said to drain its victim of blood. Many sightings in Central America. Said to be capable of flight!', 'Alien description 4:<br>6-8Ft, Swedish looking Aliens, Human in appearance, but who knows if this is just a disguise??? Said to be the overseers of abductions, but do not seem to be as malevolent as some of the other species mentioned here.');
                $robotArray = array("Robot_description_1:<br>This robot that overcame the three laws of robotics in the movie version of I, Robot , Sonny looks so suspiciously like he was designed by Apple it’s a wonder they didn’t rename the film iRobot . He was voiced and motion-capture-performed by Firefly ’s Adam Tudyk, thus giving Whedon fans something to vote for in this poll (the Buffybot didn’t count under the “must not look like a human” rule).", "Robot_description_2:<br>The Yin to Optimus Prime’s Yang, Megatron is best known as the devious Deception leader, one driven by a desire to wipe out Autobots and take control of Cybertron, Earth or whatever adopted home world they’re invading this week. He can typically transform into a gun, tank or weapon of some kind and when upgraded becomes Galvatron. Merciless on his better days, the best you can hope for after a run-in with Megatron is a journey to the scrapheap.", "Robot_description_3:<br>The spheroid good guys from Gerry Anderson’s Terrahawks used to have a noughts and crosses battle with the bad guys’ cuboid robots in the show’s closing credits every week. The leader of the Zeroids, Sergeant Major Zero, was voiced by Windsor Davies of It Ain’t Half Hot Mum fame. You can recreate him by drawing a moustache on the zeroid above. No, we’re not kidding.", "Robot_description_4:<br>Soundwave is one of the most enduring Transformers because of his obscenely outdated, but still kinda cool in a retro way, alternate mode – a cassette recorder! He can jam signals, send communications and possesses a photographic memory. But the best things about him are his monotone voice (provided by Frank Welker) and the army of spies he can eject from his tape deck, including Ravage, Laserbeak and Overkill. Badass.");
                echo 'Thanks '.ucwords(strtolower($name)).'.<br>';
                echo 'Today is '.date('l F dS, Y').' and it’s been a busy day. But don’t worry!<br><br>';
                echo 'Our Robots are working 24hr a day 7 days a week to create an alien of your dream.<br>';
                echo 'When you are ready to see the results -- ';                
        ?>
                <button id="create">Click Here!</button><br><br>     

            <div id="report" style="display:none">    
            <?php         
                if ($creature_type == 'alien') { 
                    echo 'Name: '.ucwords(strtolower($name)).'zula!<br><br>'; 
                    $send_name = ucwords(strtolower($name)).'zula!';
                    echo 'Creature Type: <br>';     
            ?>
                    <img src="images/alien.png" width="158" height="228" alt="alien"><br>
            <?php
                    $rand_no = mt_rand(0,3);
                    echo $alienArray[$rand_no];
                    $send_creature = 'Alien';
                    $send_description = $alienArray[$rand_no];                
                } else {
                    echo 'Name: '.ucwords(strtolower($name)).'-bot!<br><br>';
                    $send_name = ucwords(strtolower($name)).'-bot!';
                    echo 'Creature Type: <br>';
            ?>
                    <img src="images/robot.png" width="189" height="189" alt="robot"><br>
            <?php
                    $rand_no = mt_rand(0,3);
                    echo $robotArray[$rand_no].'<br><br>';
                    $send_creature = 'Robot';
                    $send_description = $robotArray[$rand_no];
                }
        
//---------------- PHP Mailer --------------        
//            $message_body = "<p><strong>Name:</strong> {$send_name}</p><p><strong>Creature Type:</strong> {$send_creature}</p><p><strong>Description: </strong></p><div>{$send_description}</div>";
//            PHPMailer
//            require 'phpmailer/PHPMailerAutoload.php';
//            $mail = new PHPMailer;
//            $mail->SMTPDebug = 3;                               // Enable verbose debug output
//            $mail->isSMTP();                                      // Set mailer to use SMTP
//            $mail->Host = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
//            $mail->SMTPAuth = true;                               // Enable SMTP authentication
//            $mail->Username = 'ctran43@myseneca.ca';                 // SMTP username
//            $mail->Password = 'secret';                           // SMTP password
//            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//            $mail->Port = 587;                                    // TCP port to connect to
//            $mail->setFrom('ctran43@myseneca.ca', 'Co Tran');
//            $mail->addAddress('eric.chen@senecacollege.com', 'Eric Chen');     // Add a recipient
//            $mail->addAddress('ellen@example.com');               // Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');
//
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//            $mail->isHTML(true);                                  // Set email format to HTML
//            $mail->Subject = 'WWW110 PHP Homework 1 ';
//            $mail->Body    = $message_body;
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//            if(!$mail->send()) {
//                echo 'Message could not be sent.';
//                echo 'Mailer Error: ' . $mail->ErrorInfo;
//            } else {
//                echo 'Message has been sent';
//            }
//--------------- PHP Mialer ends -------------            
                
            ?>
            </div><!-- report ends -->
    </div><!-- holder ends -->
        
    <script src="js/jquery-1_4_2_min.js"></script>
    <script src="js/jquery.uniform.min.js"></script>  
        
    <script>           
        $('#create').click(function() {
            $('#report').slideDown(1000);
        });
    </script>
        
    <?php      
    } else {
    echo 'Error: Please enter your name and select your creature type. <br><br>';
    ?>    
    <a href="step_one.php"><input type="submit" value="Click here"></a> to go back to the front page.
    <?php
    }
?>
</body>
</html>
