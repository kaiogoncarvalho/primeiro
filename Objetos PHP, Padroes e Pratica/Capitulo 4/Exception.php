<?php

class Conf{
	private $arquivo;
	private $xml;
	private $lastmatch;
	
	public function __construct($file){
		$this->arquivo =  $file;
		if( ! file_exists($file)){
			throw new Exception("O arquivo '$file' não existe", 101);
		}
		$this->xml = simplexml_load_file($file);
	}
	
	public function write(){
		if(! is_writable($this->arquivo)){
			throw new Exception("O arquivo {$this->arquivo} não é alteravel");
		}
	}
}

try{
	$conf = new Conf('teste');
	$conf->write();
}catch(Exception $e){
	echo '<pre>';
	echo $e->getMessage()."\n";
	echo $e->getCode()."\n";
	print_r($e->getTrace());
	echo $e->getTraceAsString()."\n";
	echo $e;
	echo '</pre>';
}



