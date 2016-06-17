<?php

class Comum extends CI_Controller{
	public function is_php($version = 7.0){
		$function = __FUNCTION__;
		echo '<b> '.$function.'($version) </b> <br>';
		if(is_php($version)){
			echo "Essa versão do php é maior ou igual a $version";
		}
		else{
			echo "essa versão do php é menor que a $version";
		}
	}
	
	public function is_really_writable($file = 'Welcome'){
		$function = __FUNCTION__;
		echo '<b> '.$function.'($file) </b> <br>';
		$file = 'application/controller/'.$file.'.php';
		if(is_really_writable($file)){
			echo "O arquivo $file aceita escrita";
		}else{
			echo "O arquivo $file não aceita escrita";
		}
	}
	
	public function html_escape(){
		$function = __FUNCTION__;
	    echo '<b> '.$function.'($string) </b> <br>';
		$string = '<br>';
		echo html_escape($string);
		
	}
	
	public function config_item($key = 'url'){
		$function = __FUNCTION__;
	    echo '<b> '.$function.'($key) </b> <br>';
		echo config_item($key);		
	}
	

	
	public function remove_invisible_characters($str = "Java\\0script", $url_encoded=TRUE){
		$function = __FUNCTION__;
		echo '<b> '.$function.'($str[,$url_encoded=TRUE]) </b> <br>';
		echo remove_invisible_characters($str,$url_encoded);
	}
	
	public function get_mimes(){
		$function = __FUNCTION__;
	    echo '<b> '.$function.'() </b> <br>';
		var_dump(get_mimes());
	}

	public function set_status_header($code = '401', $msg = 'Pagina não encontrada'){
		set_status_header($code, $msg);
	}
	
	public function is_https(){
		$function = __FUNCTION__;
	    echo '<b>'.$function.'()</b> <br>';
		echo (is_https()) ? 'TRUE' : 'FALSE';	
	}
	
	public function is_cli(){
		$function = __FUNCTION__;
	    echo '<b>'.$function.'()</b> <br>';
		echo (is_cli()) ? 'Está rodando em CLI' : 'Não está rodando em CLI';
	}
	
	public function function_usable($funcao = 'is_cli'){
		$function = __FUNCTION__;
	    echo '<b>'.$function.'($function)</b> <br>';
		echo "A função $funcao ";
		echo (function_usable($funcao)) ? 'existe e pode ser utilizada' : 'não existe ou não pode ser utilizada';
	}
	
	public function password_hashing($senha = 'kaiocarvalho'){
		echo '<b>password_hash($password, $algo, [,$options])</b> <br>';
		$hash = password_hash($senha , PASSWORD_BCRYPT);
		echo $hash;
		var_dump(password_get_info($hash));
	}
}