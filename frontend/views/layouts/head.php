<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <script id="allmobilize" charset="utf-8" src="style/js/allmobilize.min.js"></script>
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate" media="handheld"  />
    <!-- end 云适配 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>拉勾网-最专业的互联网招聘平台</title>
    <meta property="qc:admins" content="23635710066417756375" />
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

    <!-- <div class="web_root"  style="display:none">h</div> -->
    <script type="text/javascript">
        var ctx = "h";
        console.log(1);
    </script>
    <link rel="Shortcut Icon" href="h/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="style/css/external.min.css"/>
    <link rel="stylesheet" type="text/css" href="style/css/popup.css"/>
    <script src="style/js/jquery.1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="style/js/jquery.lib.min.js"></script>
    <script src="style/js/ajaxfileupload.js" type="text/javascript"></script>
    <script type="text/javascript" src="style/js/additional-methods.js"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var youdao_conv_id = 271546;
    </script>
    <script type="text/javascript" src="style/js/conv.js"></script>


    <script src="style/js/core.min.js" type="text/javascript"></script>
    <script src="style/js/popup.min.js" type="text/javascript"></script>

</head>
<body>
<div id="body">
    <div id="header">
        <div class="wrapper">
            <a href="index.html" class="logo">
                <img src="style/images/logo.png" alt="拉勾招聘-专注互联网招聘" width="229" height="43">
            </a>
            <ul class="reset" id="navheader">
                <li><a href="javascript:;">首页</a></li>
                <li><a href="companylist.html">公司</a></li>
                <li><a href="#" target="_blank">论坛</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl('resume/index')?>" rel="nofollow">我的简历</a></li>
                <li><a href="create.html" rel="nofollow">发布职位</a></li>
            </ul>

            <?php
            $session = Yii::$app->session;

            if($session->has('user_name')){   //企业用户?>
                <dl class="collapsible_menu">
                    <dt>
                        <span>企业 : <?=$session->get('user_name')?></span>
                        <span class="red dn" id="noticeDot-1"></span>
                        <i></i>
                    </dt>
                    <dd style="display: none;"><a href="positions.html">我发布的职位</a></dd>
                    <dd style="display: none;"><a href="positions.html">我收到的简历</a></dd>
                    <dd class="btm" style="display: none;"><a href="myhome.html">我的公司主页</a></dd>
                    <dd style="display: none;"><a href="list.html">我要找工作</a></dd>
                    <dd style="display: none;"><a href="accountBind.html">帐号设置</a></dd>
                    <dd class="logout" style="display: none;"><a rel="nofollow" href="<?=Yii::$app->urlManager->createUrl('login/out')?>">退出</a></dd>
                </dl>
            <?php }else if($session->has('userid')){ //个人用户?>

                <dl class="collapsible_menu">
                    <dt>
                        <span>个人 : <?=$session->get('userid')?></span>
                        <span class="red dn" id="noticeDot-0"></span>
                        <i></i>
                    </dt>
                    <dd><a rel="nofollow" href="jianli.html">我的简历</a></dd>
                    <dd><a href="collections.html">我收藏的职位</a></dd>
                    <dd class="btm"><a href="subscribe.html">我的订阅</a></dd>
                    <dd><a href="create.html">我要招人</a></dd>
                    <dd><a href="accountBind.html">帐号设置</a></dd>
                    <dd class="logout"><a rel="nofollow" href="<?=Yii::$app->urlManager->createUrl('login/out')?>">退出</a></dd>
                </dl>

            <?php }else{ ?>
                <ul class="loginTop">
                    <li>
                        <a href="<?=Yii::$app->urlManager->createUrl('compny/login')?>" rel="nofollow">企业登录</a>

                    </li>
                    <li>|</li>
                    <li><a href="<?=Yii::$app->urlManager->createUrl('login/login')?>" rel="nofollow">个人登录</a></li>
                </ul>
            <?php }?>

        </div>
    </div>
<?=$content ?>