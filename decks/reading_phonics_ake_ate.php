<? # vim: noai:ts=2:sw=2

$x = array(
	'ake' => array('b', 'c', 'f', 'l', 'm', 'r', 't', 'w', 'br', 'dr', 'qu', 'sh', 'sn', 'st'),
	'ate' => array('',  'd', 'f', 'g', 'h', 'l', 'm', 'r', 'gr', 'pl', 'sk', 'sl', 'st')
);

$words = array();
foreach (array_keys($x) as $i) {
  foreach ($x[$i] as $j) {
		array_push($words, sprintf("<section><h1>%s%s</h1></section>\n", $j, $i));
  }
}
shuffle($words);
foreach ($words as $word)
	print $word;
