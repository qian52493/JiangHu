 <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

 	<div class="right_box">
			<div class="right_box_search" id="right_box_sea">
						<div class="right_search bar7">
							<form action="<?php $this->options->siteUrl(); ?>" method="post">
								<input type="text" name="s" class="text" placeholder="Search">
								<button type="submit" class="submit" value="Search"><i class="fa fa-search" aria-hidden="true" style="font-size: 16px;"></i></button>
							</form>
						</div>
				<div class="right_admin">
					<a href="<?php $this->options->adminUrl(); ?>"><i class="fa fa-gear" aria-hidden="true" /></i></a>
				</div>
			</div>
			
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
			<div class="page_right_content">
			    <div class="page_refuse"><h2>404了,兄弟</h2></div>
		    </div>
		</div>