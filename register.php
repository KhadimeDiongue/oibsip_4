<?php
  $username = isset($_POST['username']) ? $_POST['username'] : null;
  $password = isset($_POST['password']) ? $_POST['password'] : null;

  if($username != null && $password != null)
    {
      $file_data;
      $file_path = "../data.json";

      //read contents of file and save them in an associative array
      if(file_exists($file_path))
        $file_data = json_decode(file_get_contents($file_path), true);
      
      //append newly added username and password to existing data
      $file_data[] = array(
        $username => $password
      );

      //open file
      $file = fopen('../data.json', 'w');
 
      //write the data to the file
      if($file)
      {
        fwrite($file, json_encode($file_data));
        Header("Location: ../index.php");
      }
      
      fclose($file);

      
    }
    
?>