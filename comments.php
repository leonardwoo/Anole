<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
  <?php $this->comments()->to($comments); ?>
  <?php if ($comments->have()): ?>
    <h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>

    <ol id="comment_list">
    <?php while($comments->next()): ?>
      <li id="<?php $comments->theId(); ?>">
        <div class="comment_data">
          <?php $comments->gravatar('40', ''); ?>
          <strong><?php $comments->author(); ?></strong>
          <span> <?php $comments->date('F jS, Y'); ?> <?php $comments->date('h:i a'); ?></span>
        </div>
        <div class="comment_body"><?php $comments->content(); ?></div>
      </li>
    <?php endwhile; ?>
    </ol>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
  <?php endif; ?>

  <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
        <h3 id="response"><?php _e('添加新评论'); ?></h3>

        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="comment_form" role="form">
            
        <?php if($this->user->hasLogin()): ?>
          <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>.
              <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
        <?php else: ?>
            
              <p>
                <label for="author" class="required"><?php _e('称呼'); ?></label>
                <input type="text" name="author" id="author" class="text inputbox" value="<?php $this->remember('author'); ?>" required />
            </p>
            <p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('邮箱'); ?></label>
                <input type="email" name="mail" id="mail" class="text inputbox" placeholder="<?php _e('name@company.tld'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
            </p>
            <p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
                <input type="url" name="url" id="url" class="text inputbox" placeholder="<?php _e('https://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
            </p>
            <?php endif; ?>
            <p>
                <textarea name="text" id="textarea" class="textarea inputbox" required ><?php $this->remember('text'); ?></textarea>
            </p>
            <p>
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
            </p>

        </form>
    </div>
    <?php endif; ?>
</div>
