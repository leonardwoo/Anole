<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="container mx-auto">
  <div class="error-page">
    <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
  </div>
</main>

<section class="sidebar_box">
  <div class="container mx-auto sidebar">
	  <?php $this->need('sidebar.php'); ?>
	</div>
</section>

<?php $this->need('footer.php'); ?>
