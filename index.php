<?php
/**
 * 简约博客！
 * 
 * <ul><li>Github 地址：<a href="https://github.com/qian52493/JiangHu" target="_blank">JiangHu</a></li></ul>
 * @package JiangHu Theme
 * @author Jiang
 * @version 1.0
 * @link https://github.com/qian52493/JiangHu
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 				<div class="right_box">
 				    <!-- 搜索 -->
					<div class="right_box_search" id="right_box_sea">
						<div class="right_search bar7">
							<form action="<?php $this->options->siteUrl(); ?>" method="post">
								<input type="text" name="s" class="text" placeholder="Search" required>
								<button type="submit" class="submit" value="Search"><i class="fa fa-search" aria-hidden="true" style="font-size: 16px;"></i></button>
							</form>
						</div>
						<div class="right_admin">
							<a href="<?php $this->options->adminUrl(); ?>"><i class="fa fa-gear" aria-hidden="true" /></i></a>
						</div>
					</div>	
					<!-- 搜索结束 -->
					<div class="right_img" style="background-image: url('<?php $this->options->pictureBgimg(); ?>');"></div>
                    <div class="right_advertisement">
                        <!-- 分类 -->
						<ul id="menu">
                            <li><a<?php if ($this->is('index')): ?> class="active"<?php endif; ?>
                                href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                            <?php $this->widget('Widget_Metas_Category_List')
                                   ->to($categories); ?> 
                            <?php $count = 0; ?>       
                            <?php while ($categories->next()): ?>
                            <?php if ($count >= 5) break; ?>
                                <li><a<?php if ($this->is('category', $categories->slug)): ?> class="active"<?php endif; ?>
                                    href="<?php echo $categories->permalink; ?>"
                                    title="<?php echo $categories->name; ?>"><?php echo $categories->name; ?></a></li>
                            <?php $count++; ?>
                            <?php endwhile; ?>
                            <?php if ($this->options->navigation == 'show'): ?>
                            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                                <li <?php echo $this->is('page', $pages->slug); ?>">
                                     <a class=" " href="<?php $pages->permalink(); ?>" <?php if ($this->is('page', $pages->slug)) echo 'aria-current="page"'; ?>><?php $pages->title(); ?></a>
                                </li>
							<?php endif; ?>
						</ul>
                    </div>
<?php
// 文章置顶
?>
					<!-- 文章 -->
					<div class="right_article" id="right_article_page">
						<?php while($this->next()): ?>
                        <div class="right_article_span">
                            
							<span class="right_article_span1"><a href="<?php $this->permalink() ?>"><?php $this->sticky(); $this->title(20,'...') ?></a></span>
							<span class="right_article_span2"><?php $this->date('m-d'); ?></span>
                        </div>
					    <?php endwhile; ?>
					    <div class="right_article_pagenav" style="display:none">
					        <?php $this->pageLink('下一页', 'next'); ?>
					    </div>
					    <?php $this->need('sidebar.php'); ?>
					</div>
				</div>
				
		</div>
		<?php $this->need('footer.php'); ?>
		<script type="text/javascript" src="<?php $this->options->themeUrl('./js/jianghu.js'); ?>"></script>