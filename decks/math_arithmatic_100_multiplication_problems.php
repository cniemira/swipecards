<? # vim: noai:ts=2:sw=2

$x = array();
foreach (range(1,10) as $i) {
	foreach (range(1,10) as $j) {
		array_push($x, sprintf("<section><section><h1>%d&times;%d</h1></section><section><h1>%d</h1></section></section>\n", $i, $j, $i*$j));
	}
}
shuffle($x);
foreach ($x as $z) {
	print $z;
}
