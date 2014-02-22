<? # vim: noai:ts=2:sw=2

$x = range('1','10');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
