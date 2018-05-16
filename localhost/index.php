<?php
require __DIR__ . '/vendor/autoload.php';
use Cronfig\Sysinfo\System;


// Instantiate the system
$system = new System;
// System can get you the OS you are currently running
$os = $system->getOs();
// Get some metrics like free disk space
$memoryUsage = $os->getCurrentMemoryUsagePercentage();
$diskUsage = $os->getDiskUsagePercentage();

function isNotExclude($string) {
    $info = file_get_contents(__DIR__.'/exclude.json');
    $excludeFolder = json_decode($info, true);
    return count(array_filter($excludeFolder,
      function($value) use ($string) {
          return strpos($value, $string) !== false;
      }
    )) == 0;
}

function getProyectFile($dir, $proyectFile = 'info.json'){
  $infoFile = __DIR__."/info.json";
  if (!file_exists($dir."/".$proyectFile)){
    if (copy($infoFile, $dir."/".$proyectFile)) {
      chmod($dir."/".$proyectFile, 0775);
    }
  }
  $info = file_get_contents($dir."/".$proyectFile);
  $proyect = json_decode($info, true);
  if ($proyect == NULL){
    $proyect['error'] = "el archivo info.json del proyecto tiene un error al validar";
  }
  return $proyect;
}

function getGitStatus($dir){
  if (file_exists($dir."/.git/HEAD")) {
    $stringfromfile = file($dir.'/.git/HEAD', FILE_USE_INCLUDE_PATH);
    $firstLine = $stringfromfile[0]; //get the string from the array
    $explodedstring = explode("/", $firstLine, 3); //seperate out by the "/" in the string
    $branchname = $explodedstring[2]; //get the one that is always the branch name
  }
  return isset($branchname) ? $branchname : "local";
}

function getFolderSize($dir)
{
    $size = 0;
    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $size += is_file($each) ? getFolderSize($each) : getFolderSize($each);
    }
    return $size;
}
$str = 'info.json';
$dirs = array_filter(glob('*'), 'is_dir');
$host = '127.0.0.1';
$ports = array(
  array('port'=> 21, 'name'=> 'FTP'),
  array('port'=> 22, 'name'=> 'SSH'),
  array('port'=> 25, 'name'=> 'SMTP'),
  array('port'=> 80, 'name'=> 'HTTP'),
  array('port'=> 110, 'name'=> 'POP3'),
  array('port'=> 143, 'name'=> 'IMAP'),
  array('port'=> 443, 'name'=> 'HTTP - SSL'),
  array('port'=> 587, 'name'=> 'SMTP - SSL'),
  array('port'=> 993, 'name'=> 'IMAP - SSL'),
  array('port'=> 2082, 'name'=> 'CPANEL'),
  array('port'=> 3306, 'name'=> 'MYSQL')
);
$nameSystem = $system->getOs()->getCurrentOsName();
?>
