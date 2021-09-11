<?php
/**
 * 变色龙主题
 * 
 * @package Anole Theme
 * @author Leonard Woo
 * @version 1.0
 * @link https://l6d.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

<main class="container mx-auto posts">
<?php while($this->next()): ?>
    <article class="post">
	<p class="post_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
	<?php /*
	<div class="entry_data">
	     作者： <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> ｜ 日期： <?php $this->date('F j, Y'); ?>.
	    <?php $this->commentsNum('%d 条评论'); ?>.
	</div>
	<div class="entry_text">
	    <?php $this->content( _e('继续阅读...')); ?>
	</div>
	*/ ?>
    </article>
<?php endwhile; ?>
</main>

<div class="page_box">
<?php $this->pageNav(); ?>
</div>

<div class="container mx-auto sidebar_box">
<?php $this->need('sidebar.php'); ?>
</div>

<?php
$this->need('footer.php');
?>