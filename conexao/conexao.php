<?php
	class conexao
	{
		private $host = "localhost";
	    private $username = "root";
	    private $password = "";
	    private $database = "diariobd";
		
	    public function conecta(){
	    	try{
	    		$this->conexao = new mysqli($this->host,$this->username,$this->password,$this->database);
            	return $this->conexao;
	    	}catch(Exception $e){
	    		return 0;
	    	}
	    }

		public function __destruct()
		{
			mysqli_close($this->conexao);
		}
	}
	
?>