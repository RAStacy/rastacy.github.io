<html>

<body>



<?php

if (isset($_REQUEST['email']))

//if "email" is filled out, send email

  {

  //send email 

  $email = $_REQUEST['email'] ; 

  $phone = $_REQUEST['phone'] ;

  $message = $_REQUEST['message'] ;

  mail( "$email", "Phone: $phone",

  $message, "Message: $message" );

  echo "The form has been submitted with the following content:<br><br>";

  echo "To: $email <br>";

  echo "Phone: $phone <br>";

  echo "Message: $message; <br>";



  }

else

//if "email" is not filled out, display the form

  {

  echo "<form method='post' action='mailtest.php'>

  To: <input name='email' type='text' /><br />

  Phone: <input name='phone' type='text' /><br />

  Message:<br />

  <textarea name='message' rows='15' cols='40'>

  </textarea><br />

  <input type='submit' />

  </form>";

  }

?>



</body>

</html>