<?php require '../config.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




// $method = $_SERVER['REQUEST_METHOD'];
$data=json_decode(file_get_contents("php://input"));
// Setting default values
if (!isset($data->Field)) {
  $data->Field = "*";
}
if (!isset($data->Filter)) {
  $data->Filter = "";
}


function put($data, $conn) {
  $sql = "UPDATE paySlip SET $data->setField $data->Filter";
  // echo "It's POST <br>";
  // echo $sql;
  if($conn->query($sql) === TRUE) {
    $resdata= array();
    $data->Filter = "where id='".$data->paySlipId."'";
    echo get($data, $conn);
    // echo'{"status": "OK","data":'.json_encode($resdata).'}';
    return true;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return false;
  }
}

function post($data, $conn) {
  $sql = "INSERT INTO paySlip (userId, payDate, baseSalary, netSalary, isActive, createdBy, updatedBy)
  VALUES ('$data->userId', '$data->payDate', '$data->baseSalary', '$data->netSalary', '$data->isActive', '$data->createdBy', '$data->createdBy')";
  // echo "It's POST <br>";
  if($conn->query($sql) === TRUE) {
    $resdata= array();
    // $data->Filter = "where email='".$data->email."'";
    echo get($data, $conn);
    // echo'{"status": "OK","data":'.json_encode($resdata).'}';
    return true;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return false;
  }
}

function get($data, $conn) {
  $sql = "SELECT $data->Field FROM paySlip $data->Filter";
  // echo "It's GET <br>";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    $resdata= array();
    while($row = mysqli_fetch_object($result)) {
      array_push($resdata, $row);
    }
    // echo'{"data":'.json_encode($resdata).'}';
    return json_encode($resdata);
  } else {
    // echo "User don't exists<br>";
    return false;
  }
}




switch ($data->Operation) {
  case 'GetPaySlip':
    echo get($data, $conn);
    break;
  case 'PostPaySlip':
    post($data, $conn);
    break;
  case 'UpdatePaySlip':
    // $data->Filter = "where id='".$data->leaveRequestId."'";
    // $data->setField = "status = ".$data->status.", updatedBy = ".$data->updatedBy.""; // lot more
    // put($data, $conn);
    break;
  default:
    echo "Please enter a valid Operation";
    break;
}
$conn->close();
?>
