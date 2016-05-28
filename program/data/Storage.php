<?

	function __construct($store_method,$domain = ''){
		switch($store_method){
			case 'EmeSaeStorage':
				return new EmeSaeStorage($domain);
			case 'EmeOSS':
				return new EmeOSS($domain);
			case 'EmeIOOperation':
				return new EmeIOOperation();
			default:
				return null;
		}
	}



	function __construct($domain){
		$this->domain = $domain;
		$this->storage = new SaeStorage();
	}

	function upload($srcFileName,$destFileName){
		$attr = array('encoding'=>'gzip');
		return $this->storage->upload($this->domain,$destFileName, $srcFileName, $attr, true);
	}

	function write($content,$file_path){
		return $this->storage->write($this->domain,$file_path,$content);
	}

	function upload($srcFileName,$destFileName){
		if(move_uploaded_file($srcFileName,$destFileName)){
			return $destFileName;
		}else{
			return false;
		}
	}

	function write($content,$file_path){
		$file = fopen($file_path,"w");
		fwrite($file,$content);
		fclose($file);
		return $file_path;
	}

?>
