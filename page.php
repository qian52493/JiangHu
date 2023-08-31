<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

		<div class="right_box">
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
			
			<div class="right_img" style="background-image: url('<?php $this->options->pictureBgimg(); ?>');"></div>
			<div class="page_right_content">
				<div class="blog_header_title">
					  <div class="blog_header_title_title"><?php $this->title() ?></div>
					  <div class="blog_header_information">
					      <span>
					          <i class="fa fa-folder-open" aria-hidden="true"></i>
					          <?php $this->category(','); ?>
				          </span>
					      <span>
					          <i class="fa fa-clock-o" aria-hidden="true"></i>
					          <?php $this->date('Y-m-d'); ?>
				          </span>
						  <span><i class="fa fa-eye" aria-hidden="true" />&nbsp;</i><?php get_post_view($this) ?>次浏览</span>
					  </div>
				</div>
				
				<div class="blog_header_content">
					<?php $this->content(); ?>
				</div>
				<?php $this->need('sidebar.php'); ?>
			</div>
		</div>
		