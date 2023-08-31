<?php
/**
 * 友情链接
 * @package custom
 */
 
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
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
			<div class="page_right_content">
				<div class="blog_header_title">
					  <div class="blog_header_title_title"><?php $this->title() ?></div>
					  <div class="blog_header_information">
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
                <div class="typecho_friends">
                    <ul>
                        <?php
                        $linksJson = $this->options->Links; // 获取后台设置的 JSON 格式数据
                        if ($linksJson) {
                            $links = json_decode($linksJson); // 解析 JSON 数据为数组
                        
                            foreach ($links as $link) {
                                $url = $link->url;
                                $name = $link->name;
                                $title = $link->title;
                                $logoUrl = $link->logoUrl;
                        
                                // 在这里输出链接的 HTML 结构
                                echo '<li><a href="' . $url . '" target="_blank" title="' . $title . '">';
                                echo '<img src="' . $logoUrl . '">';
                                echo $name; // 输出超链接的显示文本
                                echo '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
				<div class="comments">
					<?php include('comments.php'); ?>
				</div>
				<?php $this->need('sidebar.php'); ?>
			</div>
		</div>
		<script type="text/javascript" src="<?php $this->options->themeUrl('./js/jianghu.js'); ?>"></script>