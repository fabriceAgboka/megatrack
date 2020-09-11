<?php 
	$now=DateTime::createFromFormat('U.u',microtime(true));
	$data= $now->format('d/m/Y H:i:s:u')." - ";
	foreach ( $_REQUEST as $key => $value )
	{
		$data .= " $key=$value /";
	}
	$data .="\n";
	file_put_contents('playload_'.$now->format('d_m_Y').'.txt',$data,FILE_APPEND);
	echo 'ok!';
?>
