<?php

class DataFile {

	private $_fileName;
	
	function __construct($fileName) {
		$this->_fileName = $fileName;
	}
	
	public function read() {
		return file_get_contents('protected/data/'.$this->_fileName);
	}

}