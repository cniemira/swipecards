<? # vim: noai:ts=2:sw=2

$x = array('bail','fail','hail','jail','mail','nail','pail','rail','sail','brail','frail','quail','snail','trail','gain','main','pain','rain','vain','brain','chain','drain','plain','stain','train','strain','air','fair','hair','lair','pair','chair','stair');

foreach ($x as $i) {
  printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
