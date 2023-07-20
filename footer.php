<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div> <!-- # main end -->

<footer id="footer" role="contentinfo" class="copyright">
    <p>由 <a href="https://typecho.org/" target="_blank" rel="nofollow">Typecho <?php _e('%s', $this->options->version); ?></a>强力驱动。
    主题 <a href="https://github.com/leonardwoo/Anole" target="_blank">Anole</a> 由 <a href="https://l6d.me/" target="_blank">Leonard Woo</a> 设计。</p>
</footer>
  </div>
</div> <!-- # body end -->

<?php $this->footer(); ?>

<script src="<?php $this->options->themeUrl('script.js'); ?>"></script>
</body>
</html>
