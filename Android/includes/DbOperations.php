 <?php
	class DbOperations{
		provate $con;
	
		function __constrtuct(){
			require_once dirname(__FILE__).'/DbConnect.php';
			$db= new DbConnect();
			$this->con = $db->connect();
		}
		
		
	}
?> 