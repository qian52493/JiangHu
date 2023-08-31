<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?> 



 <div id="back-to-top" style="display:none;">
	<!--<a href="#" id="">-->
	    <i class="fa fa-2x fa-angle-up" aria-hidden="true" style="color:#fff"/></i>
	<!--</a>-->
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const backToTopButton = document.getElementById("back-to-top");

    // 监听页面滚动事件，显示/隐藏返回顶部按钮
    window.addEventListener("scroll", function() {
        if (window.scrollY >= 300) {
            backToTopButton.style.display = "inline-block"; // 超过设定距离显示按钮
        } else {
            backToTopButton.style.display = "none"; // 距离不足隐藏按钮
        }
    });

    // 监听返回顶部按钮的点击事件
    backToTopButton.addEventListener("click", function(e) {
        e.preventDefault();
        scrollToTop(500); // 滚动到顶部，500ms内完成
    });

    // 平滑滚动到页面顶部的函数...
    function scrollToTop(duration) {
        const scrollHeight = window.scrollY;
        const scrollStep = Math.PI / (duration / 15);
        const cosParameter = scrollHeight / 2;

        let scrollCount = 0;
        let scrollMargin;

        requestAnimationFrame(step);

        function step() {
            setTimeout(function() {
                if (window.scrollY != 0) {
                    scrollCount += 1;
                    scrollMargin = cosParameter - cosParameter * Math.cos(scrollCount * scrollStep);
                    window.scrollTo(0, (scrollHeight - scrollMargin));
                    requestAnimationFrame(step);
                } else {
                    cancelAnimationFrame(step);
                }
            }, 15);
        }
    }
});
</script>