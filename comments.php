
<h4><?php $this->commentsNum('没有回复', '一个回复"' . $this->title . '"', '%d 个回复"' . $this->title . '"'); ?></h4>
<ol id="comment_list">
    <?php $this->comments()->to($comments); ?>
        <?php while($comments->next()): ?>
	<li id="<?php $comments->theId(); ?>">
	    <div class="comment_data">
                <?php echo $comments->sequence(); ?>. 
                <strong><?php $comments->author(); ?></strong>
                在 <?php $comments->date('F jS, Y'); ?> at <?php $comments->date('h:i a'); ?>
            </div>
	    <div class="comment_body"><?php $comments->content(); ?></div>
	</li>
	<?php endwhile; ?>
</ol>


<?php if($this->allow('comment')): ?>
 
<h4 id="response">退出回复</h4>

 <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">

    <?php if($this->user->hasLogin()): ?>
    <p><a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>已登录. 
        <a href="<?php $this->options->index('Logout.do'); ?>" title="Logout">登出 &raquo;</a></p>

    <?php else: ?>

     <p><input type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>" /><label>名字 (必填)</label></p>
     <p><input type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" /><label>电子邮箱 (必填，不会公开)</label></p>
     <p><input type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" /><label>网址</label></p>
    
     <?php endif; ?>

  <p><textarea rows="10" cols="50" name="text"><?php $this->remember('text'); ?></textarea></p>
  <p><input type="submit" value="Submit Comment" class="submit" /></p>
 </form>
<?php endif; ?>
