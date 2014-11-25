<?php
defined('_JEXEC') or die('Restricted access');

function getTourTypeInHtml($parentId)
{
	$sqlQueryMenuDetails = 'SELECT * FROM jos_menu WHERE parent = '.$parentId ;
	$resMenuDetails = mysql_query($sqlQueryMenuDetails) or die(mysql_error().$sqlQueryMenuDetails);
	$rcdMenuDetails = mysql_fetch_object($resMenuDetails);
	//print_r($rcdMenuDetails);
	$rcdOut = "";
	$rcdOut = "<div class=\"menu1\" style=\"align:right;width:900px;\">
			<ul class=\"menu\">";
	foreach ($rcdMenuDetails as $item) 
	{
		//echo 'Sub:'.$item->sublevel ;
		$rcdOut.='<li><a href="'.JRoute::_($item->link).'" ><span style="font-weight: bold; color: #d8c24e;">'.htmlspecialchars($item->name).'</span></a>';
		$rcdOut.="</li>" ;
	}
	$rcdOut.="</ul></div>";
	echo $rcdOut ;
	return $rcdOut ;
	
}

$footerMenu = getTourTypeInHtml(0);
echo $footerMenu ;


?>

<!--



echo "<div class=\"menu1\" style=\"align:right;width:900px;\">
		<ul class=\"menu\">";
$menu = &JSite::getMenu();
$items = $menu->getItems('menutype',$params->get('menutype'));
//print_r($items );
foreach ($items as $item) 
{
	//echo 'Sub:'.$item->sublevel ;
	if($item->sublevel == 0)
	{
		echo '<li><a href="'.JRoute::_($item->link).'" ><span style="font-weight: bold; color: #d8c24e;">'.htmlspecialchars($item->name).'</span></a>';
	}
	echo "</li>" ;
}
echo "</ul></div>";




<div class="menu1">
    <ul class="menu">
        <li><a href="#"><span style="font-weight: bold; color: #d8c24e;">Calendar</span></a>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Father Andrew</a></li>
                <li><a href="#">Parish Officers</a></li>
                <li><a href="#">Parish History</a></li>
            </ul>
        </li>
    </ul>
</div>-->