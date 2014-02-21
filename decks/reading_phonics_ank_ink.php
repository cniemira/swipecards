<? # vim: noai:ts=2:sw=2

$x = array(
	'ank' => array('b', 'd', 'l', 'r', 't', 'y', 'bl', 'ch', 'cr', 'dr', 'fl', 'fr', 'pr', 'sp', 'th', 'shr'),
	'ink' => array('',  'l', 'm', 'r', 's', 'w', 'bl', 'br', 'cl', 'dr', 'sl', 'st', 'th', 'shr')
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
