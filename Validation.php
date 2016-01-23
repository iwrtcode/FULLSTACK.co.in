<?php
require_once(__DIR__.'/GetGalleryData.php');
class Validation{
	protected $field;
	public $error = array();
	protected $expression;
	protected $length;
	public $success;


	public function contact($data){
			   if(empty($data) === false){
					           $this->field = array('name','email','subject','message');
					           foreach($data as $key =>$value)
					            {
					            	
					            	if(trim(empty($data['name'])) && in_array($key,$this->field) === true){
					                	$this->error['name'] = "You forgot to enter your name";
					                  }
					                 if(trim(empty($data['email'])) && in_array($key,$this->field) === true){
					                	$this->error['email'] = "You forgot to enter your email id";
					                }
					                if(trim(empty($data['subject'])) && in_array($key,$this->field) === true){
					                	$this->error['subject'] = "You forgot to select a subject";
					                }
					                if(trim(empty($data['message'])) && in_array($key,$this->field) === true){
					                	$this->error['message'] = "You forgot to enter brief";
					                  }
					                  
					                    
					                }
					            

					     }
					     $this->check_regular_expression($data);
					     
	        }           
                     protected function check_regular_expression($data){

            	                          if(!empty($data['name'])){
											      if(!preg_match('/^[a-zA-Z0-9\d ]*$/',trim($data['name']))){
											               	$this->error['name'] ="This special characters not allowed";
											              }
										              }
										
										              if(!empty($data['email'])){
											                if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',trim(strtolower($data['email'])))){
											                	$this->error['email'] ="Please enter a valid email";
											                }  
										              }

										            	if(!empty($data['message'])){
											                if(!preg_match('/^[0-9a-z,. \r\n]*$/i',trim($data['message']))){
											                	
											                	$this->error['message'] ="This special characters not allowed";
											                }
											                else{
											                	
											                	 $this->check_length($data);
											                }
										              }

							
							    
					          }
					 protected function check_length($data){                    
							          if(!empty($data['message'])){
											                if(trim(strlen($data['message'])) > 250){
											                	   $this->error['message'] ="Please enter only 250 characters.";
											                }
											             }    
													                 
											                $errors = array_filter($this->error);
											                if(empty($errors) === true){
												                 $to =  "pv@fullstack.co.in";
												                 $subject = 'HireUs';
												                 $message =  "Name: ".$data['name']. "<br/>" ."Subject: ".$data['subject']. "<br/>"."Email: ".$data['email']."<br/>"."Message: ".$data['message']."\r\n";
												                 $headers = 'From: '.$data['email']. "\r\n" .
												                 'MIME-Version: 1.0' . "\r\n".
												                 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
												                 $mail_sent = mail($to, $subject, $message, $headers);
											                	 $insertQuery = new GetGalleryData();
											                	 $result = $insertQuery->insert($data['name'],$data['email'],$data['subject'],$data['message']);
											                	 $this->success = $result;
											             }
	                       }


}