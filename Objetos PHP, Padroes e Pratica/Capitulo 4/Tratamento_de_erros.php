<?php
class Conf{
	private $file;
	private $xml;
	private $lastmatch;
	
	public function __construct($file){
		$this->file = $file;
		$this->xml = simplexml_load_file($file);
	}
	
	public function write(){
		file_put_contents($this->file, $this->xml->asXML());
	}
	
	public function get($str){
		$matches = $this->xml->xpath("/conf/item[@name= \"$str\"]");
		if(count($matches)){
			$this->lastmatch = $matches[0];
			return (string)$matches[0];
		}
		return null;
	}
	
	public function set($key,$value){
		if(!is_null($this->get($key))){
			$this->lastmatch[0] = $value;
		}
		$conf = $this->xml->conf;
		$this->xml->addChild('item', $value)->addAttribute('name', $key);
	}
}

$conf = new Conf('conf02.xml');
echo $conf->get('user');
$conf->set('pass', 'NovoPass');
$conf->write();