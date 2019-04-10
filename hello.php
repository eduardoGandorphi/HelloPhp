<?php 

echo "Welcome <br>";
echo "to php<br>";
echo '<br><br>';

$name = 'Hello World';
$number = 10;
echo "$name number $number<br>";
echo '<br><br>';

//THIS IS A COMMENT
/*also
this is a
comment*/


echo "double quotes<br>";
echo 'simple quotes<br>';

$Word = 'world';

echo "test $Word<br>";
echo 'test $Word<br>';
echo 'test '.$Word.'!<br>';
echo '<br><br>';

echo '<a href="https://www.google.com">GOOGLE</a><br>';
echo '<br><br>';

echo 'quero um como d\'agua<br>';
echo '<br><br>';


echo  5 + 2 .'<br>';
echo  5 - 2 .'<br>';
echo  5 / 2 .'<br>';
echo  5 * 2 .'<br>';

$num = 5 + 2;
echo  $num . '<br>';
$num++;
echo  $num .'<br>';
$num--;
echo  $num .'<br>';
echo '<br><br>';


$inputed = 'test2';
if ($inputed == 'test'){
	echo 'yes';
} else if($inputed != 'no test'){
	echo '!= no test';
} else if($inputed >= 'test2'){
	echo 'no test2';
}else {
	echo 'no';
}
echo '<br><br>';



// == > >= < <= !=
// and or

$nome = 'edu';
$sobre = 'cinzento';

if($nome == 'edu' and $sobre == 'gand'){
	echo 'edu gand';
}else if($nome == 'edu' and $sobre == 'cinzento'){
	echo 'edu cinzento';
}
echo '<br><br>';



//$myArray $arrayName = array('' => , );
$myArray = array('joao','maria','jose');
echo $myArray[1];
echo '<br><br>';


$idades = array('joao' => 10,'maria'=>16,'jose'=>20);
echo $idades['jose'];
echo '<br><br>';


print_r($idades);
echo '<br><br>';

echo 'while<br>';
$count = 0;

while ($count < 5) {
	echo 'looping, @'.$count++.'<br>';
}
echo '<br><br>';
echo 'foreach<br>';
foreach ($myArray as $i) {
	echo 'looping, @'.$i.'<br>';
}
echo '<br><br>';



if( isset($_GET['nomeParam'])){
	$nomeParam = $_GET['nomeParam'];
	$anoParam = $_GET['anoParam'];
	echo $nomeParam.' '.$anoParam;
	echo '<br><br>';
}

if( isset($_POST['nomeParam'])){
	$nomeParam = $_POST['nomeParam'];
	$anoParam = $_POST['anoParam'];
	echo $nomeParam.' '.$anoParam;
	echo '<br><br>';
}

echo 'my func ';
function MinhaFuncao($valor){
  echo $valor;
}
MinhaFuncao('nome');
echo '<br><br>';


echo 'Plus function<br>';
function Plus($var1, $var2){
  echo 'answer is '. ($var1 + $var2);
}
Plus(3, 6);
echo '<br><br>';

echo date('d-m-y');
echo '<br>';
echo date('H-i-s');
echo '<br>';
echo date('l');
echo '<br><br>';

$frase = 'php não é ruim!';
$pices =  explode(' ',$frase);
foreach ($pices as $l) {
	echo 'looping: '.$l . '<br>';
}
echo '<br><br>';


$busca = strpos($frase, 'p');
if($busca === false)
	echo 'not found';
else
	echo $busca;

echo '<br><br>';
if( isset($_GET['param'])){
	echo 'tem parametro';	
}else{
	echo 'NÃO tem parametro';	
}


echo '<br><br>';
?>