<header role="banner">
  <?php if ($header || $action): ?>
    <div class="header-top">
      <div class="container">
        <section class="region region-header"><?php print render($header); ?></section>
        <section class="region region-action"><?php print render($action); ?></section>
      </div>
    </div>
  <?php endif; ?>
  <div class="header-bar">
    <div class="container">
      <div class="wrapper">
        <div class="header-left">
          <a title="<?php print t('Home'); ?>" href="/"><?php print variable_get('site_name'); ?></a>
        </div>
        <div class="header-right">
          <?php
          $menu = menu_navigation_links('main-menu');
          print theme('links__main_menu', array(
            'links' => $menu,
            'attributes' => array(
              'id' => 'main-menu-links',
              'class' => array('links', 'clearfix', 'list-inline'),
            )));
          ?>
        </div>
      </div>
    </div>
  </div>
</header>