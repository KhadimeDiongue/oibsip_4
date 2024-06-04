<?php
$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;



if ($username != null && $password != null) {
  $file_path = "../data.json";

  //get contents from json file (usename and passwords)
  $data = json_decode(file_get_contents($file_path), true);

  foreach ($data as $user) {
    if (array_key_exists($username, $user)) {
      //test password 
      if ($user[$username] == $password) {
        Header("Location: ../Secure/secure_page.html");
      }
    }
  }
}

?>