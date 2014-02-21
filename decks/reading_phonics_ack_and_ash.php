<? # vim: noai:ts=2:sw=2

$x = array(
	'ack' => array('b', 'h', 'j', 'l', 'p', 'r', 's', 'bl', 'cr', 'fl', 'kn', 'qu', 'sh', 'sl', 'sn', 'st', 'tr', 'wh'),
	'and' => array('b', 'h', 'l', 's', 'bl', 'br', 'gl', 'gr', 'st', 'dem', 'exp', 'str'),
	'ash' => array('b', 'c', 'd', 'g', 'h', 'l', 'm', 'r', 's', 'br', 'cl', 'cr', 'fl', 'gn', 'sl', 'sm', 'sp', 'st', 'tr'),
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
