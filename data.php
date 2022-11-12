<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''&& $email !=''&& $contact !=''&& $address !='')
{
//  To redirect form on a particular page
header("Location:https://www.formget.com/app/");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>