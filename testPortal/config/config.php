<?php


date_default_timezone_set("Asia/Kolkata");

if(file_exists('rb.php')){
    require_once 'rb.php';
}
else{
    require_once '../rb.php';
}

$islocal='1';
if($islocal=='1'){  //local

R::setup('mysql:host=localhost;dbname=db_test',
'root','');

}

function get_site_url(){
return "http://localhost/testPortal/";
}


function site_url(){
    echo get_site_url();
    return ;
}

function display_error() {
    global $errors;

    if (count($errors) > 0){
        echo '<div class="error">';
            foreach ($errors as $error){
                echo $error .'<br>';
            }
        echo '</div>';
    }

}	



function clearSpecialChar($string) {

    if($string!="") {
      $string = str_replace('-',' ',$string);
      $string = str_replace("'",'`',$string);
      $string = str_replace('"','`',$string);
      $string = str_replace("'","\'",$string);
      $string = str_replace("/","-",$string);
       $string = str_replace(array('[\', \']'), '', $string);
  
      //   $string = preg_replace('/\[.*\]/U', '', $string);
  
      //   $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
  
         //$string = htmlentities($string, ENT_COMPAT, 'utf-8');
        // $string =  iconv('UTF-8', 'ISO-8859-1//TRANSLIT//IGNORE', $string);
       //  $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
       //  $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , ' ', $string);
  
       // $string = trim($string, '-');
  
       
  
    }
  
    return $string;
  }
// for remove extra data in text

?>
