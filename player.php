<?php
	$html = implode('', file('http://www.shoutcast.com/Internet-Radio/CocaineRadio'));
	$loc = strrpos($html,'a href="http://yp.shoutcast.com/sbin/tunein-station.pls?id=');
	$loc2 = strrpos($html, '" title="CocaineRadio"');
	$loc = $loc+59;
	$len = $loc2-$loc;
	$playerLoc = substr($html,$loc,$len);
	$loc = strrpos($playerLoc,'" title="');
	$playerLoc = substr($playerLoc,0,$loc);
	//echo $playerLoc;
	
	$str = "<embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=".$playerLoc."&play_status=1' quality='high' bgcolor='#ffffff' width='600' height='104' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>" ;
	echo $str;
?>