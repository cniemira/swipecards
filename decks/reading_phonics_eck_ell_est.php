<? # vim: noai:ts=2:sw=2

$x = array('beck','deck','heck','neck','peck','check','fleck','speck','wreck','bell','cell','dell','fell','sell','tell','well','yell','dwell','quell','shell','smell','spell','swell','best','jest','lest','nest','pest','rest','test','vest','west','zest','chest','crest','guest','quest');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
