<?php
/**
 * The browse view file of tree category of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     LGPL
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     tree
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php include '../../common/view/chosen.html.php';?>
<?php 
js::set('root', $root);
js::set('type', $type);
js::set('lang', $lang->js);
?>
<?php if(strpos($treeMenu, '<li>') !== false):?>
<div class='row'>
  <div class='col-md-4'>
    <div class='panel'>
      <div class='panel-heading'><strong><i class="icon-sitemap"></i> <?php echo $title;?></strong></div>
      <div class='panel-body'>
        <div id='treeMenuBox'><?php echo $treeMenu;?></div>
        <?php if($isWechatMenu):?>
        <div class='panel-body'>
          <?php echo html::a($this->createLink('wechat', 'commitMenu', "public=" . str_replace('wechat_', '', $type)), $lang->wechatMenu->commit, "class='btn btn-primary jsoner'");?>
          <?php echo html::a($this->createLink('wechat', 'deleteMenu', "public=" . str_replace('wechat_', '', $type)), $lang->wechatMenu->delete, "class='btn btn-danger jsoner'");?>
        </div>
        <?php endif;?>
      </div>
    </div>
  </div>
  <div class='col-md-8' id='categoryBox'></div>
</div>
<?php else:?>
<div id='categoryBox'></div>
<?php endif;?>
<?php include '../../common/view/treeview.html.php';?>
<?php include '../../common/view/footer.admin.html.php';?>
