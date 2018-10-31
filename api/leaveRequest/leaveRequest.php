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
  $sql = "UPDATE leaveRequest SET $data->setField $data->Filter";
  // echo "It's POST <br>";
  // echo $sql;
  if($conn->query($sql) === TRUE) {
    $resdata= array();
    $data->Filter = "where id='".$data->leaveRequestId."'";
    echo get($data, $conn);
    // echo'{"status": "OK","data":'.json_encode($resdata).'}';
    return true;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return false;
  }
}

function post($data, $conn) {
  $sql = "INSERT INTO leaveRequest (leaveType, reason, dateFrom, dateTo, numOfDays, status, createdBy, updatedBy)
  VALUES ('$data->leaveType', '$data->reason', '$data->dateFrom', '$data->dateTo', '$data->numOfDays', '$data->status', $data->createdBy, $data->createdBy)";
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
  $sql = "SELECT $data->Field FROM leaveRequest $data->Filter";
  // echo "It's GET <br>";
  // echo $sql;
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
  case 'GetLeaveRequest':
    echo get($data, $conn);
    break;
  case 'PostLeaveRequest':
    post($data, $conn);
    break;
  case 'UpdateLeaveRequest':
    // $data->Filter = "where id='".$data->leaveRequestId."'";
    // $data->setField = "status = ".$data->status.", updatedBy = ".$data->updatedBy.""; // lot more
    // put($data, $conn);
    break;
  case 'RequestLeave':
    post($data, $conn);
    break;
  case 'MyLeaveRequest':
    $data->Filter = "where createdBy='".$data->userId."'";
    // $data->Field = "email, firstName, lastName";
    echo get($data, $conn);
    break;
  case 'ApproveLeaveRequest':
    $data->Filter = "where id='".$data->leaveRequestId."'";
    $data->setField = "status = ".$data->status.", updatedBy = ".$data->updatedBy."";
    put($data, $conn);
    break;
  default:
    echo "Please enter a valid Operation";
    break;
}
$conn->close();
?>
