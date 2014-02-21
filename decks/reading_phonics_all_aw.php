<? # vim: noai:ts=2:sw=2

$x = array(
	'all' => array('',  'b', 'c', 'f', 'g', 'h', 'm', 't', 'w', 'sm', 'st', 'thr'),
	'aw' => array('c', 'j', 'l', 'm', 'p', 'r', 's', 'cl', 'dr', 'fl', 'gn', 'th', 'str')
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
