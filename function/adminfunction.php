<?php 
/**
 * 
 */
class admin
{
	
	public function __construct(){
		
		$db = new dbConnection();
	}
	public function login($username,$password)
	{
		global $conn;
		$sql  = "select * from admin where username='$username' and password='$password'";
		$result = $conn->query($sql);
		$admin = $result->fetch_assoc();
		$count = $result->num_rows;
		if($count == 1){
			return true;
		}else{
			return false;
		}
	}
// admin registration...............


	public function admin_registration($username,$password,$fileName)
	{
		  if ($fileName == '') {
               $fileName = "no_image.png";
            }
		  
            global $conn;
		$query = $conn->query("select username from admin where username='$username'");

		$num = $query->num_rows;
		$sql = "INSERT INTO admin(username,password,pic) VALUES ('$username','$password','$fileName')";
		if($num == 0){
			$conn->query($sql);
			return true;
		}else{
			return false;
		}
	}
	
}

 ?>