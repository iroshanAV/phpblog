<?php
class database{
	public $host = DB_HOST;
	public $user = DB_USER;
	public $pass =DB_PASS;
	public $db_name = DB_NAME;
	
	public $link;
	
	public function __construct(){
		$this->connect();
	}
	
	
	private function connect(){
		$this->link = new mysqli($this->host, $this->user, $this->pass, $this-> db_name);
	}
	
	public function select($query){
		$result = $this-> link->query($query);
		
		if($result-> num_rows > 0){
			return $result;
		}else{
			return false;
		}
	}
	
	public function insert($query){
		$insert = $this-> link -> query($query);
		
		if($insert){
			header('location: index.php?msg= Post inserted');
		}else{
			echo "Post did not inserted";
		}
		
	}
	
	 
	public function update($query){
		$update = $this-> link -> query($query);
		
		if($update){
			header('location: index.php?msg= Post updated');
		}else{
			echo "Post did not updated";
		}
	}
		
		public function delete($query){
		$delete = $this-> link -> query($query);
		
		if($delete){
			header('location: index.php?msg= Post deleted');
		}else{
			echo "Post did not deleted";
		}
		
	}
		
	
	
}