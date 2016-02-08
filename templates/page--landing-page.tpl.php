<?php
/**
 * In order for this file to work, you need to create a content type that has a machine name of landing_page
 * You'll need to make sure you have at least two fields for the form to be able to be stacked/side by side and for the navigation to be removed
 * Note: the philosophy of the navigation being removed is from Hubspot's Inbound that a landing page should not have a navigation bar.
 *    field machine name:   field_remove_navigation
 *    widget type:          select list
 *    Allowed Values List:  navigation|Navigation
 *                          no-navigation|No-Navigation
 *    Make required:        yes
 *
 *    field machine name:   field_form_stacked
 *    widget type:          select list
 *    Allowed Values List:  navigation|Navigation
 *                          no-navigation|No-Navigation
 *    Make required:        yes
 *    
 *    Of course, you'll want to have the webform module installed and enabled for this new content type. You'll also want to make sure that you remove them from the display in the content type settings so you don't see these fields being inappropriate.
 */
?>

<div id="top" class="materialize d7 landing-page <?php if ($node->field_remove_navigation): ?><?php print $node->field_remove_navigation['und'][0]['value']; ?><?php endif; ?> <?php if ($node->field_form_stacked): ?><?php print $node->field_form_stacked['und'][0]['value']; ?><?php endif; ?>">
  <div class="page">
    <div class="page-inner">
        
      <div class="top-wrapper w-navigation">
        <div class="top-wrapper wo-navigation">

          <?php if (!empty($page['help'])): ?>
            <div id="help-wrapper" class="help-wrapper">
              <div class="inner">
                <div id="help-container" class="container">
                  <div class="inner">
                    <?php print render($page['help']); ?>
                  </div>
                </div> <!-- #help-container -->
              </div> 
            </div> <!-- .help-wrapper -->
          <?php endif; ?>
                  
          <header id="header-wrapper" class="header-wrapper wrapper" role="banner">
            <div class="inner">
              <div id="header-container" class="container">
                <div class="inner row">
                  
                  <!-- branding -->
                  <div id="site-info" class="site-info col s11 m3">
                    <div class="inner">
                         <?php if ($logo): ?><div class="logo"><a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></div> <!-- .logo --><?php endif; ?>
                    </div> <!-- .inner -->
                  </div> <!-- .site-info -->
                  
                  <!-- header block -->
                  <div id="header" class="header-region region col s12 m8 hide-on-med-and-down">
                    <div class="inner">
                      <?php print render($page['header']); ?>
                    </div>
                  </div> <!-- #header -->
                  
                </div> <!-- .header-inner -->
              </div> <!-- #header-container -->
            </div> <!-- .header-wrapper-inner -->
          </header> <!-- #header-wrapper -->
          
        </div> <!-- .top-wrapper .wo-navigation-->
        
        <?php if ($main_menu): ?>
          <nav id="main-navigation-wrapper" class="main-navigation-wrapper wrapper">
            <div class="shrinking-icon"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo-icon"><img alt="<?php print t('Home'); ?>" src="/<?php $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL)); echo $theme_path; ?>/logo-icon.png"></a></div>
            <div id="main-navigation" class="main-navigation container ">
              <div class="inner row">
               <?php print theme('links__system_main_menu', array(
                 'links' => $main_menu,
                 'attributes' => array(
                   'id' => 'main-menu-links',
                   'class' => array('links', 'clearfix'),
                 ),
                 'heading' => array(
                   'text' => t('Main menu'),
                   'level' => 'h2',
                   'class' => array('element-invisible'),
                 ),
               )); ?>
              </div> <!-- .inner -->
            </div> <!-- .main-navigation -->
          </nav> <!-- .main-navigation-wrapper -->
        <?php endif; ?> <!-- end main menu -->
        
        
        <?php if (!empty($page['mega_menu'])): ?>
          <nav id="mega-menu-wrapper" class="mega-menu-wrapper wrapper">
            <div class="shrinking-icon"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo-icon"><img alt="<?php print t('Home'); ?>" src="/<?php $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL)); echo $theme_path; ?>/logo-icon.png"></a></div>
            <div class="inner">
            <div id="mega-menu-container" class="container">
              <div class="inner row">
                    <?php print render($page['mega_menu']); ?>
              </div>
            </div> <!-- #mega_menu-container -->
          </div>
        </nav>
        <?php endif; ?>
        
      </div> <!-- .top-wrapper .w-navigation-->



      <?php if (!empty($page['highlighted'])): ?>
        <section id="highlighted-wrapper" class="highlighted-wrapper wrapper">
          <div class="inner">
          <div id="highlighted-container" class="container">
            <div class="inner row">
                  <?php print render($page['highlighted']); ?>
            </div>
          </div> <!-- #highlighted-container -->
        </div>
      </section>
      <?php endif; ?>
      <div id="content-area-wrapper" class="content-area-wrapper">
        <div class="inner">
        
        <?php if ($page['field_remove_navigation']): ?>
          <section id="preface-wrapper" class="preface-wrapper wrapper">
            <div class="inner">
              <div id="preface-container" class=""> <!-- add container class here to make preface not full-width-->
                <div id="preface" class="region clearfix">
                  <div class="inner row">
                  <?php print render(field_remove_navigation); ?>
                  </div><!-- .inner -->
                </div> <!-- #preface -->
              </div>  <!-- #preface-container -->
            </div>
          </section>
        <?php endif; ?>
        
        <div id="content-wrapper" class="content-wrapper wrapper">
          <div class="inner">
            <div id="content-container" class="container">
              <div class="inner row">
                
                <main class="content-region col s12<?php if (!empty($page['sidebar_second'])): ?> m9<?php endif; ?>" role="main">
                  <a id="main-content"></a>
                    <div class="inner">
                      <div class="layout-content">
                        <?php if (!empty($tabs)): ?>
                          <?php print render($tabs); ?>
                        <?php endif; ?>

                        <?php print render($title_prefix); ?>
                
                        <?php if (!empty($title)): ?>
                          <h1 class="page-header title"><?php print $title; ?></h1>
                        <?php endif; ?>
                
                        <?php print render($title_suffix); ?>
                
                        <?php print $messages; ?>

                        <?php if (!empty($action_links)): ?>
                          <ul class="action-links"><?php print render($action_links); ?></ul>
                        <?php endif; ?>
                
                        <?php print render($page['content']); ?>
                
                        <?php if(!empty($feed_icons)): ?>
                          <div class="rssFeed"><?php print $feed_icons; ?></div>
                        <?php endif; ?>
                    </div><!-- .layout-content -->
                  </div>
                </main> <!-- .content-region -->
              
                  <?php if (!empty($page['sidebar_second'])): ?>
                    <aside class="sidebar-second sidebar region layout-sidebar-second col s12 m3" role="complementary">
                      <div class="inner">
                        <?php print render($page['sidebar_second']); ?>
                      </div> <!-- .inner -->
                    </aside>  <!-- #sidebar-second -->
                  <?php endif; ?>
              
                </div> <!-- inner row --> 
              </div> <!-- #content-container -->
            </div>
          </div> <!-- #content-wrapper -->
        </div>
      </div><!-- #content-area-wrapper -->
      
      <?php if ($page['postscript']): ?>
        <section id="postscript-wrapper" class="preface-wrapper wrapper">
          <div class="inner">
            <div id="postscript-container" class="container">
              <div id="postscript" class="region clearfix">
                <div class="inner row">
                <?php print render($page['postscript']); ?>
                </div><!-- .inner -->
              </div> <!-- #postscript -->
            </div>  <!-- #postscript-container -->
          </div>
        </section>
      <?php endif; ?>

        <footer class="footer-outer">
          <div class="inner">
            
        <?php if ($page['footer']): ?>
          <section id="footer-wrapper" class="preface-wrapper wrapper">
            <div class="inner">
              <div id="footer-container" class="container">
                <div id="footer" class="region clearfix" role="contentinfo">
                  <div class="inner row">
                    <?php print render($page['footer']); ?>
                  </div><!-- .inner -->
                </div> <!-- #footer -->
              </div>  <!-- #footer-container -->
            </div>
          </section>
        <?php endif; ?>
        
        <div id="attribution-line" class="attribution-wrapper wrapper">
          <div id="attribution-container" class="container">
            <div class="inner row">
              <div id="copyright-line" class="col s12 m6 center-on-mobile">
                <div class="inner">
                  &copy;<?php echo date("Y"); print ' '; print $site_name; ?>
                </div>
              </div>
              <div id="powered-by" class="col s12 m6 right-align center-on-mobile">
                <div class="inner">
                  powered by Tribute Media - a <a href="http://www.tributemedia.com" target="_new" alt>web marketing agency</a>. <?php if ($logged_in): ?><a href="/user/logout">logout</a><?php else: ?><a href="/user">login</a><?php endif; ?>.
                </div>
              </div> <!-- #powered-by -->
            </div>
          </div>
        </div><!-- #attribution-line -->
        
      </div> <!-- .footer-outer-inner -->
    </footer> <!-- .footer-outer -->
    
    
    <?php if (!empty($page['mob'])): ?>
                <?php print render($page['mob']); ?>

    <?php endif; ?>
    
      
    </div> <!-- .page-inner -->
    
    <div id="back-to-top-wrapper">
      <a href="#top" id="back-to-top" class="back-to-top">Back To Top &nbsp; <i class="fa fa-arrow-circle-up"> </i></a>
    </div>  
  </div> <!-- .page -->
</div> <!-- .materialize -->



