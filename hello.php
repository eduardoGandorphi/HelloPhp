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


$inputed = 'test';
if ($inputed == 'test'){
	echo 'yes';
} else {
	echo 'no';
}
echo '<br>';
?>