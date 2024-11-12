

<?php



$servername="localhost";
$username="root";
$password="";
$dbname="foodzone";

$con= new mysqli($servername,$username,$password,$dbname);


 $user = $_POST["user"];
 $email = $_POST["email"];
 $mobile = $_POST["mobile"];
 $comment = $_POST["comment"];

$query = "INSERT INTO form (user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comment')";


$result= $con->query($query);

if($result) {
    echo"Connection Successful";
} else{
    echo "No Connection" . $con->error;
}

?>



<!-- 
SIR ABDULLAH:

// $con=mysqli_connect('localhost','root');
// if($con){
//     echo "connection successful";

// }
// else{
//     echo"No connection";
// }

// mysqli_select_db($con,'foodzone');

// $user = $POST['user'];
// $email = $POST['email'];
// $mobile = $POST['mobile'];
// $comment = $POST['comment'];

// $query = "insert into form (user, email, mobile, comment)
// values ('$user', '$email', '$mobile', '$comment')";

// mysqli_query($con, $query);
//  -->










 


