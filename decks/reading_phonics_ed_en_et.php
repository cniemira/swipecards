<? # vim: noai:ts=2:sw=2

$x = array(
	'ed' => array('b', 'f', 'l', 'r', 'w', 'bl', 'fl', 'pl', 'sh', 'sl', 'sp', 'shr'),
	'en' => array('d', 'h', 'm', 'p', 't', 'y', 'gl', 'th', 'wh', 'wr'),
	'et' => array('b', 'g', 'j', 'l', 'm', 'n', 'p', 's', 'v', 'w', 'y', 'fr')
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
