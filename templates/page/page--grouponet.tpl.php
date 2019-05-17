<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
global $base_url;
$url      = $base_url;
if($_SERVER['REQUEST_URI']=="/group/onet"){
  $dependency_class = "container-fluid group-onet-home-page";
}
else {
  $dependency_class = "container";
}

?>
<div class="header-main">
<div class="header-top"><p><a href="<?= $base_url;?>">Back to IPBES Website</a></p></div>
<header id="header" class="header onet-header">

  <div class="container group-onet-home-page-nav-bar">
    <div class="row">
      <div class="col-md-3 col-sm-2 col-xs-12 logo-holder">
        <?php if ($logo): ?>
          <a class="logo" href="/group/onet" title="<?php print t('Home'); ?>">
            <img src="<?php echo $base_url.'/sites/all/themes/ipbes_new/onet-images/logo-full.png';?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
      </div>

      <div class="col-md-5 col-sm-6 col-xs-2 navigation-group-wrapper" id="sticky-navbar">
            <div class=" top-menu">
              <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                  <p class="user-btn">
                  <?php 
              global $user;
              if($user->uid != 0){
                if($display_login_menu):
                    $block = block_load('dkan_sitewide', 'dkan_sitewide_user_menu');
                    if($block):
                      $user_menu = _block_get_renderable_array(_block_render_blocks(array($block)));
                      print render($user_menu);
                     endif;
                  endif;
              }
              else {
                ?>
                    <a href="/user/login">Login</a> 
                    <a class="join" href="/user/register">Register</a>
                 <?php }?>
                  </p>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div> <!-- /.navbar-header -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                  <!-- Main Menu -->
                  <?php print render($page['onet_menu']); ?>
                </div><!-- /.navbar-collapse -->
              </nav><!-- /.navbar -->
            </div><!-- /.offset -->
      </div> 
      <!-- /.navigation -->
      <div class="col-md-4 col-sm-4 col-xs-10 register-links-group">
      	<?php 
      	global $user;
      	if($user->uid != 0){
      		if($display_login_menu):
              $block = block_load('dkan_sitewide', 'dkan_sitewide_user_menu');
              if($block):
                $user_menu = _block_get_renderable_array(_block_render_blocks(array($block)));
                print render($user_menu);
              endif;
            endif;
      	}
      	else {
      		?>
          <div class="content">
            <p><a class="" href="/user/login">Login</a>
              <a class="join" href="/user/register">Register</a></p>
          </div>
      		<?php
      	}
      	?>
      </div>
    </div>
  </div>

</header>
</div>
<!-- Navigation: sticky -->

<div id="main-wrapper" class="onet-main-wrapper">
  <div id="main" class="main onet-group-home <?= $dependency_class; ?>">


<div class="main-row">
<?php
$aliaspath = drupal_get_path_alias();
  $alias = explode("/", $aliaspath);
  if($aliaspath == "eform/submit/organization-signup" || $aliaspath == "eform/submit/open-ended-stakeholder-network") {
   ?>
<ul class="tab-row">
    <li class="tab-col-one">
      <a href="/eform/submit/open-ended-stakeholder-network">Individual Signup</a></li>
    <li class="tab-col-two">
      <a href="/eform/submit/organization-signup">Organization Signup</a></li>
  </ul>
  <?php
}
?>

    <section>

        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if (!empty($title) && empty($is_panel)): ?>
            <?php
             if($_SERVER['REQUEST_URI']!="/group/onet"){
              ?>
              <h1 class="page-header"> 
              <?php
                print $title;
              ?>
              </h1>
              <?php
              }
             ?>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

         <?php if (!empty($page['help'])): ?>
      <?php print render($page['help']); ?>
    <?php endif; ?>

        <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
        <ul class="action-links">
            <?php print render($action_links); ?>
        </ul>
        <?php endif; ?>

        <?php
            if (!empty($page['sidebar'])):
            echo '<section class="col-md-9" role="main">';
            else:
            echo '<section role="main">';
            endif;
        ?>
        <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar'])): ?>
    <aside class="sidebar col-md-3" role="complementary">
        <?php print render($page['sidebar']); ?>
    </aside>
    <!-- /#sidebar-second -->
    <?php endif; ?>


    </section>
</div>


  </div> <!-- /#main -->
<div class="footer-iucn">
<div class="container">
  <div class="row">
    <div class="col-lg-2 col-md-3 col-sm-6">
      <div class="image">
        <img src="/sites/all/themes/ipbes_new/onet-images/logo-footer.png">
      </div>
    </div>
<!--     <div class="col-lg-1"></div>
    <div class="col-lg-3 col-md-3 col-sm-6">
      <div class="address detail">
        <p class="Enquirie">Mailing Address</p>
        <p>info@onet.net</p>
      </div>
    </div> -->
<!--     <div class="col-lg-1"></div> -->
<!--     <div class="col-lg-2 col-md-3 col-sm-6">
      <div class="General detail">
        <p class="Enquirie">General Enquiries</p>
        <p class="mail">secretariat@onet.net</p>
      </div>
    </div> -->
<!--     <div class="col-lg-1"></div> -->
<!--     <div class="col-lg-2 col-md-3 col-sm-6">
      <div class="Media detail">
        <p class="Enquirie">Media Enquiries</p>
        <p class="mail">media@onet.net</p>
      </div>
    </div> -->
  </div>
</div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 left">
          <p>© Copyright ONet  |  All Rights Reserved.</p>
        </div>
        <div class="col-sm-6 right">
          <p>Privacy Policy  |  Terms & Conditions</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div> <!-- /#main-wrapper -->


