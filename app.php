<?php
// DB connection
$db = "test";
$username = "root";
$password = "";

// check to see if the connection is ok via mysqli
$connection = new mysqli('localhost', $username, $password, $db);
if($connection->connect_error){
  die ('Connect Error   ' . $connection->connect_error);

}
//echo 'Success....' . $connection->host_info . "\n";

//echo '<div id="info1"> Hello </div>';
$sex = $_POST['filter'];
if(isset($_POST["action"]) ){
  if($_POST['filter'] == 'All'){
    $sql = "SELECT * FROM info";
    }else{
    $sql = "SELECT * FROM info WHERE sex = '$sex'";
    }



  $result = $connection->query($sql);

  if($result->num_rows > 0 ) {

    echo "<div id='info1'>";
    echo "<h1>Result:</h1>";
    echo " <table><tr><th>First Name</th><th >Last Name</th><th>Age</th></tr>";

    while($row = $result->fetch_assoc()) {
              //var_dump($row);
             echo "<tr ><td >".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["age"]."</td></tr>";

    }

    echo "</table>";
    echo "</div>";
}
}
else{
  $sql = "SELECT * FROM info";

  //Performs a query on the database
  $result = $connection->query($sql);

  if($result->num_rows > 0 ) {

    echo "<div id='info1'>";
    echo "<h1>Result:</h1>";
    echo " <table style='border:1px #aaa solid;'><tr><th>First Name</th><th >Last Name</th><th>Age</th></tr>";
    // fetch a result as an associative array
    while($row = $result->fetch_assoc()) {
              //var_dump($row);
             echo "<tr ><td >".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["age"]."</td></tr>";

    }

    echo "</table>";
    echo "</div>";

}
  }


$connection->close();



 ?>
