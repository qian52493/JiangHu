<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?> 

<div class="footer_side">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="https://typecho.org">Typecho</a> 强力驱动'); ?>.<br>
    <?php _e('Theme by <a href="https://github.com/qian52493/JiangHu" target="_black">Jiang Hu</a>'); ?>
    <?php _e('<a href="https://beian.miit.gov.cn" target="_blank">'); $this->options->beian(); echo '</a>'; ?>

</div>

