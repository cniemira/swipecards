<? # vim: noai:ts=2:sw=2

$x = array(
	'an' => array('',  'b', 'c', 'f', 'm', 'p', 'r', 't', 'v', 'br', 'cl', 'fl', 'sp', 'th'),
	'ap' => array('c', 'g', 'l', 'm', 'n', 'r', 's', 't', 'ch', 'cl', 'fl', 'sl'),
	'at' => array('',  'b', 'c', 'f', 'h', 'm', 'p', 'r', 's', 't', 'v', 'br', 'ch', 'dr', 'fl', 'gn', 'th')
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
