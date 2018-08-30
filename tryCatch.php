<?php

//simple try catch error handilng
/* try{
	echo "Hello World!";
	throw new Exception("Hellow world worked");
}
catch(Exception $e){
	echo $e->getMessage();
}
finally{
	echo "Last error";
} */



/* try{
	if(4 > 2){
		throw new Exception("Four is bigger then two");
	}
	if(2 > 4){
		throw new Exception("Two is bigger then four");
	}
	if(4 == 5){
		throw new Exception("Four equels five");
	}
}
catch(Exception $e){
	echo $e->getMessage();
} */




// Custom error event
/* class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@example...com";

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new customException($email);
  }
}

catch (customException $e) {
  //display custom message
  echo $e->errorMessage();
} */

?>