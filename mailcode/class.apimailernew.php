<?php

/* Where smtp and sendmail does not work */

class APImailer{

	private $url;
	private $user;
	private $pass;
	
	private $attachment;
	private $to;
	private $toname;
	private $from;
	private $subject;
	private $message;
	private $response;
	


	function APImailer(){
		$this->url = 'https://api.sendgrid.com/';
		$this->user = 'miltan_gsl';
		$this->pass = 'gsl#1234';
	}


	function sendgridmail($attachment, $from, $to, $toname, $subject, $message){
		
		$this->attachment = $attachment; // 'attachment.pdf';
		$this->to = $to;
		$this->toname = $toname;
		$this->from = $from;
		$this->subject = $subject;
		$this->message = $message;
		

		$params = array(
			'api_user'  => $this->user,
			'api_key'   => $this->pass,
			// 'to'        => array('miltan.c@gsl.in','debajyoti.p@gsl.in'),
			// 'toname'    => array('Miltan','Debajyoti'),	
			'to'        => $this->to,
			'toname'    => $this->toname,	
			'subject'   => $this->subject, //'test of file sends',
			'html'      => $this->message, //'<p> the HTML </p>',
//			'text'      => strip_tags($this->message), //'the plain text',
			'from'      => $this->from
		  );

		//print_r($params);

		$request =  $this->url.'api/mail.send.json';

		// Generate curl request
		$session = curl_init($request);

		// Tell curl to use HTTP POST
		curl_setopt ($session, CURLOPT_POST, true);

		// Tell curl that this is the body of the POST
		curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

		// Tell curl not to return headers, but do return the response
		curl_setopt($session, CURLOPT_HEADER, false);
		curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

		// obtain response
		$this->response = curl_exec($session);
		curl_close($session);

		// print everything out
		//print_r($this->response);
	}

	function getResponse(){
		return $this->response;
	}
}
?>
