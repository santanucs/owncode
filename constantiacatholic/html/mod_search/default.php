<?php
// @version $Id: default.php 11215 2008-10-26 02:25:51Z ian $
defined('_JEXEC') or die('Restricted access');
?>

<form action="index.php"  method="post" class="search<?php echo $params->get('moduleclass_sfx'); ?>" name="searchform" id="searchform">
	<td>
	<?php
	$output = '<input name="searchword" style="border:2px solid #b3b3b3; height:22px; padding: 0px 0px 0px 0px; width:145px;" type="text" size="'.$width.'" value="'.$text.'"  onblur="if(this.value==\'\') this.value=\''.$text.'\';" onfocus="if(this.value==\''.$text.'\') this.value=\'\';" />
	';
	echo $output;
    ?>
    </td>
    <td>
    <input type="image" value=""  style="border:0px #0000FF solid; padding: 0px 0px 0px 0px;" src="templates/constantiacatholic/images/SearchButton.gif" onclick="javascript:document.searchform.submit();"/>
    </td>
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="task"   value="search" />
    <input type="hidden" name="Itemid" value="196" />
</form>


