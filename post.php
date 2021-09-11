<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="container mx-auto">
  <article>
    <div><h2><?php $this->title() ?></h2></div>
    <div class="post_info">本文地址：<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a></div>
    <div class="post_info">作者：<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
    发布日期：<?php $this->date('Y-m-d H:i:s'); ?></div>

    <div class="post_content">
<?php $this->content(); ?>
    </div>
  </article>

  <ul class="post-near">
    <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
    <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
  </ul>
</main>

<section class="container mx-auto">
<?php include('comments.php'); ?>
</section>

<?php $this->need('footer.php'); ?>