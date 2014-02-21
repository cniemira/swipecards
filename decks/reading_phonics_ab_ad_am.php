<? # vim: noai:ts=2:sw=2

$x = array(
	'ab' => array('c', 'd', 'g', 'j', 'l', 'n', 't', 'bl', 'cr', 'fl', 'gr', 'sc', 'sl', 'st'),
	'ad' => array('b', 'c', 'd', 'f', 'h', 'l', 'm', 'p', 's', 't', 'cl', 'gl', 'gr'),
	'am' => array('',  'd', 'h', 'j', 'r', 'y', 'cl', 'cr', 'ex', 'gr', 'sc', 'sh', 'sl', 'sw', 'tr', 'scr'),
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
