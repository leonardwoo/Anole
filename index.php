<?php
/**
 * 变色龙主题
 * 
 * @package Anole Theme
 * @author Leonard Woo
 * @version 1.2
 * @link https://github.com/leonardwoo/Anole
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

<main class="container mx-auto posts" role="main">
<?php while($this->next()): ?>
    <article class="post" itemscope>
	<p class="post_title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
	<?php /*
	<div class="post_meta">
	    <span itemprop="author" itemscope>作者： <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span> ｜ 
		<span>日期： <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>.</span> ｜ 
        <span itemprop="interactionCount"><?php $this->commentsNum( '%d 条评论' ); ?>.</span>
	</div>
	<div class="post_content" itemprop="articleBody">
	    <?php $this->content('继续阅读...'); ?>
	</div>
	*/ ?>
    </article>
<?php endwhile; ?>
</main>

<section class="page_box">
<?php $this->pageNav(); ?>
</section>

<section class="sidebar_box">
  <div class="container mx-auto sidebar">
	  <?php $this->need('sidebar.php'); ?>
	</div>
</section>

<?php
$this->need('footer.php');
?>