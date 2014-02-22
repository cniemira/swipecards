<? # vim: noai:ts=2:sw=2

$x = array();
foreach (range(1,10) as $i) {
	foreach (range(1,10) as $j) {
		array_push($x, sprintf("<section class='random'><h1>%d+%d</h1></section>\n", $i, $j));
	}
}
foreach ($x as $z) {
	print $z;
}
