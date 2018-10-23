<?php require '../config.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$method = $_SERVER['REQUEST_METHOD'];
$data=json_decode(file_get_contents("php://input"));
switch ($data->method) {
  case 'PUT':
  break;
  case 'POST':
    $sql = "INSERT INTO user (firstName, lastName, email, password, telNumber, role, department, branch)
    VALUES ('$data->firstName', '$data->lastName', '$data->email', '$data->password', '$data->telNumber', $data->role, $data->department, $data->branch)";
    if($conn->query($sql) === TRUE) {
      $resdata= array();
      $tsql = "SELECT * FROM user where email='$data->email'";
      $result1 = $conn->query($tsql);
      while($row = mysqli_fetch_object($result1)) {
        array_push($resdata, $row);
      }
      echo'{"status": "OK","data":'.json_encode($resdata).'}';
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    break;
  case 'GET':
    $sql = "SELECT * FROM user $data->filter";
    echo $data->method;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      $resdata= array();
      while($row = mysqli_fetch_object($result)) {
        array_push($resdata, $row);
      }
      echo'{"status": "OK","data":'.json_encode($resdata).'}';
      } else {
        echo "User-not-exists";
      }
    break;
  default:
    break;
}
$conn->close();
?>
