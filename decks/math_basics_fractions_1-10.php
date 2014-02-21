<? # vim: noai:ts=2:sw=2
?>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=UnifrakturMaguntia"></link>
<link rel="stylesheet" href="<?=BASE_URL?>/mathscribe/jqmath-0.4.0.css"></link>
<script src="<?=BASE_URL?>/mathscribe/jquery-1.4.3.min.js"></script>
<script src="<?=BASE_URL?>/mathscribe/jqmath-etc-0.4.0.min.js"></script>
<?
$x = array();

foreach (range('2', '10') as $i) {
	foreach (range('1', $i-1) as $j) {
		$x[] = sprintf('$$%d/%d$$', $j, $i);
	}
}

shuffle($x);
foreach ($x as $i) {
	printf("<section><h1>%s</h1></section>\n", $i);
}
