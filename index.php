<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="renderer" content="webkit">
    <meta name="author" content="mengkun">
    <meta name="generator" content="KodCloud">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    
    <!-- 强制移动设备以app模式打开页面(即在移动设备下全屏，仅支持部分浏览器) -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    
    <!--标题滚动-->
    <title>♫ oj8King解析-vip音乐在线解析</title>
    <script language="JavaScript">

        var msg = "oj8King解析-vip视频音乐在线解析";
        var delay = 400;

        function scrollTitle() {
            window.document.title = msg
            msg = msg.substring(1, msg.length) + msg.substring(0, 1)
            timeID = setTimeout("scrollTitle()", delay)

        }
    </script>

    <!--网站描述关键字-->
    <meta name="keywords"
          content="一款开源的基于网易云音乐api的在线音乐播放器。具有音乐搜索、播放、下载、歌词同步显示、个人音乐播放列表同步等功能。
		  vip视频音乐解析,vip视频音乐在线解析,vip解析,万能vip视频音乐解析,vip视频音乐全能解析,vip视频音乐,手机vip视频音乐解析,手机在线解析vip视频音乐,优酷vip解析,爱奇艺vip解析,腾讯vip解析,乐视vip解析,芒果vip解析
                    oj8king-音乐解析、在线试听、免费下载全网音乐| QQ音乐|网易云音乐|虾米音乐|酷狗音乐|百度音乐| 免费在线试听、免费下载
            ">
    <meta name="description"
          content="
          oj8King-vip视频免费看，在线解析，vip视频解析，优酷vip解析，爱奇艺vip解析，腾讯vip解析，乐视vip解析，芒果vip解析方便广大用户vip视频音乐服务，最新电影最新电视剧在线免费观看
            oj8king-音乐解析、在线试听、免费下载全网音乐| QQ音乐|网易云音乐|虾米音乐|酷狗音乐|百度音乐| 免费在线试听、免费下载
        ">
    
    <!-- 不支持IE8及以下版本浏览器 -->
    <!--[if lte IE 8]>
        <script>window.location.href="plugns/killie/"</script>
    <![endif]--> 
    
    <!-- favicon图标 -->
    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- jQuery文件 -->
    <script src="js/jquery.min.js"></script>
    
    <!-- 播放器样式表文件 -->
    <link rel="stylesheet" type="text/css" href="css/player.css">
    
    <!-- 小屏幕样式修复 -->
    <link rel="stylesheet" type="text/css" href="css/small.css">
    
    <!-- 滚动条美化样式文件 -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    
    <!-- layer弹窗插件样式文件 -->
    <link rel="stylesheet" href="plugns/layer/skin/default/layer.css?v=3.0.2302" id="layuicss-skinlayercss">
</head>
<body>

<div id="blur-img"></div>

<!-- 头部logo -->
<div class="header">
    <div class="logo" >
        ♫ oj8King解析-vip音乐在线解析
    </div>
</div>  <!--class="header"-->

<!-- 中间主体区域 -->
<div class="center">
    <div class="container">
        <div class="btn-bar">
            <!-- tab按钮区 -->
            <div class="btn-box" id="btn-area">
                <span class="btn" data-action="player" hidden>播放器</span>
                <span class="btn" data-action="playing" title="正在播放列表">正在播放</span>
                <span class="btn" data-action="sheet" title="音乐播放列表">播放列表</span>
                <span class="btn" data-action="search" title="点击搜索音乐">歌曲搜索</span>
               <span class="btn" onclick=location.href="http://play.oj8king.cn" title="点击观看">全网VIP视频</span>
               <span class="btn" onclick=location.href="http://oj8king.cn" title="点击观看">青葱博客</span>

             
				
            </div>
        </div>  <!--class="btn-bar"-->
        
        <div class="data-area">
            <!--歌曲歌单-->
            <div id="sheet" class="data-box" hidden></div>
            
            <!--音乐播放列表-->
            <div id="main-list" class="music-list data-box"></div>
        </div>  <!--class="data-area"-->
        
        <!-- 右侧封面及歌词展示 -->
        <div class="player" id="player">
            <!--歌曲封面-->
            <div class="cover">
                <img src="images/player_cover.png" class="music-cover" id="music-cover">
            </div>
            <!--滚动歌词-->
            <div class="lyric">
                <ul id="lyric"></ul>
            </div>
            <div id="music-info" title="点击查看歌曲信息"></div>
        </div>
    </div>  <!--class="container"-->
</div>  <!--class="center"-->

<!-- 播放器底部区域 -->
<div class="footer">
    <div class="container">
        <div class="con-btn">
            <a href="javascript:;" class="player-btn btn-prev" title="上一首"></a>
            <a href="javascript:;" class="player-btn btn-play" title="暂停/继续"></a>
            <a href="javascript:;" class="player-btn btn-next" title="下一首"></a>
			<a href="javascript:;" class="player-btn btn-order" title="循环控制"></a>
        </div>  <!--class="con-btn"-->
        
        <div class="vol">
            <div class="quiet">
                <a href="javascript:;" class="player-btn btn-quiet" title="静音"></a>
            </div>
            <div class="volume">
                <div class="volume-box">  
                    <div id="volume-progress" class="mkpgb-area"></div>
                </div>
            </div>
        </div>  <!--class="footer"-->
        
        <div class="progress">
            <div class="progress-box">  
                <div id="music-progress" class="mkpgb-area"></div>
            </div>
        </div>  <!--class="progress"-->
    </div>  <!--class="container"-->
</div>  <!--class="footer"-->

<!-- layer弹窗插件 -->
<script src="plugns/layer/layer.js"></script>

<!-- 播放器数据加载模块 -->
<script src="js/ajax.js"></script>

<!-- 播放器歌词解析模块 -->
<script src="js/lyric.js"></script>

<!-- 音乐列表配置 -->
<script src="js/musicList.js"></script>

<!-- 封装函数及ui交互模块 -->
<script src="js/functions.js"></script>

<!-- 播放器主体功能模块 -->
<script src="js/player.js"></script>

<!-- 滚动条美化插件 -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- 背景模糊化插件 -->
<script src="js/background-blur.min.js"></script>

<!-- 站长统计代码 -->
<span style="display: none">
    <!-- 各类统计代码都放在这里…… -->
    
</span>

</body>
</html>