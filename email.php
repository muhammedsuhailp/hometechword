<?php 


if($_POST['email_from'] == 'apply')
{
	$subject = $_POST['course'];
	$message = '<p><strong>Name:</strong>'.$_POST['name'].'</p>
     			<p><strong>Course:</strong>'.$_POST['course'].'</p>
				<p><strong>Email:</strong>'.$_POST['email'].'</p>
     			<p><strong>Mobile:</strong>'.$_POST['phone'].'</p>
     			<p><strong>Address:</strong>'.$_POST['address'].'</p>
     			<p><strong>Qualification:</strong>'.$_POST['qualification'].'</p>
     			<p><strong>Gender:</strong>'.$_POST['gender'].'</p>
     			<p><strong>Date of Birth:</strong>'.$_POST['dob'].'</p>';
     			 		      	$to = "suhailpmgd@gmail.com";
      $msgcontents = "Message: $message";
      $from = $_POST['email'];
$headers = "From: " .strip_tags($from). "\r\n";
      $headers .= "MIME-Version: 1.0 \r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
   
   echo "<link href='https://cdn.jsdelivr.net/npm/lobibox@1.2.7/css/lobibox.css' rel='stylesheet'> <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>  <script src='https://cdn.jsdelivr.net/npm/lobibox@1.0.0/dist/js/lobibox.min.js'></script><script type='text/javascript'>   setTimeout(function () {";
                                 echo " Lobibox.alert('info',{ msg: 'Mail Send Successfully!!'}); }, 100) ;  </script>";
      $mailsent = mail($to, $subject, $msgcontents, $headers);
//  header('Location: http://accuratemedicalcoding.com/');
         
                                echo " <script> setTimeout(function () { window.location.href ='http://accuratemedicalcoding.com/application_form.html';";
                              echo " }, 1000) ; </script>";

}
else if($_POST['email_from'] == 'footer')
{
	$subject = 'Comment';
	$message = '<p><strong>Name:</strong>'.$_POST['full_name'].'</p>
				<p><strong>Email:</strong>'.$_POST['email'].'</p>
		     	<p><strong>Message:</strong>'.$_POST['message'].'</p>';
		     	     	$to = "suhailpmgd@gmail.com";
      $msgcontents = "Message: $message";
           $from = $_POST['email'];
$headers = "From: " .strip_tags($from). "\r\n";
      $headers .= "MIME-Version: 1.0 \r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
    echo "<link href='https://cdn.jsdelivr.net/npm/lobibox@1.2.7/css/lobibox.css' rel='stylesheet'> <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>  <script src='https://cdn.jsdelivr.net/npm/lobibox@1.0.0/dist/js/lobibox.min.js'></script><script type='text/javascript'>   setTimeout(function () {";
                                 echo " Lobibox.alert('info',{ msg: 'Mail Send Successfully!!'}); }, 100) ;  </script>";
      $mailsent = mail($to, $subject, $msgcontents, $headers);
//  header('Location: http://accuratemedicalcoding.com/');
         
                                echo " <script> setTimeout(function () { window.location.href ='http://accuratemedicalcoding.com/';";
                              echo " }, 100) ; </script>";
}
else{
	$subject = 'COMPLAINT REGISTRATION';
	$message = '<p><strong>Name:</strong>'.$_POST['name'].'</p>
				<p><strong>Email:</strong>'.$_POST['email'].'</p>
				<p><strong>Mob:</strong>'.$_POST['mobile'].'</p>
        <p><strong>Service:</strong>'.$_POST['service'].'</p>
        <p><strong>Brand:</strong>'.$_POST['brand'].'</p>
        <p><strong>Address:</strong>'.$_POST['address'].'</p>
		     	<p><strong>Message:</strong>'.$_POST['Message'].'</p>';
		      	$to = "hometechworld.complaints@gmail.com";
      $msgcontents = "Message: $message";
           $from = $_POST['email'];
$headers = "From: " .strip_tags($from). "\r\n";
      $headers .= "MIME-Version: 1.0 \r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
    
 echo "<link href='https://cdn.jsdelivr.net/npm/lobibox@1.2.7/css/lobibox.css' rel='stylesheet'> <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>  <script src='https://cdn.jsdelivr.net/npm/lobibox@1.0.0/dist/js/lobibox.min.js'></script><script type='text/javascript'>   setTimeout(function () {";
                                 echo " Lobibox.alert('info',{ msg: 'Mail Send Successfully!!'}); }, 100) ;  </script>";
      $mailsent = mail($to, $subject, $msgcontents, $headers);

         
                                echo " <script> setTimeout(function () { window.location.href ='index.html';";
                              echo " }, 1000) ; </script>";
}





// header('Location: https://www.qzaak.com/demo/contact.html');
// //  header('Location: '.$_SERVER['REQUEST_URI']);

?>











