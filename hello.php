<?php 

echo "Welcome <br>";
echo "to php<br>";

$name = 'Hello World';
$number = 10;
echo "$name number $number<br>";

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

echo '<a href="https://www.google.com">GOOGLE</a><br>';

echo 'quero um como d\'agua<br>';

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
echo '<br>';


// == > >= < <= !=
// and or

$nome = 'edu';
$sobre = 'cinzento';

if($nome == 'edu' and $sobre == 'gand'){
	echo 'edu gand';
}else if($nome == 'edu' and $sobre == 'cinzento'){
	echo 'edu cinzento';
}
echo '<br>';


//$myArray $arrayName = array('' => , );
$myArray = array('joao','maria','jose');
echo $myArray[1];
echo '<br>';

$idades = array('joao' => 10,'maria'=>16,'jose'=>20);
echo $idades['jose'];
echo '<br>';

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


echo '<br><br>';
?>