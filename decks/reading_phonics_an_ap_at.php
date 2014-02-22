<? # vim: noai:ts=2:sw=2

$x = array('an','ban','can','fan','man','pan','ran','tan','van','bran','clan','flan','span','than','cap','gap','lap','map','nap','rap','sap','tap','chap','clap','flap','slap','at','bat','cat','fat','hat','mat','pat','rat','sat','tat','vat','brat','chat','drat','flat','gnat','that');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
