<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Nirmal Classifieds</title>
<?php echo $html->css('blueprint/screen.css')?>
<?php echo $html->css('blueprint/plugins/fancy-type/screen.css')?>
<?php echo $html->css('style.css')?>
<!-- <?php echo $html->css('blueprint/print.css')?> -->
 <!--[if lt IE 8]>
    <?php echo $html->css('blueprint/ie.css')?>
  <![endif]-->
<?php echo $scripts_for_layout ?>		
</head>
<body>
<div class="container">
	<div id="header" class="span-24">
	  <div class="span-4">
  		<h1 class="alt">The Classifieds</h1>
	  </div>
    <div class="span-20 last">
	    <?php echo $this->element('search_box', array('cache'=>'+1 hour')); ?>
        <div id="header-right"class="span-5 last">
           <div id="header-right-menu">
              <?php echo $html->link('Register/Login','/users/register') ?> 
              <em> | </em> 
              <?php echo $html->link('Dashboard','/users/dashboard') ?>
            </div>
            <div>
              <?php echo $html->image('postad_button.gif'); ?>
            </div>
         </div>
      </div>
  </div>
  <!-- End header -->	
    <div id="content-1" class="span-24">
      <div id="bread-crumb" class="span-23 last">Location:Chennai Home >> Categories</div>
    <?php echo $content_for_layout ?>
    </div>
  	
  	<div class="span-24">
  		About us | Contact us | Privacy Policy
  	</div>

</div>
</body></html>
