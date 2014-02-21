<? # vim: noai:ts=2:sw=2

$x = array(
	'ail' => array('b', 'f', 'h', 'j', 'm', 'n', 'p', 'r', 's', 'br', 'fr', 'qu', 'sn', 'tr'),
	'ain' => array('g', 'm', 'p', 'r', 'v', 'br', 'ch', 'dr', 'pl', 'st', 'tr', 'str'),
	'air' => array('',  'f', 'h', 'l', 'p', 'ch', 'st'),
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
