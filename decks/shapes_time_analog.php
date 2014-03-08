<link rel="stylesheet" href="<?=BASE_URL?>static/analog_clock.css">
<section>
  <h1 id="0_num" style="color: #807A71; font-family: Arial; font-weight: bold; font-size: 24px; cursor: pointer;">No numbers</h1>
  <h1 id="r_num" style="color: #807A71; font-family: Arial; font-weight: bold; font-size: 24px; cursor: pointer;">Roman numerals</h1>
  <h1 id="n_num" style="color: #807A71; font-family: Arial; font-weight: bold; font-size: 24px; text-decoration: underline;">Natural numbers</h1>
<script>
$('#0_num').bind('click', function(){
	$(this).css('cursor', 'default').css('text-decoration', 'underline');
	$('#n_num').css('cursor', 'pointer').css('text-decoration', 'none');
	$('#r_num').css('cursor', 'pointer').css('text-decoration', 'none');
	$('.digits').hide();
	$('.roman').hide();
});
$('#n_num').bind('click', function(){
	$(this).css('cursor', 'default').css('text-decoration', 'underline');
	$('#0_num').css('cursor', 'pointer').css('text-decoration', 'none');
	$('#r_num').css('cursor', 'pointer').css('text-decoration', 'none');
	$('.digits').show();
	$('.roman').hide();
});
$('#r_num').bind('click', function(){
	$(this).css('cursor', 'default').css('text-decoration', 'underline');
	$('#0_num').css('cursor', 'pointer').css('text-decoration', 'none');
	$('#n_num').css('cursor', 'pointer').css('text-decoration', 'none');
	$('.digits').hide();
	$('.roman').show();
});
</script>
</section>
<? # vim: noai:ts=2:sw=2
foreach (range(0,11) as $hour) {
	foreach (range(0,11) as $min) {
		$h = $hour * 30 + $min * 2; $m = $min * 30;
		printf("<section class='random'><center><div class='clock'><div class='clock_frame'><div class='clock_face'>
<div class='digits numerals hashes'><div><div><span>12</span></div></div><div><div><span>1</span></div></div><div><div><span>2</span></div></div><div><div><span>3</span></div></div><div><div><span>4</span></div></div><div><div><span>5</span></div></div><div><div><span>6</span></div></div><div><div><span>7</span></div></div><div><div><span>8</span></div></div><div><div><span>9</span></div></div><div><div><span>10</span></div></div><div><div><span>11</span></div></div></div>
<div class='roman numerals hashes'><div><div><span>XII</span></div></div><div><div><span></span></div></div><div><div><span></span></div></div><div><div><span>III</span></div></div><div><div><span></span></div></div><div><div><span></span></div></div><div><div><span>VI</span></div></div><div><div><span></span></div></div><div><div><span></span></div></div><div><div><span>IX</span></div></div><div><div><span></span></div></div><div><div><span></span></div></div></div>
<div class='marks hashes'><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div><div><div>&nbsp;</div></div></div>
<div class='hand' style='transform:rotate(%ddeg); -ms-transform:rotate(%ddeg); -webkit-transform:rotate(%ddeg);'><div class='hour'>&nbsp;</div></div>
<div class='hand' style='transform:rotate(%ddeg); -ms-transform:rotate(%ddeg); -webkit-transform:rotate(%ddeg);'><div class='minute'>&nbsp;</div></div>
</div></div></div></center></section>\n", $h, $h, $h, $m, $m, $m);
	}
}

