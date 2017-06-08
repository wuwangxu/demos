<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>一争天下</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="一争天下">
    <meta name="description" content="一争天下">
	<link rel="stylesheet" href="./dist/css/style.min.css">
</head>
<body>
	<div id="header">
		<div class="header-main clearfix">
			<a href="" class="icon">
				<img src="./images/icon.png" alt="">
				<h2>一争天下</h2>
				<span>官方网站</span>
			</a>
			<ul class="nav">
				<li><a class="act" href="#1"><i class="spbg nav-home"></i>首页</a></li>
				<li><a class="act" href="#2"><i class="spbg nav-news"></i>新闻</a></li>
				<li class="wujiang-nav"><a class="act" href="#3"><i class="spbg nav-gameinfo"></i>游戏资料</a>
					<div class="wujiang-sel"><s class="spbg nav-sel-icon"></s>
						<a href="">武将库</a>
						<a href="">兵器库</a>
					</div>
				</li>
				<li><a class="act" href="#4"><i class="spbg nav-raiders"></i>攻略</a></li>
				<li><a class="act" href="#5"><i class="spbg nav-bbs"></i>论坛</a></li>
				<li class="qysg-wx-active"><s class="spbg nav-wx"></s>
					<p class="nav-wx-txt"><span class="guanzhu-wx">关注官方微信</span><span class="guanzhu-zl">得第一手资料</span></p>
					<s class="spbg nav-gt"></s>
					<img src="./images/qysg-wx.png" class="qysg-wx">
					</li>
			</ul>
		</div>
	</div>
	<div id="weapon-main" class="clearfix">
        <div class="search-nav">
            <div class="search">
                <input type="text" name="search" value="请输入武将名称" id="searWujiang"><span class="search-btn"></span>
            </div>
            <div class="nav-library clearfix">
                <div class="nav-library-dl">
                    <dl class="nav-list-com nav-list-01">
                        <dt data-quality="0" class="spbg star-all hover">全部星级</dt>
                        <dd data-quality="7" class="star-png  star-7"></dd>
                        <dd data-quality="6" class="star-png  star-6"></dd>
                        <dd data-quality="5" class="star-png  star-5"></dd>
                        <dd data-quality="4" class="star-png  star-4"></dd>
                        <dd data-quality="3" class="star-png  star-3"></dd>
                        <dd data-quality="2" class="star-png  star-2"></dd>
                        <dd data-quality="1" class="star-png  star-1"></dd>
                    </dl>
                    <dl class="nav-list-com nav-list-02">
                        <dt data-cost="0" class="spbg star-all hover">全部品质</dt>
                        <dd data-cost="1">橙色</dd>
                        <dd data-cost="2">紫色</dd>
                        <dd data-cost="3">蓝色</dd>
                        <dd data-cost="4">绿色</dd>
                        <dd data-cost="5">白色</dd>
                        <dd></dd>
                        <dd></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="gameinfo-list" id="wujiang-list"><ul class="clearfix"></ul></div>
        <div class="gameinfo-list" style="margin-top: 66px;" id="wujiang-show"></div>
	</div>
	<div id="footer">
		<a href="">关于天下</a> | <a href="">客服中心</a> | <a href="">服务条款</a> | <a href="">合作伙伴</a><br/>
    	<p>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防受骗上当。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
	</div>
<script src="./dist/js/bundle.js"></script>
<script>var dataid = "<?php echo isset($_GET['heroid']) ? $_GET['heroid'] : 0 ; ?>";</script>
<script src="./dist/js/wujiang.js"></script>
</body>
</html>