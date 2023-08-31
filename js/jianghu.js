
const targetSearch = document.getElementById('right_box_sea')

        // 监听滚动事件
window.addEventListener('scroll', function() {
	// 获取目标 div 元素距离页面顶部的距离
	const divTopDistance = targetSearch.getBoundingClientRect().top;

	// 如果目标 div 到达页面顶部，替换当前的 CSS 类
	if (divTopDistance <= 0) {
		targetSearch.classList.replace('right_box_search', 'right_box_searchs');
	} else {
		// 否则，恢复之前的 CSS 类
		targetSearch.classList.replace('right_box_searchs', 'right_box_search');
	}
});
var ias = jQuery.ias({
container:  '.right_article',    //大容器
item:       '.right_article_span',    //循环容器
pagination: '.right_article_pagenav',    //分页容器
next:       '.next'    //下一页的class
});
 ias.extension(new IASTriggerExtension({
        text: '加载更多', //此选项为需要点击时的文字
        offset: 1, //load多少页后显示加载更多按钮
    }));
ias.extension(new IASSpinnerExtension());    //加载时的图片
ias.extension(new IASNoneLeftExtension({text: "到底了啦"}));    //到底后显示的文字