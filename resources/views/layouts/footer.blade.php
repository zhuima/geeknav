
<script>
@php
$s = "var dummyData = {";
foreach($categories as $category){
	if(count($category->sites) != 0){
		$s=$s.'"'.md5($category->title).'":"';
		$icon=$category->icon;
			foreach ($category->sites as $site){
			$s=$s.'<label class=\"product\" onclick=\"window.open(\''.$site->url.'\', \'_blank\')\"><div class=\"foodicon\"><i class=\"fa fa-3x '.$icon.'\" id=\"d-'.$site->id.'\" data-d=\"'.$site->describe.'\"></i><br><br><span class=\"geekp\">'.$site->title.'</span></div></label>';
			}
		$s=$s.'",';
	}}
$s=substr($s,0,-1);
$s=$s."}";
echo $s;
@endphp
</script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/layui-layer@1.0.9/dist/layer.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/blueimp-md5@2.12.0/js/md5.min.js"></script>
	<script src="js/modernizr-custom.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
<?php date_default_timezone_set('Asia/Shanghai');$h=date("H");?>
<script>
@if (($h<=6)or($h>23))
	function tip(s,id,t,p){
		return i=layer.tips(s, "#"+id, {tips:[p, "#517b9b"],time:t,zindex:99999999999});
	}
@else
	function tip(s,id,t,p){
		return i=layer.tips(s, "#"+id, {tips:[p,"rgba(0,0,0,0.5)"],time:t,zindex:99999999999});
	}
@endif
	function tipx(i){
		layer.close(i);
	}
</script>
<script src="js/geek.js"></script>