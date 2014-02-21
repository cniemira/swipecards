<? # vim: noai:ts=2:sw=2

$x = range('a','z');

shuffle($x);
foreach ($x as $i) {
	printf("<section><h1>%s</h1></section>\n", $i);
}
