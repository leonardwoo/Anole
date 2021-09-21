<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="container mx-auto posts">
<h2 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?> 的文章</h2>
<?php if ($this->have()): ?>
  <?php while($this->next()): ?>
    <article class="post">
	<p class="post_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
    </article>
  <?php endwhile; ?>
<?php else: ?>
    <article class="post">
      <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
    </article>
<?php endif; ?>
</main>

<section class="sidebar_box">
  <div class="container mx-auto sidebar">
	  <?php $this->need('sidebar.php'); ?>
	</div>
</section>

<?php $this->need('footer.php'); ?>