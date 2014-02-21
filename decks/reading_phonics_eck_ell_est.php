<? # vim: noai:ts=2:sw=2

$x = array(
	'eck' => array('b', 'd', 'h', 'n', 'p', 'ch', 'fl', 'sp', 'wr'),
	'ell' => array('b', 'c', 'd', 'f', 's', 't', 'w', 'y', 'dw', 'qu', 'sh', 'sm', 'sp', 'sw'),
	'est' => array('b', 'j', 'l', 'n', 'p', 'r', 't', 'v', 'w', 'z', 'ch', 'cr', 'gu', 'qu')
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
