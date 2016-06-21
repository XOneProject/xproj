<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="XPROJ v1.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<style>
.goodsItem{width:223px}
</style>
</head>
<body class="index_page" style="min-width:1200px;">
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/index_ad.lbi'); ?>
<div class="blank"></div>
<div class="block clearfix">
<?php echo $this->fetch('library/category_tree_index.lbi'); ?>
<div class="block clearfix">
<div class="AreaL">
 
  


<?php echo $this->fetch('library/recommend_hot.lbi'); ?>

</div>
<div class="Arear">

 
</div> 
</div>
  <div class="goodsBox_1">
  
  
  
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_2']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_2']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_3']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_3']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

  </div> 
  
    </div>
  
  
  
 


    <?php echo $this->fetch('library/help.lbi'); ?>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
