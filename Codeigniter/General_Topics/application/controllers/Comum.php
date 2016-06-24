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
		echo '<br>';
		echo '<b>password_get_info($password, $algo, [,$options])</b> <br>';
		var_dump(password_get_info($hash));
		echo '<br>';
		echo '<b>password_needs_rehash($hash, $algo, [,$options])</b> <br>';
		echo (password_needs_rehash($hash, PASSWORD_DEFAULT)) ? 'Aceita rehash' : 'Não aceita rehash';
		echo '<br>';
		echo '<b>password_verify($password, $hash) </b> <br>';
		echo (password_verify($senha, $hash)) ? "Hash combina com a senha" : "Hash não combina com a senha";		
	}
	
	public function hashing($first = 'padrao', $second = 'padrao'){
		echo '<b> hash_equals($known_string, $user_string) </b> <br>';
		echo (hash_equals(crypt($first,'$2a$07$usesomesillystringforsalt$' ),crypt($second,'$2a$07$usesomesillystringforsalt$' ))) ? 'Senhas iguais' : 'Senhas diferentes';
		
	}
	
	public function mb_string($str = 'Kaio Gonçalves Carvalho'){
		echo "Palavra: $str <br>";
		echo '<b> mb_strlen($str [, $encoding = NULL]) </b> <br>';
		echo mb_strlen($str);
		echo '<br>';
		echo '<b> mb_strpos($str, $start [,offset = 0[, encoding = NULL]]) </b> <br>';
		echo '"lves" começa na posição '.mb_strpos($str, 'lves');
		echo '<br>';
		echo '<b> mb_substr($str, $start [, $length = NULL [, $encoding = NULL ]]) </b> <br>';
		echo 'começando na posição 5 com tamanho 5 temos: '. mb_substr($str, 5 , 5);		
	}
	
	public function standard_functions(){
		$array = array(
			array(
				'id' => '522',
				'fruta' => 'Maça', 
			),
			array(
				'id' => '523',
				'fruta' => 'Melancia', 
			),
			array(
				'id' => '524',
				'fruta' => 'Uva', 
			),
			array(
				'id' => '525',
				'fruta' => 'Pera', 
			),
		);
		echo '<b> array_column(array $array, $column_key [, $index_key = NULL]) </b> <br>';
		echo var_dump(array_column($array, 'fruta', 'id'));
		echo '<br>';
		echo '<b> array_replace(array $array1 [...]) </b> <br>';
		$array1 = array('Uva', 'Umbu', 'Jaboticaba');
		$replace = array(1 => 'Morango', 0 => 'Mexerica');
		$replace2 = array(0 => 'Laranja');
		echo var_dump(array_replace($array1, $replace, $replace2));
		echo '<br>';
		echo '<b> array_replace_recursive(array $array1 [...]) </b> <br>';
		$array2 = array('Citrus' => array('Laranja', 'Maracuja', 'Maça Verde'));
		$array3 = array('Citrus' => array('Coca-cola'));
		echo var_dump(array_replace_recursive($array2, $array3));
		echo '<br>';
		echo '<b> bin2hex($data) </b> <br>';
		$teste = 'Kaio';
		$hexa = bin2hex($teste);
		echo $hexa;
		echo '<br>';
		echo '<b> hex2bin($data) </b> <br>';
		$hex = hex2bin($hexa);
		var_dump($hex);
		echo "<br>";
		echo '<b> quoted_printable_encode($str) </b> <br>';
		echo quoted_printable_encode('Kaio');
		
		
		
	}
	
	
}