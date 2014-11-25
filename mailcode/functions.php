<?php
	function MailSendViaAuthentication($ArrayParam)
	{
		$addAddress_Email = $ArrayParam['addAddress_Email'];
		$addAddress_Name = $ArrayParam['addAddress_Name'];
		$PDF_NAME = $ArrayParam['PDF_NAME'];
		$MAIL_SUBJ = $ArrayParam['MAIL_SUBJ'];
		$MAIL_BODY = $ArrayParam['MAIL_BODY'];
		$PDF_NAME_FULLPATH = $ArrayParam['PDF_NAME_FULLPATH'];

#	URL: http://mail.gsl.in
#	Email: vendor-reg@ginesys.in (Alias: vendor-reg@gsl.in)
#	Username: vendor-reg@gsl.in
#	Password: veNr^987
		
		//Create a new PHPMailer instance
		$mail = new phpmailer();
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host = "smtp.gmail.com";
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port = 587;
		//The secure connection prefix.
		//Options: "", "ssl" or "tls"
		$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication
		$mail->Username = 'vendor-reg@gsl.in'; 
		//Password to use for SMTP authentication
		$mail->Password = 'veNr^987'; 
		//Set who the message is to be sent from
		$mail->setFrom('vendor-reg@gsl.in', 'Vmart Registration');
		//Set an alternative reply-to address
		$mail->addReplyTo('vendor-reg@gsl.in', 'Vmart Registration');
		#$mail->addAddress('debajyoti.p@gsl.in', 'D Paul.');
		$mail->addAddress($addAddress_Email, $addAddress_Name);
		
		
		//Set the subject line
		$mail->Subject = $MAIL_SUBJ;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($MAIL_BODY);
		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';
		

//			#		$mail->AddStringAttachment($string,$filename,$encoding,$type);
		//Attach an image file
				$mail->addAttachment($PDF_NAME_FULLPATH);
		//send the message, check for errors
		//return true;	//	HOLD MAIL

		if (!$mail->send()) {
			//echo "Mailer Error: " . $mail->ErrorInfo;
			return $mail->ErrorInfo;
		} else {
			return 'Message sent';
			//echo "Message sent!";
		}
	}
	function MailSendViaSendgrid($ArrayParam)	{		$addAddress_Email = $ArrayParam['addAddress_Email'];		$addAddress_Name = $ArrayParam['addAddress_Name'];		$PDF_NAME = $ArrayParam['PDF_NAME'];		$MAIL_SUBJ = $ArrayParam['MAIL_SUBJ'];		$MAIL_BODY = $ArrayParam['MAIL_BODY'];		$PDF_NAME_FULLPATH = $ArrayParam['PDF_NAME_FULLPATH'];		//Create a new APIMailer instance
					$mail = new APImailer();		if (!$mail->sendgridmail($PDF_NAME_FULLPATH, "vendor-reg@ginesys.in", $addAddress_Email, $addAddress_Name, $MAIL_SUBJ, $MAIL_BODY )) 		{			return $mail->getResponse();		} else {			return 'Message sent';			//echo "Message sent!";	
									}	}

	function randomPrefix($length = 10, $Type = 'AN')
	{
		$random= "";		
		srand((double)microtime()*1000000);
		
		if($Type == 'A')
		{
			$data = "AbcDEIJKLMNQRSTUVWXYZ";
			$data .= "aBCdefghijklmnopqrstuvwxyz";
			$data .= "0FGHP"; 	//	For ALPHA
		}
		elseif($Type == 'N')
		{
			$data = "1234567890";	//	Only NUMERIC
		}
		elseif($Type == 'CA')
		{
			$data = "PLMOKNIJBUHVYGCTFXRDZESWAQ";	//	Only Capital - ALPHA
		}
		elseif($Type == 'AN')
		{
			$data = "AbcDE123IJKLMN67QRSTUVWXYZ";
			$data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
			$data .= "0FGH45OP89"; 	//	For ALPHA-NUMERIC
		}
				
		for($i = 0; $i < $length; $i++)
		{
			$random .= substr($data, (rand()%(strlen($data))), 1);
		}
		
		return $random;
	} 

?>