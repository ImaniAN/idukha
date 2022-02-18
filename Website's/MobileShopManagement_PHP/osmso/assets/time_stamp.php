<?php
function time_ago($cur_time){
$time= time()-$cur_time;

$seconds= $time;
$minutes= round($time/60);
$hours= round($time/3600);
$days= round($time/86400);
$weeks= round($time/604800);
$months= round($time/2419200);
$years= round($time/29030400);
//seconds
	if($seconds<=60)
	{
		if($seconds==2)
		{
		$time="Today";
		}
		else
		{
	    $time="Today";
	     }
	}
	//minutes
	elseif($minutes<=60)
	{
		if($minutes==1)
		{
		$time="Today";
		}
		else
		{
		$time="Today";
		}
	}
	//hours
	elseif($hours<=24)
	{
		if($hours==1)
		{
		$time="Today";
		}
		else
		{
		$time="Today";
		}
	}
	//days
	elseif($days<=7)
	{
		if($days==1)
		{
		$time="Yesterday";
		}
		else
		{
		$time="Yesterday";
		}
	}
	//weeks
	elseif($weeks<=4)
	{
		if($weeks==1)
		{
		$time="$weeks week ago";
		}
		else
		{
		$time="$weeks weeks ago";
		}
	}
	//months
	elseif($months<=12)
	{
		if($months==1)
		{
		$time="$months month ago";
		}
		else
		{
		$time="$months months ago";
		}
	}
	//years
	else
	{
		if($years==1)
		{
		$time="$years year ago";
		}
		else
		{
		$time="$years years ago";
		}
	}
	return $time;
	}


	
	
	
?>