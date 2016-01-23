<?php
require_once('dbconfig.php');

class GetGalleryData{
	
	 private $db;
	 protected $state;
	 

	 public function __construct(){

	 	$this->db = new connection();
	 	$this->db = $this->db->dbConnect();

	 }

	 public function GalleryData(){ 
	             
                 $st = $this->db->prepare("SELECT projectname,tag FROM ourwork");
                 $st->execute();
                 $arrValues = $st->fetchAll(PDO::FETCH_ASSOC);
                 return $arrValues;             
 }

  public function insert($name,$email,$subject,$message){
	 	   if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
                 $st = $this->db->prepare("INSERT INTO contact (name,email,subject,message) VALUES (:name, :email, :subject, :message)");
                 $st->bindParam(':name',$name);
                 $st->bindParam(':email',$email);
                 $st->bindParam(':subject',$subject);
                 $st->bindParam(':message',$message);

                 if($st->execute()){
                 	 $this->state  = "0";
                 }
                 else{
                    $this->state  = "1";	
                 }
	 	   } 
	 	   return $this->state;
       }
     
     public function selectProjectData($projectName){
           if(!empty($projectName)){
                 $st = $this->db->prepare("SELECT projectname,description,url,screenshot FROM ourwork where projectname=?");
                 $st->bindParam(1,$projectName);
                 $st->execute();
                 $arrValues = $st->fetchAll(PDO::FETCH_ASSOC);
                 return $arrValues;
           }     
     }
     
}