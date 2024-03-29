<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="container mx-auto">
  <article>
    <div><h2><?php $this->title() ?></h2></div>
    <div class="page_content">
<?php $this->content(); ?>
    </div>
  </article>
</main>

<section class="container mx-auto">
<?php include('comments.php'); ?>
</section>

<section class="sidebar_box">
  <div class="container mx-auto sidebar">
	  <?php $this->need('sidebar.php'); ?>
	</div>
</section>

<?php $this->need('footer.php'); ?>