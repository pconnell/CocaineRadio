<?php
	$html = file_get_contents('http://www.shoutcast.com/Internet-Radio/CocaineRadio');
	$pattern = '/id="[0-9]*" title="CocaineRadio"/';
	$match = array();
	preg_match($pattern,$html,&$match);
	$id = $match[0];
	$str = '';
	if ($id != ''){
		$patt = '/"[0-9]*/';
		$mat = array();
		preg_match($patt,$id,$mat);
		$id = $mat[0];
		$id = substr($id,1);
		//echo $id
		$str = "<embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=".$id."&play_status=1' quality='high' bgcolor='#ffffff' width='600' height='104' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>" ;
	}else{
		$str = "<em>We're sorry, but the stream is currently unavailable.</em>";
	}
	echo $str;
?>