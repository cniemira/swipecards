<? # vim: noai:ts=2:sw=2

$x = array();
foreach (range('1','20') as $i) {
	$x[] = rand('1000', '10000');
}

shuffle($x);
foreach ($x as $i) {
	printf("<section><h1>%s</h1></section>\n", $i);
}
