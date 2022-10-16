<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div> <!-- # main end -->

<footer id="footer" role="contentinfo" class="copyright">
    <p>Copyright &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.</p>
    <p>由 <a href="https://typecho.org/" target="_blank" rel="nofollow">Typecho <?php _e('%s', $this->options->version); ?></a>强力驱动。
    主题 <a href="https://github.com/leonardwoo/Anole" target="_blank">Anole</a> 由 <a href="https://l6d.me/" target="_blank">Leonard Woo</a> 设计。</p>
</footer>

</div> <!-- # body end -->

<?php $this->footer(); ?>
</body>
</html>
