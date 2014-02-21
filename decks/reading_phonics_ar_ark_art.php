<? # vim: noai:ts=2:sw=2

$x = array(
	'ar'  => array('b', 'c', 'f', 'j', 'p', 't', 'ch', 'sc', 'sp', 'st'),
	'ark' => array('',  'b', 'd', 'h', 'l', 'm', 'p', 'sh', 'sp', 'st'),
	'art' => array('',  'c', 'd', 'm', 'p', 't', 'ch', 'sm', 'st')
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
