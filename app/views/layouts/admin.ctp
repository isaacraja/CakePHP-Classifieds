<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout?></title>
<?php echo $html->css('admin/theme.css')?>
<?php echo $html->css('admin/style.css')?>
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="css/' + StyleFile + '">');
</script>
<!--[if IE]>
<?php echo $html->css('admin/ie-sucks.css')?>
<![endif]-->
</head>

<body>
	<div id="container">
    	<div id="header">
        	<h2> Ya Classifieds Admin Area</h2>
    <div id="topmenu">
            	<ul>
                	<li class="current"><a href="">Dashboard</a></li>
                    <li><?php echo $html->link('Categories','/admin/categories'); ?></li>
										<li><?php echo $html->link('Ad Posts','/admin/posts'); ?></li>
                	<li><?php echo $html->link('Users','/admin/users'); ?></li>
                    <li><?php echo $html->link('Pages','/admin/pages'); ?></li>
										<li><?php echo $html->link('Special Pages','/admin/special_pages'); ?></li>
                    <li><?php echo $html->link('Events','/admin/events'); ?></li>
                    <li><?php echo $html->link('Newsletters','/admin/newsletters'); ?></li>
                   <!-- <li><?php echo $html->link('Settings','/admin/settings'); ?></li> -->
              </ul>
          </div>
      </div>

			<?php echo $content_for_layout ?>
            <div id="sidebar">
  				<ul>
                	<li><h3><a href="#" class="house">Dashboard</a></h3>
                        <ul>
                        	<li><a href="#" class="report">Sales Report</a></li>
                    		<li><a href="#" class="report_seo">SEO Report</a></li>
                            <li><a href="#" class="search">Search</a></li>
                        </ul>
                    </li>
                    <li><h3><a href="#" class="folder_table">Orders</a></h3>
          				<ul>
                        	<li><a href="#" class="addorder">New order</a></li>
                          <li><a href="#" class="shipping">Shipments</a></li>
                            <li><a href="#" class="invoices">Invoices</a></li>
                        </ul>
                    </li>
                    <li><h3><a href="#" class="manage">Manage</a></h3>
          				<ul>
                            <li><a href="#" class="manage_page">Pages</a></li>
                            <li><a href="#" class="cart">Products</a></li>
                            <li><a href="#" class="folder">Product categories</a></li>
            				<li><a href="#" class="promotions">Promotions</a></li>
                        </ul>
                    </li>
                  <li><h3><a href="#" class="user">Users</a></h3>
          				<ul>
                            <li><a href="#" class="useradd">Add user</a></li>
                            <li><a href="#" class="group">User groups</a></li>
            				<li><a href="#" class="search">Find user</a></li>
                            <li><a href="#" class="online">Users online</a></li>
                        </ul>
                    </li>
				</ul>       
          </div>
      </div>
        <div id="footer">
        <div id="credits">
   		Template by <a href="http://www.bloganje.com">Bloganje</a>
        </div>
        <div id="styleswitcher">
            <ul>
                <li><a href="javascript: document.cookie='theme='; window.location.reload();" title="Default" id="defswitch">d</a></li>
                <li><a href="javascript: document.cookie='theme=1'; window.location.reload();" title="Blue" id="blueswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=2'; window.location.reload();" title="Green" id="greenswitch">g</a></li>
                <li><a href="javascript: document.cookie='theme=3'; window.location.reload();" title="Brown" id="brownswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=4'; window.location.reload();" title="Mix" id="mixswitch">m</a></li>
            </ul>
        </div><br />

        </div>
</div>
</body>
</html>