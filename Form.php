<?php 


$con=mysqli_connect('localhost','root','','record') or die("Not Connected");


if(isset($_GET['saveData']))
{
   
$name=$_GET['name'];
$email=$_GET['email'];

$query="INSERT INTO `register`(`name`,`email`) VALUES ('$name','$email')";
$run=mysqli_query($con,$query);
}
?>

<!DOCTYPE html>
</html>
<head>
    <title>Reg  form</title>

</head>
<body>
    <form method="get" action="">
    Name:<input type="text" name="name"><br>
    Email:<input type="text" name="email"><br>
    <input type="hidden" name="saveData">
    <input type="submit">
    </form>

</body>
</html>