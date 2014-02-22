<? # vim: noai:ts=2:sw=2

$x = array('bake','cake','fake','lake','make','rake','take','wake','brake','drake','quake','shake','snake','stake','ate','date','fate','gate','hate','late','mate','rate','grate','plate','skate','slate','state');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
