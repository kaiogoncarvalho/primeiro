<?php

class XmlException extends Exception{
	private $error;
	
	public function __construct(LibXmlError $error){
		$shortfile = basename($error->file);
		$msg = "[{$shortfile}, line {$error->line}, col {$error->col}]";
		$this->error = $error;
		parent::__construct($msg, $error->code);
	}
	
	public function getLibXmlError(){
		return $this->error;
	}
	
}

class FileException extends Exception{}

class ConfException extends Exception{}

class Conf{
	private $file;
	private $xml;
	private $lastmatch;
	
	public function __construct($file){
		$this->file = $file;
		if(! file_exists($file)){
			throw new FileException("File '$file' does not exists");
		}
		$this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);
		if(! is_object($this->xml)){
			throw new XmlException(libxml_get_last_error());
		}
		print gettype($this->xml);
		$matches = $this->xml->xpath("/conf");
		if(!count($matches)){
			throw new ConfException('Could not find root element: conf');
		}
		
	}
	
	public function write(){
		if(!is_writable($this->file)){
			throw new FileException("File '{$this->file}' does not writable");
		}
		file_put_contents($this->file, $this->xml->asXML());
	}
}

class Runner{
	static function init(){
		try{
			$conf = new Conf(dirname(__FILE__)."\\conf01.xml");
			$conf->write();
		}catch (FileException $e){
			echo $e->getMessage();
		}catch(XmlException $e){
			echo $e->getMessage();
		}catch (ConfException $e){
			echo $e->getMessage();
		}catch(Exception $e){
			echo $e->getMessage();
		}
	}
}

Runner::init();