<? # vim: noai:ts=2:sw=2

$x = array(
	'ale' => array('',  'b', 'd', 'g', 'h', 'm', 'p', 's', 't', 'sc', 'st', 'wh'),
	'ame' => array('c', 'd', 'f', 'g', 'l', 'n', 's', 't', 'bl', 'sh'),
	'ay'  => array('b', 'd', 'g', 'h', 'l', 'm', 'p', 'r', 's', 'w', 'y', 'aw', 'br', 'cl', 'gr', 'pl', 'pr', 'sl', 'st', 'sw', 'tr', 'spr')
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
