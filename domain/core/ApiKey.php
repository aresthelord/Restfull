<?php

class ApiKey {

function generate_key()
{
  $serial = sha1(uniqid(rand(), true));
  $checksum = substr(md5($serial), 0, 4);
  echo $serial . $checksum; 
  return $serial . $checksum;
}

function verify_key($key)
{
  $serial = substr($key, 0, 40);
  $checksum = substr($key, -4);
  if( substr(md5($serial), 0, 4) == $checksum ) {
  echo 'true'; 
  }  else { 
  echo 'false'; 
  }
  return substr(md5($serial), 0, 4) == $checksum;
}


}
/*Command line testing 
if (isset($argv)) {
    $argument1 = $argv[1];
    
}
else {
    $argument1 = $_GET['argument1'];
   
}

if(isset($argument1)) {
if($argument1 == 1) {
$Apikey = new ApiKey();
$Apikey->generate_key();
}else{
$Apikey = new ApiKey();
$Apikey->verify_key( $argument1);

}

}
*/