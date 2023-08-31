<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    echo "<h2>欢迎使用JiangHu主题!</h2>";
    echo "<h3>设置主题外观</h3>";
    $pictureBgimg = new Typecho_Widget_Helper_Form_Element_Text('pictureBgimg',NULL,"/usr/themes/JiangHu/images/wallimg.png",_t('分类上的图片'),_t('输入图片地址url，推荐尺寸570×200'));
    $form->addInput($pictureBgimg);
    $beian = new Typecho_Widget_Helper_Form_Element_Text('beian',NULL,NULL,_t('备案号'),_t('不填不显示'));
    $form->addInput($beian);
    $navigation = new Typecho_Widget_Helper_Form_Element_Radio('navigation', array('show'=>'显示','hide'=>'不显示'),'hide', _t('是否显示友情链接'), _t(''));
    $form->addInput($navigation); 
	$Links = new Typecho_Widget_Helper_Form_Element_Textarea('Links', NULL,
	'[
        {
            "url": "https://www.mishiren.com",
            "name": "迷失人",
            "title": "百度一下，你就知道。",
            "logoUrl": "https://www.mishiren.com/wp-content/uploads/2022/11/QQ%E5%9B%BE%E7%89%8720221130140144.gif"
        },
        {
            "url": "https://blog.hua.cat",
            "name": "HUA CAT",
            "title": "一个心有所向的老男人",
            "logoUrl": "https://losetoday.oss-cn-beijing.aliyuncs.com/img/微信图片_20221122221751.jpg"
        }
    ]', _t('友情链接'), _t('添加的时候,模仿默认友情链接即可!'));
	$form->addInput($Links);
}

function themeInit($archive) { 
    if ($archive->is('index')) { 
        $archive->parameter->pageSize = 7; // 自定义条数 
    }elseif($archive->is('archive')){
    $archive->parameter->pageSize = 7; // 自定义分类页显示主题数
    }
}
function get_post_view($archive)
{
    $cid = $archive->cid;
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();
    
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }

    if ($archive->is('single')) {
        $db->query($db->update('table.contents')->rows(array('views' => $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'] + 1))->where('cid = ?', $cid));
    }

    $views = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'];
    echo $views;
}

       




                    

?>