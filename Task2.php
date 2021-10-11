<?php
   	if($_SERVER["REQUEST_METHOD"]=="POST"){

	  
	   $formdata = array(
	      'first name'=> $_POST["first name"],
	      'last name'=> $_POST["last name"],
	      'designation'=>$_POST["designation"],
	      'language'=> $_POST["language"],
          'email'=> $_POST["email"],
          'password'=> $_POST["password"],
          'file'=> $_POST["file"]

	   );
       $existingdata = file_get_contents('mydata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$data;
  
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);



}
?>