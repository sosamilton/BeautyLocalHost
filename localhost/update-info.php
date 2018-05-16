<?PHP
if (isset($_POST['dir'])) {
  $dir= $_POST['dir'];
  unset($_POST['dir']);
  $proyect = $_POST['proyect'];
  unset($_POST['proyect']);
  $file = $_SERVER['DOCUMENT_ROOT']."/".$dir.'/info.json';
  $data = json_encode($_POST,JSON_UNESCAPED_UNICODE);
  file_put_contents($file, $data);
  header('Content-Type: application/json');
  $arr = json_decode($data, true);
  $arr['proyect'] = $proyect;
  $data = json_encode($arr,JSON_UNESCAPED_UNICODE);
  echo $data;
}else {
  echo "estas haciendo cualquier cosa!";
}
