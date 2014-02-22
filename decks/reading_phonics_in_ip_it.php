<? # vim: noai:ts=2:sw=2

$x = array('bin','din','fin','pin','sin','tin','win','chin','grin','skin','spin','thin','twin','dip','hip','lip','nip','pip','rip','sip','tip','zip','blip','chip','clip','drip','flip','grip','ship','slip','snip','stip','trip','whip','it','bit','fit','hit','lit','pit','sit','wit','zit','flit','grit','knit','quit','skit','slit','spit','split');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
