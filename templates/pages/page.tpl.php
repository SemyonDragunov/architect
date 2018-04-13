<?php print $header; ?>

<section class="h1-page dark pattern wrapper">
  <div class="container">
    <h1><?php print $title; ?></h1>
  </div>
</section>

<section class="content container wrapper <?php print $classes; ?>" <?php print $attributes; ?>>
  <?php print render($page['sidebar_first']); ?>

  <main role="main">

    <section class="helper">
      <?php print $messages; ?>

      <?php print render($page['help']); ?>

      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <?php print $breadcrumb; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
    </section>

    <?php print render($page['content']); ?>

  </main>
</section>

<?php print $footer; ?>