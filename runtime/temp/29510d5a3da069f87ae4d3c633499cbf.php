<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/config/index.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/main.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/head.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/foot.html";i:1503634141;}*/ ?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo config('sysconf.name'); ?> &nbsp; <?php echo config('sysconf.houzui'); ?></title>
    <meta name="description" content="<?php echo config('sysconf.description'); ?>">
    <meta name="keywords" content="<?php echo config('sysconf.keywords'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>/assets/css/admin.css">
    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>/assets/css/app.css">
</head>





<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="<?php echo STATIC_PATH; ?>/assets/img/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">


            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick">管理员</span><span class="tpl-header-list-user-ico"> <img src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?php echo config('sysconf.kfqq'); ?>&spec=100"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="javascript:;" onclick="updatePwd('<?php echo url('admin/Index/updatePwd'); ?>')"><span class="am-icon-cog"></span> 修改密码</a></li>
                    <li><a href="<?php echo url('admin/Index/logout'); ?>"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li><a href="<?php echo url('admin/Index/logout'); ?>" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>







<div class="tpl-page-container tpl-page-header-fixed">


    <div class="tpl-left-nav tpl-left-nav-hover">
        <div class="tpl-left-nav-title">
            系统菜单
        </div>
        <div class="tpl-left-nav-list">
            <ul class="tpl-left-nav-menu">
                <li class="tpl-left-nav-item">
                    <a href="<?php echo url('admin/Index/index'); ?>" class="nav-link <?php if(($controller_name == 'Index') && ($action_name == 'index')): ?> active <?php endif; ?>">
                        <i class="am-icon-home"></i>
                        <span>首页</span>
                    </a>
                </li>


                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if(($controller_name == 'Config')): ?> active <?php endif; ?>">
                        <i class="am-icon-cogs"></i>
                        <span>系统设置</span>
                    <?php if(($controller_name == 'Config')): ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    <?php else: ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    <?php endif; ?>



                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if(($controller_name == 'Config')): ?> style="display: block;" <?php endif; ?> >
                        <li >
                            <a href="<?php echo url('admin/Config/index'); ?>" <?php if(($controller_name == 'Config') && ($action_name == 'index')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>基础设置</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>
                            <a href="<?php echo url('admin/Config/stmp'); ?>" <?php if(($controller_name == 'Config') && ($action_name == 'stmp')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>邮件设置</span>
                                <i class="am-icon-mail-forward tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>
                            <a href="<?php echo url('admin/Config/gtips'); ?>" <?php if(($controller_name == 'Config') && ($action_name == 'gtips')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>公告设置</span>
                                <i class="am-icon-bullhorn tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                        </li>
                    </ul>
                </li>




                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if(($controller_name == 'Order')): ?> active <?php endif; ?>">
                        <i class="am-icon-table"></i>
                        <span>订单管理</span>
                    <?php if(($controller_name == 'Order')): ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    <?php else: ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    <?php endif; ?>

                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if(($controller_name == 'Order')): ?> style="display: block;" <?php endif; ?>>
                        <li>
                            <a href="<?php echo url('admin/Order/index'); ?>" <?php if(($controller_name == 'Order')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>订单列表</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                        </li>
                    </ul>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if(($controller_name == 'Goods') OR ($controller_name == 'Yclass')): ?> active <?php endif; ?>">
                        <i class="am-icon-shopping-cart"></i>
                        <span>商品管理</span>
                    <?php if(($controller_name == 'Goods') OR ($controller_name == 'Yclass')): ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    <?php else: ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    <?php endif; ?>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if(($controller_name == 'Goods') OR ($controller_name == 'Yclass')): ?> style="display: block;" <?php endif; ?>>
                        <li>
                            <a href="<?php echo url('admin/Yclass/index'); ?>" <?php if(($controller_name == 'Yclass')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>商品分类</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                            <a href="<?php echo url('admin/Goods/index'); ?>" <?php if(($controller_name == 'Goods')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>商品列表</span>
                            </a>
                        </li>
                    </ul>
                </li>

            <li class="tpl-left-nav-item">
                <a href="<?php echo url('admin/Index/clearCache'); ?>" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-terminal"></i>
                    <span>清除缓存<span>

                </a>
            </li>

                <li class="tpl-left-nav-item">
                    <a href="<?php echo url('admin/Index/logout'); ?>" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-key"></i>
                        <span>退出<span>

                    </a>
                </li>
            </ul>
        </div>
    </div>





    

<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
        系统设置
    </div>
    <ol class="am-breadcrumb">
        <li><a href="" class="am-icon-cogs">系统设置</a></li>


    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 基础设置
            </div>



        </div>
        <div class="tpl-block ">

            <div class="am-g tpl-amazeui-form">


                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" method="post" action="<?php echo url('admin/Config/index'); ?>">
                        <div class="am-form-group">
                            <label for="name" class="am-u-sm-3 am-form-label">网站标题</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="<?php echo $info['name']; ?>" name="name" id="name" placeholder="网站标题">

                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="houzui" class="am-u-sm-3 am-form-label">标题后缀</label>
                            <div class="am-u-sm-9">
                                <input type="text"  value="<?php echo $info['houzui']; ?>" name="houzui" id="houzui" placeholder="输入标题后缀">

                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="keywords" class="am-u-sm-3 am-form-label">网站关键词</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="<?php echo $info['keywords']; ?>" name="keywords" id="keywords" placeholder="输入网站关键词">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="description" class="am-u-sm-3 am-form-label">网站描述</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="<?php echo $info['description']; ?>" name="description"  id="description" placeholder="输入网站描述">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="payid" class="am-u-sm-3 am-form-label">支付商户id</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="<?php echo $info['payid']; ?>" name="payid" id="payid" placeholder="请输入支付商户id">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="paykey" class="am-u-sm-3 am-form-label">支付商户秘钥</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="<?php echo $info['paykey']; ?>" name="paykey" id="paykey" placeholder="请输入支付商户秘钥">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="kfqq" class="am-u-sm-3 am-form-label">客服QQ</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="<?php echo $info['kfqq']; ?>" name="kfqq" id="kfqq" placeholder="请输入客服QQ">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="email" class="am-u-sm-3 am-form-label">用户下单提醒邮箱</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="<?php echo $info['email']; ?>" name="email" id="email" placeholder="请输入用户下单提醒邮箱">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="webst" class="am-u-sm-3 am-form-label">网站创建时间</label>
                            <div class="am-u-sm-9">
                                <input type="text" value="<?php echo $info['webst']; ?>" name="webst" class="am-form-field tpl-form-no-bg" placeholder="请选择网站创建时间" data-am-datepicker="" readonly="">

                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>










</div>



</div>



</div>
</body>

</html>
<script src="<?php echo STATIC_PATH; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo STATIC_PATH; ?>/assets/js/amazeui.min.js"></script>
<script src="<?php echo STATIC_PATH; ?>/assets/js/app.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
<script src="<?php echo STATIC_PATH; ?>/layer/layer.js"></script>
<script src="<?php echo STATIC_PATH; ?>/js/admin/index.js"></script>

