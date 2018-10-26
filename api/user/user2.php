<?php require '../config.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $method = $_SERVER['REQUEST_METHOD'];
$data=json_decode(file_get_contents("php://input"));

function post($data, $conn) {
  $sql = "INSERT INTO user (firstName, lastName, email, password, telNumber, role, department, branch)
  VALUES ('$data->firstName', '$data->lastName', '$data->email', '$data->password', '$data->telNumber', $data->role, $data->department, $data->branch)";
  // echo "It's POST <br>";
  if($conn->query($sql) === TRUE) {
    $resdata= array();
    $data->Filter = "where email='".$data->email."'";
    echo get($data, $conn);
    // echo'{"status": "OK","data":'.json_encode($resdata).'}';
    return true;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return false;
  }
}

function get($data, $conn) {
  $sql = "SELECT * FROM user $data->Filter";
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
  case 'GetUser':
    echo get($data, $conn);
    break;
  case 'PostUser':
    post($data, $conn);
    break;
  case 'UpdateUser':
    break;
  case 'Login':
    $data->Filter = "where email='".$data->email."' AND password='".$data->password."'";
    echo get($data, $conn);
    break;
  case 'Register':
    $data->Filter = "where email='".$data->email."'";
    if(get($data, $conn)) {
      echo "User already exits";
    } else {
      post($data, $conn);
    }
    break;
  default:
    echo "Please enter a valid Operation";
    break;
}
$conn->close();
?>
