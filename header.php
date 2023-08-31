<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
		<title>
			<?php $this->archiveTitle([
	            'category' => _t('分类 %s 下的文章'),
	            'search'   => _t('包含关键字 %s 的文章'),
	            'tag'      => _t('标签 %s 下的文章'),
	            'author'   => _t('%s 发布的文章')
	        ], '', ' - '); ?><?php $this->options->title(); ?>
		</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('./css/jianghu.css'); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('./css/identical.css'); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('./css/media.css'); ?>" />
		<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.staticfile.org/lxgw-wenkai-screen-webfont/1.6.0/lxgwwenkaiscreen.css">
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdn.bootcdn.net/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" async></script>
		<script type="text/javascript" src="<?php $this->options->themeUrl('./js/jquery-ias.min.js'); ?>"></script>
        


		
		<!-- 通过自有函数输出HTML头部信息 -->
		 <?php $this->header(); ?> 
	</head>
	<body>
		<div class="container">