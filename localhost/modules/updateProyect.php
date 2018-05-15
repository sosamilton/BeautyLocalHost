<?php
if (isset($_POST['name']) {
  $json = json_encode($contentsDecoded);
  //Save the file.
  file_put_contents('example.json', $json);
}else{
  header("Location: http://localhost");
  exit;
}
?>
