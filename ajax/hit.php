<?php

if (isset($_POST['language'])) {
	# code...
$string = $_POST['language'];

$t = array('e','E');
$f = array('a','A');

$string = str_replace($t, $f, $string);

$target_words = array('i' , 'I' , 'j' , 'J','h','H','v','V' ,'u','U');
$fill_up      = array('e','E','g' ,'G','','','b','B','o','O');


$gone = str_replace($target_words,$fill_up, $string);


	$an_tr = array('cok');
	$an_fil= array('cock');

	$gone = str_replace($an_tr, $an_fil, $gone);

echo 'Translated Takla language:';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h2>';
echo $gone;
echo '</h2>';
echo '<br>';
echo '<br>';
echo '<br>';


}

?>