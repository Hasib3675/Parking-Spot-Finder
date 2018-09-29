<?php 

	class Database
	{
		
		public $connection;
		
		function __construct()
		{	
			$this->connection = mysqli_connect("localhost", "root", "","parking_spot");

			if (mysqli_connect_error($this->connection))
			{
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			} 
		}
		public function query($query)
	    {
	        return mysqli_query($this->connection,$query);
	    }
	    public function num_rows($result)
	    {
	    	return mysqli_num_rows($result);
	    }
	    public function fetch_row($result)
	    {
	    	return mysqli_fetch_assoc($result);
	    }
	    public function get_errors()
	    {
	    	return mysqli_error($this->connection);
	    }
	    public function close()
	    {
			mysqli_close($this->connection);
	    }
	}

	/**
	* 
	*/
	class UploadImage
	{
		
		public function upload_image($img_path,$img_name)
		{
			$target_dir = $img_path."/";
			$target_file = $target_dir . basename(uniqid().$_FILES[$img_name]["name"]);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			$supported_image = array(
				'png' => true, 
				'jpg' => true, 
				'jpeg' => true, 
				'gif' => true 
				);
			if(isset($supported_image[strtolower($imageFileType)]))
			{
		       if (move_uploaded_file($_FILES[$img_name]["tmp_name"], $target_file)) {
				       return $image = uniqid().$_FILES[$img_name]["name"];
		           } else {
		           		return $image = "";
		           }
		    } else {
		        echo "File is not an image.";
		    }
		}
	}
 ?>