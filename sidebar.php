
<?php //* ?>
<div class="post_recent">
<ul>
    <?php $this->widget('Widget_Contents_Post_Recent')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
</div>

<div class="post_date">
<ul>
    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
               ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
    </ul>
</div>

<?php //*/ ?>

<div class="">
<ul>
    <?php if($this->user->hasLogin()): ?>
        <li><a href="<?php $this->options->index('admin/'); ?>">进入后台 (<?php $this->user->screenName(); ?>)</a></li>
        <li><a href="<?php $this->options->index('action/logout'); ?>">登出</a></li>
    <?php else: ?>
        <li><a href="<?php $this->options->adminUrl('login'); ?>">登录</a></li>
    <?php endif; ?>
</ul>
</div>
