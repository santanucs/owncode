<?php
/*------------------------------------------------------------------------
# JA Mageia for Joomla 1.5 - Version 1.4 - Licence Owner JA128467
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/

class JA_Tools {
    var $_tpl = null;
    var $ja_color = '';
    var $ja_width = '';
    var $ja_font_size = '';
    var $ja_color_themes = null;
    var $ja_menutype = 1;
    var $ja_tool = 1;
    var $template = '';

    function JA_Tools ($template) {
        $this->_tpl = $template;
        $this->template = $template->template;
        $this->ja_color = $this->_tpl->params->get('ColorCSS');
        $this->ja_width = $this->_tpl->params->get('ScreenType');
        $this->ja_font_size = $this->_tpl->params->get('FontSize');
        $this->ja_tool = $this->_tpl->params->get('usertool');
        $this->ja_menutype = $this->_tpl->params->get('MenuType') ;
        $this->ja_color_themes = $this->_tpl->ja_color_themes;
    }
    function getUserSetting(){
        
        if (isset($_COOKIE['JATheme']) && $_COOKIE['JATheme'] == $this->_tpl->template){
            $this->ja_width = $_COOKIE['ScreenType'];
            if (($this->ja_tool & 2) && isset($_COOKIE['FontSize'])){
                $this->ja_font_size = $_COOKIE['FontSize'];
            }
            if (($this->ja_tool & 4) && isset($_COOKIE['ColorCSS']) && $_COOKIE['ColorCSS']){
                $this->ja_color = $_COOKIE['ColorCSS'];
            }
            if (isset($_GET['MenuType'])){
                $this->ja_menutype = $_GET['MenuType'];
                setcookie ('MenuType', $this->ja_menutype, null, '/');
            }else{
                if (($this->ja_tool & 4) && isset($_COOKIE['MenuType']) && $_COOKIE['MenuType']){
                    $this->ja_menutype = $_COOKIE['MenuType'];
                }
            }
        }else{
            $exp = time() + 60*60*24*355;
            setcookie ('JATheme', $this->_tpl->template, $exp, '/');
            setcookie ('ColorCSS', $this->ja_color, $exp, '/');
            setcookie ('ScreenType', $this->ja_width, $exp, '/');
            setcookie ('FontSize', $this->ja_font_size, $exp, '/');
        }
        
        return $this;
    }

    function getCurrentURL(){
        $cururl = JRequest::getURI();
        if(($pos = strpos($cururl, "index.php"))!== false){
            $cururl = substr($cururl,$pos);
        }
        $cururl =  JRoute::_($cururl, true, 0);
        return $cururl;
    }

function genMenuHead()
 {
   $html = "";
   if ($this->ja_menutype== '1')
    {
      $html = '<link href="templates/'.$this->_tpl->template.'/ja_menus/ja_splitmenu/ja-splitmenu.css" rel="stylesheet" type="text/css" />';
    }
   else if ($this->ja_menutype== '2')
    {
      $html = '<link href="templates/'.$this->_tpl->template.'/ja_menus/ja_cssmenu/ja-sosdmenu.css" rel="stylesheet" type="text/css" />
      <script language="javascript" type="text/javascript" src="templates/'.$this->_tpl->template.'/ja_menus/ja_cssmenu/ja.cssmenu.js"></script>';
    }
   else if ($this->ja_menutype== '3')
    {
      $html = '<link href="templates/'.$this->_tpl->template.'/ja_menus/ja_transmenu/ja-transmenuh.css" rel="stylesheet" type="text/css" />
      <script language="javascript" type="text/javascript" src="templates/'.$this->_tpl->template.'/ja_menus/ja_transmenu/ja-transmenu.js"></script>';
    }
   else if ($this->ja_menutype == 4)
    {
      $html = '<link href="templates/'.$this->_tpl->template.'/ja_menus/ja_cssmenu/ja-sosdmenu.css" rel="stylesheet" type="text/css" />
      <script language="javascript" type="text/javascript" src="templates/'.$this->_tpl->template.'/ja_menus/ja_cssmenu/mootools.v1.1.js"></script>
      <script language="javascript" type="text/javascript" src="templates/'.$this->_tpl->template.'/ja_menus/ja_cssmenu/ja.cssmenu.js"></script>';
    }
   if ($this->ja_tool)
    {
      ?>
      <script type="text/javascript">
        var currentFontSize = <?php echo $this->ja_font_size; ?>;
      </script>
      <?php
    }
   echo $html;

 }

    function genToolMenu($jatool){
        if ($jatool & 1){//show screen tools
            ?>
            <ul class="ja-usertools-res">
            <li><img style="cursor: pointer;" title="Narrow screen" src="templates/<?php echo $this->_tpl->template;?>/images/user-screen1<?php echo ( ($this->ja_width=="narrow") ? "-hilite" : "" ) ?>.png" alt="Narrow screen resolution" id="ja-tool-narrow" onclick="changeToolHilite(curtool, this);curtool=this;setScreenType('narrow');" /></li>
            <li><img style="cursor: pointer;" title="Wide screen" src="templates/<?php echo $this->_tpl->template;?>/images/user-screen2<?php echo ( ($this->ja_width=="wide") ? "-hilite" : "" ) ?>.png" alt="Wide screen resolution" id="ja-tool-wide" onclick="changeToolHilite(curtool, this);curtool=this;setScreenType('wide');" /></li>
            </ul>
    <?php }
        if ($jatool & 2){//show font tools
    ?>
            <ul class="ja-usertools-font">
         
            <li><img style="cursor: pointer;" title="Decrease font size" src="templates/<?php echo $this->_tpl->template;?>/images/user-decrease.png" alt="Decrease font size" id="ja-tool-decrease" onclick="changeFontSize(-1); return false;" /></li>
            <li><img style="cursor: pointer;" title="Default size" src="templates/<?php echo $this->_tpl->template;?>/images/user-reset.png" alt="Default font size" id="ja-tool-reset" onclick="revertStyles(<?php echo $this->_tpl->params->get('FontSize');?>); return false;" /></li>
            <li><img style="cursor: pointer;" title="Increase font size" src="templates/<?php echo $this->_tpl->template;?>/images/user-increase.png" alt="Increase font size" id="ja-tool-increase" onclick="changeFontSize(1); return false;" /></li>
            </ul>
            <?php
        }
        if ($jatool & 4){//show color tools
            ?>
            <ul class="ja-usertools-color">
        <?php
        foreach ($this->ja_color_themes as $this->ja_color_theme) {
        ?>
            <li><img style="cursor: pointer;" src="templates/<?php echo $this->_tpl->template;?>/images/<?php echo $this->ja_color_theme;?><?php echo ( ($this->ja_color==$this->ja_color_theme) ? "-hilite" : "" ) ?>.gif" title="<?php echo $this->ja_color_theme;?> color" alt="<?php echo $this->ja_color_theme;?> color" id="ja-tool-<?php echo $this->ja_color_theme;?>color" onclick="setActiveStyleSheet('<?php echo $this->ja_color_theme;?>');return false;" /></li>
        <?php
        }
        ?>
        </ul>
        <?php
        }
        ?>
        <script type="text/javascript">
        var curtool = document.getElementById('<?php echo "ja-tool-$this->ja_width"; ?>');
        var curcolor = document.getElementById('<?php echo ( ($this->ja_color=="") ? "ja-tool-defaultcolor" : "ja-tool-{$this->ja_color}color" ) ?>');
        </script>
        <?php
    }

function getCurrentMenuIndex()
 {
   //Get top menu id;
   global $Itemid;
   $database       =& JFactory::getDBO();
   $id = $Itemid;
   $menutype = 'mainmenu';
   $ordering = '0';
   while (1)
    {
      $sql = "select parent, menutype, ordering from #__menu where id = $id limit 1";
      $database->setQuery($sql);
      //echo $database->getQuery($sql);
      $row = null;
      $row = $database->loadObject();
      if ($row)
       {
         $menutype = $row->menutype;
         $ordering = $row->ordering;
         if ($row->parent > 0)
          {
            $id = $row->parent;
          }
         else
           break;
       }
      else
        break;
    }
   $user   =& JFactory::getUser();
   if (isset($user))
    {
      $aid = $user->get('aid', 0);
      $sql = "SELECT count(*) FROM #__menu AS m"
      . "\nWHERE menutype='". $menutype ."' AND published='1' AND access <= '$aid' AND parent=0 and ordering < $ordering";
    }
   else
    {
      $sql = "SELECT count(*) FROM #__menu AS m"
      . "\nWHERE menutype='". $menutype ."' AND published='1' AND parent=0 and ordering < $ordering";
    }
   $database->setQuery($sql);
   return $database->loadResult();
 }

function genToolMenu_ie6($jatool){
    global $ja_template_path,$ja_font_size_default, $ja_font_size, $ja_color_themes, $ja_width, $ja_color;
    if ($jatool & 1){//show screen tools
        ?>
        <ul class="ja-usertools-res">
        <li><img style="cursor: pointer;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='templates/<?php echo $this->_tpl->template;?>/images/user-screen1<?php echo ( ($ja_width=="narrow") ? "-hilite" : "" ) ?>.png',sizingMethod='scale');" width=14 height=14 title="Narrow screen" src="templates/<?php echo $this->_tpl->template;?>/images/blank.png" alt="Narrow screen resolution" id="ja-tool-narrow" onclick="changeToolHilite(curtool, this);curtool=this;setScreenType('narrow');return false;" /></li>
        <li><img style="cursor: pointer;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='templates/<?php echo $this->_tpl->template;?>/images/user-screen2<?php echo ( ($ja_width=="wide") ? "-hilite" : "" ) ?>.png',sizingMethod='scale');" width=14 height=14 title="Wide screen" src="templates/<?php echo $this->_tpl->template;?>/images/blank.png" alt="Wide screen resolution" id="ja-tool-wide" onclick="changeToolHilite(curtool, this);curtool=this;setScreenType('wide');return false;" /></li>
        </ul>
    <script type="text/javascript">
    var curtool = document.getElementById('<?php echo "ja-tool-$ja_width"; ?>');
    </script>
<?php } 
    if ($jatool & 2){//show font tools
?>
        <ul class="ja-usertools-font">
        <li><img width=14 height=14 style="cursor: pointer;filter:  progid:DXImageTransform.Microsoft.AlphaImageLoader(src='templates/<?php echo $this->_tpl->template;?>/images/user-decrease.png',sizingMethod='scale');" title="Decrease font size" src="templates/<?php echo $this->_tpl->template;?>/images/blank.png" alt="Decrease font size" id="ja-tool-decrease" onclick="changeFontSize(-1); return false;" /></li>
        <li><img width=14 height=14 style="cursor: pointer;filter:  progid:DXImageTransform.Microsoft.AlphaImageLoader(src='templates/<?php echo $this->_tpl->template;?>/images/user-reset.png',sizingMethod='scale');" title="Default size" src="templates/<?php echo $this->_tpl->template;?>/images/blank.png" alt="Default font size" id="ja-tool-reset" onclick="revertStyles(<?php echo $this->_tpl->params->get('FontSize');?>); return false;" /></li>
        <li><img width=14 height=14 style="cursor: pointer;filter:  progid:DXImageTransform.Microsoft.AlphaImageLoader(src='templates/<?php echo $this->_tpl->template;?>/images/user-increase.png',sizingMethod='scale');" title="Increase font size" src="templates/<?php echo $this->_tpl->template;?>/images/blank.png" alt="Increase font size" id="ja-tool-increase" onclick="changeFontSize(1); return false;" /></li>
        </ul>
        <?php
    }
  if ($jatool & 4){//show color tools
?>
  <ul class="ja-usertools-color">
  <?php
    foreach ($ja_color_themes as $ja_color_theme) {
    ?>
        <li><img style="cursor: pointer;" src="templates/<?php echo $this->_tpl->template;?>/images/<?php echo $ja_color_theme;?><?php echo ( ($ja_color==$ja_color_theme) ? "-hilite" : "" ) ?>.gif" title="<?php echo $ja_color_theme;?> color" alt="<?php echo $ja_color_theme;?> color" id="ja-tool-<?php echo $ja_color_theme;?>color" onclick="setActiveStyleSheet('<?php echo $ja_color_theme;?>');return false;" /></li>
    <?php
    }
    ?>
    </ul>
    <script type="text/javascript">
    var curcolor = document.getElementById('<?php echo ( ($ja_color=="") ? "ja-tool-defaultcolor" : "ja-tool-{$ja_color}color" ) ?>');
    </script>
    <?php
    }
    ?>
<?php
}

    
    
    function calSpotlight ($spotlight,$widthSL = 99.6) {

        /********************************************
        $spotlight = array ('position1', 'position2',...)
        *********************************************/
        $modules = array();
        $modules_s = array();
        foreach ($spotlight as $position) {
            if( $this->_tpl->countModules($position) ){
                $modules_s[] = $position;
            }
            $modules[$position] = '-full';
        }

        if (!count($modules_s)) return null;

        $width = round($widthSL/count($modules_s),1) . "%";

        if (count ($modules_s) > 1){
            $modules[$modules_s[0]] = "-left";
            $modules[$modules_s[count ($modules_s) - 1]] = "-right";
            for ($i=1; $i<count ($modules_s) - 1; $i++){
                $modules[$modules_s[$i]] = "-center";
            }
        }
        return array ('modules'=>$modules, 'width'=>$width);
    }

    function getOpenMenuItems($menutype = 'mainmenu'){
        global $itemid;

        $user   =& JFactory::getUser();
        if (isset($user))
        {
            $aid = $user->get('aid', 0);
            $sql = "SELECT m.* FROM #__menu AS m"
            . "\nWHERE menutype='". $menutype ."' AND published='1' AND access <= '$aid'"
            . "\nORDER BY parent,ordering";
        } else {
            $sql = "SELECT m.* FROM #__menu AS m"
            . "\nWHERE menutype='". $menutype ."' AND published='1'"
            . "\nORDER BY parent,ordering";
        }
        $database->setQuery( $sql );
        $rows = $database->loadObjectList( 'id' );

        // establish the hierarchy of the menu
        $children = array();
        // first pass - collect children
        foreach ($rows as $v ) {
            $pt = $v->parent;
            $list = $children[$pt] ? $children[$pt] : array();
            array_push( $list, $v );
            $children[$pt] = $list;
        }

        // second pass - collect 'open' menus
        $open = array( $Itemid );
        $count = 20; // maximum levels - to prevent runaway loop
        $id = $Itemid;
        while (--$count) {
            if (isset($rows[$id]) && $rows[$id]->parent > 0) {
                $id = $rows[$id]->parent;
                $open[] = $id;
            } else {
                break;
            }
        }
      return $open;
    }

    function setColorThemes ($colorthemes) {
        $this->ja_color_themes = $colorthemes;
    }
    
    function updateParams($params) {

        $file = dirname(__FILE__).DS.'params.ini';
        $txt = $params->toString();
        jimport('joomla.filesystem.file');
        if (JFile::exists($file) && $txt)
        {
            // Try to make the params file writeable
            if (!JPath::setPermissions($file, '0755')) {
                JError::raiseNotice('SOME_ERROR_CODE', 'Could not make the template parameter file writeable');
            }

            $return = JFile::write($file, $txt);
            // Try to make the params file unwriteable
            if (!JPath::setPermissions($file, '0555')) {
                JError::raiseNotice('SOME_ERROR_CODE', 'Could not make the template parameter file unwriteable');
            }
            
            return $return;
        }
    }

}
?>