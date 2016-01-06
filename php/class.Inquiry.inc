<?php

	class Inquiry {
		
		public $name;
		public $email;
		public $subject;
		public $message;
		
		function __construct($n, $email, $subject, $message){
			$this->name = $n;
			$this->email = $email;
			$this->subject = $subject;
			$this->message = $message;
		}
		
		public function displayFull() {
			echo 'Name: ' . $name . '<br/> Email: ' . $email . '<br/> Subject: ' . $subject . '<br/> Message: ' . $message;
		}
	}
?>