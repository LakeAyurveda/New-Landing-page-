<?php 





$ToEmail = 'sales@lakeayurveda.com'; 



$EmailSubject = 'Website Query: Ayurvedic Medicine For Men'; 



$mailheader='From:  sales@lakeayurveda.com';

$name=$_POST["name"];

$email=$_POST["email"];

$mobile=$_POST["mobile"];



$message=$_POST["message"];

/*

$name="name";

$email="email";

$subject="subject";

$message="message";

*/

//echo $name;exit();

$message="

              -----New Enquiry From----

                  Name :  $name

                  Email : $email

                  Mobile: $mobile

				  Message: $message

             ---------------------------     

                ";

                

                //echo $message;exit();

if($name !=''&& $email !=''&& $mobile !=''&& $message !='')

{

//  To redirect form on a particular page

header("Location:https://lakeayurveda.netlify.app/thanku.html");

}

else{

?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php

}



mail($ToEmail, $EmailSubject, $message, $mailheader) or die ("Failure");

echo "<center><div align='center'>";

echo "<h1 style='font-family:arial, verdana; font-size:15pt;'>Your enquiry has been sent successfully!</h1>";

echo "<a href='https://lakeayurveda.netlify.app/'><img src='http://fibsologic.in/images/logo.png'/></a>";

echo "  <br /> ";



?>