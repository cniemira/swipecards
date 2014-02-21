<? # vim: noai:ts=2:sw=2

$x = array(
	'in' => array('b', 'd', 'f', 'p', 's', 't', 'w', 'ch', 'gr', 'sk', 'sp', 'th', 'tw'),
	'ip' => array('d', 'h', 'l', 'n', 'p', 'r', 's', 't', 'z', 'bl', 'ch', 'cl', 'dr', 'fl', 'gr', 'sh', 'sl', 'sn', 'st', 'tr', 'wh'),
	'it' => array('',  'b', 'f', 'h', 'l', 'p', 's', 'w', 'z', 'fl', 'gr', 'kn', 'qu', 'sk', 'sl', 'sp', 'spl')
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
