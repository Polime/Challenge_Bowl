<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title>Notebook | Web Application</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/app.v2.css" type="text/css" />
<link rel="stylesheet" href="css/font.css" type="text/css" cache="false" />
<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" cache="false" />
<link rel="stylesheet" href="js/grid/gallery.css" type="text/css" cache="false" />
</head>
<body>
<section class="vbox">
  <header class="bg-dark dk header navbar navbar-fixed-top-xs">
    <div class="navbar-header aside-md"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="images/logo.png" class="m-r-sm">Familyhealth</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a> </div>
    <ul class="nav navbar-nav hidden-xs">
      <li class="dropdown"> <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <i class="fa fa-building-o"></i> <span class="font-bold">本周</span> </a>
        <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
          <div class="wrapper lter m-t-n-xs"> <a href="#" class="thumb pull-left m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
            <div class="clear"> <a href="#"><span class="text-white font-bold">名字</a></span> <small class="block">住址</small> <a href="#" class="btn btn-xs btn-success m-t-xs">本周评分</a> </div>
          </div>
          <div class="row m-l-none m-r-none m-b-n-xs text-center">
            <div class="col-xs-4">
              <div class="padder-v"> <span class="m-b-xs h4 block text-white">245</span> <small class="text-muted">平均步数</small> </div>
            </div>
            <div class="col-xs-4 dk">
              <div class="padder-v"> <span class="m-b-xs h4 block text-white">55</span> <small class="text-muted">睡眠时间</small> </div>
            </div>
            <div class="col-xs-4">
              <div class="padder-v"> <span class="m-b-xs h4 block text-white">2,035</span> <small class="text-muted">健康分数</small> </div>
            </div>
          </div>
        </section>
      </li>

    </ul>
    <ul class="nav navbar-nav navbar-right hidden-xs nav-user">
      <li class="hidden-xs"> <a href="#" class="dropdown-toggle dk" data-toggle="dropdown"> <i class="fa fa-bell"></i> </a>
        <section class="dropdown-menu aside-xl">
          <section class="panel bg-white">
            <header class="panel-heading b-light bg-light"> <strong>你有 <span class="">1</span> 消息</strong> </header>
          </section>
        </section>
      </li>
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/avatar.jpg"> </span> 名字 <b class="caret"></b> </a>
        <ul class="dropdown-menu animated fadeInRight">
          <span class="arrow top"></span>
          <li> <a href="#">设置</a> </li>
          <li> <a href="#"> 通知 </a> </li>
          <li> <a href="docs.html">帮助</a> </li>
          <li class="divider"></li>
          <li> <a href="modal.lockme.html" data-toggle="ajaxModal" >退出</a> </li>
        </ul>
      </li>
    </ul>
  </header>
  <section>
    <section class="hbox stretch">
      <aside class="bg-light lter b-r aside-md hidden-print" id="nav">
        <section class="vbox">
          <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
              <nav class="nav-primary hidden-xs">
                <ul class="nav">
                  <li > <a href="home.php" > <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span>健康管理</span> </a> </li>
                  <li > <a href="doc_advice.php" > <i class="fa fa-columns icon"> <b class="bg-warning"></b> </i> <span class="pull-right"> </span> <span>医生建议</span> </a></li>
                  <li class="active"> <a href="#" > <i class="fa fa-flask icon"> <b class="bg-success"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>社区活动</span> </a>
                    <ul class="nav lt">
                      <li > <a href="comm_notice.php" > <i class="fa fa-angle-right"></i> <span>社区公告</span> </a> </li>
                      <li > <a href="relax.php" ><i class="fa fa-angle-right"></i> <span>老人娱乐</span> </a> </li>
                    </ul>
                  </li>
                  <li > <a href="video.php" >  <i class="fa fa-envelope-o icon"> <b class="bg-primary dker"></b> </i> <span>医生视屏</span> </a> </li>
                  <li > <a href="information.php" > <i class="fa fa-pencil icon"> <b class="bg-info"></b> </i> <span>应急报警</span> </a> </li>
                </ul>
              </nav>
             </div>
          </section>
          <footer class="footer lt hidden-xs b-t b-light">
            <div id="chat" class="dropup">
              <section class="dropdown-menu on aside-md m-l-n">
                <section class="panel bg-white">
                  <header class="panel-heading b-b b-light">Active chats</header>
                  <div class="panel-body animated fadeInRight">
                    <p class="text-sm">No active chats.</p>
                    <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                  </div>
                </section>
              </section>
            </div>
            <div id="invite" class="dropup">
              <section class="dropdown-menu on aside-md m-l-n">
                <section class="panel bg-white">
                  <header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header>
                  <div class="panel-body animated fadeInRight">
                    <p class="text-sm">No contacts in your lists.</p>
                    <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                  </div>
                </section>
              </section>
            </div>
            <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-default btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>

          </footer>
        </section>
      </aside>

            <section id="content">
              <section class="vbox">
                <header class="header bg-white b-b b-light">
                  <p>老人娱乐 <small>(线上及线下)</small></p>
                </header>
                <section class="scrollable wrapper">
                  <div class="row">
                    <div class="col-lg-6"> <!-- chat -->

                      <!-- /chat -->
                      <section class="panel panel-default">
                        <header class="panel-heading"> <span class="label bg-dark">15</span> 活动(未进行) </header>
                        <section class="panel-body slim-1scro1ll" data-height="230px">
                          <article class="media"> <span class="pull-left thumb-sm"><img src="images/avatar_default.jpg" class="img-circle"></span>
                            <div class="media-body">
                              <div class="pull-right media-xs text-center text-muted"> <strong class="h4">12:30</strong><br>
                                <small class="label bg-light">1天后</small> </div>
                              <a href="#" class="h4">结伴爬山</a> <small class="block"><a href="#" class="">李奶奶</a> <span class="label label-success">发起者</span></small> <small class="block m-t-sm">大家快来加入,一起去爬山.</small> </div>
                          </article>
                          <div class="line pull-in"></div>
                          <article class="media"> <span class="pull-left thumb-sm"><i class="fa fa-file-o fa-3x icon-muted"></i></span>
                            <div class="media-body">
                              <div class="pull-right media-xs text-center text-muted"> <strong class="h4">20:34</strong><br>
                                <small class="label bg-light">今天</small> </div>
                              <a href="#" class="h4">下象棋</a> <small class="block"><a href="#" class="">刘大爷</a> <span class="label label-info">发起者</span></small> <small class="block m-t-sm">闲着没意思,找个人陪我下象棋.</small> </div>
                          </article>
                        </section>
                      </section>
                      <section class="panel panel-default">
                        <header class="panel-heading"> <span class="label bg-dark">15</span> 活动(已过期) </header>
                        <section class="panel-body slim-1scro1ll" data-height="230px">
                          <article class="media"> <span class="pull-left thumb-sm"><img src="images/avatar_default.jpg" class="img-circle"></span>
                            <div class="media-body">
                              <div class="pull-right media-xs text-center text-muted"> <strong class="h4">12:30</strong><br>
                                <small class="label bg-light">1天前</small> </div>
                              <a href="#" class="h4">结伴爬山</a> <small class="block"><a href="#" class="">李奶奶</a> <span class="label label-success">发起者</span></small> <small class="block m-t-sm">大家快来加入,一起去爬山.</small> </div>
                          </article>
                          <div class="line pull-in"></div>
                          <article class="media"> <span class="pull-left thumb-sm"><i class="fa fa-file-o fa-3x icon-muted"></i></span>
                            <div class="media-body">
                              <div class="pull-right media-xs text-center text-muted"> <strong class="h4">20:34</strong><br>
                                <small class="label bg-light">3天前</small> </div>
                              <a href="#" class="h4">下象棋</a> <small class="block"><a href="#" class="">刘大爷</a> <span class="label label-info">发起者</span></small> <small class="block m-t-sm">闲着没意思,找个人陪我下象棋.</small> </div>
                          </article>
                        </section>
                      </section>
                    </div>
                    <div class="col-lg-6"> <!-- .comment-list -->
                      <section class="comment-list block">
                        <article id="comment-id-1" class="comment-item"> <a class="pull-left thumb-sm avatar"> <img src="images/avatar.jpg" class="img-circle"> </a> <span class="arrow left"></span>
                          <section class="comment-body panel panel-default">
                            <header class="panel-heading bg-white"> <a href="#">王奶奶</a>
                              <label class="label bg-info m-l-xs">留言者</label>
                              <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> 5分钟前 </span> </header>
                            <div class="panel-body">
                              <div>今天玩得真开心.</div>
                              <div class="comment-action m-t-sm"> <a href="#comment-form" class="btn btn-default btn-xs"> <i class="fa fa-mail-reply text-muted"></i> 评论 </a> </div>
                            </div>
                          </section>
                        </article>
                        <!-- .comment-reply -->
                        <article id="comment-id-2" class="comment-item comment-reply"> <a class="pull-left thumb-sm avatar"> <img src="images/avatar.jpg" class="img-circle"> </a> <span class="arrow left"></span>
                          <section class="comment-body panel panel-default text-sm">
                            <div class="panel-body"> <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> 刚刚 </span> <a href="#">孙大爷</a>
                              <label class="label bg-dark m-l-xs">回复者</label>
                              我也是. </div>
                          </section>
                        </article>
                        <!-- / .comment-reply -->
                        <article class="comment-item media" id="comment-form"> <a class="pull-left thumb-sm avatar"><img src="images/avatar.jpg" class="img-circle"></a>
                          <section class="media-body">
                            <form action="" class="m-b-none">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="在这里输入你的留言">
                                <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">留言</button>
                                </span> </div>
                            </form>
                          </section>
                        </article>
                      </section>
                      <!-- / .comment-list --> </div>
                  </div>
                </section>
              </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>

      <aside class="bg-light lter b-l aside-md hide" id="notes">
        <div class="wrapper">Notification</div>
      </aside>
    </section>
  </section>
</section>
<script src="js/app.v2.js"></script><script src="js/charts/easypiechart/jquery.easy-pie-chart.js" cache="false"></script> <script src="js/charts/sparkline/jquery.sparkline.min.js" cache="false"></script> <script src="js/charts/flot/jquery.flot.min.js" cache="false"></script> <script src="js/charts/flot/jquery.flot.tooltip.min.js" cache="false"></script> <script src="js/charts/flot/jquery.flot.resize.js" cache="false"></script> <script src="js/charts/flot/jquery.flot.grow.js" cache="false"></script> <script src="js/charts/flot/demo.js" cache="false"></script> <script src="js/calendar/bootstrap_calendar.js" cache="false"></script> <script src="js/calendar/demo.js" cache="false"></script> <script src="js/sortable/jquery.sortable.js" cache="false"></script>
</body>
</html>
