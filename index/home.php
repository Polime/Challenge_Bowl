<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title>Famolyhealth</title>
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
    <div class="navbar-header aside-md"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="images/logo.png" class="m-r-sm">Familyheath</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a> </div>
    <ul class="nav navbar-nav hidden-xs">
      <li class="dropdown"> <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <i class="fa fa-building-o"></i> <span class="font-bold">本周</span> </a>
        <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
          <div class="wrapper lter m-t-n-xs"> <a href="#" class="thumb pull-left m-r"> <img src="images/avatar.jpg" class="img-circle"> </a>
            <div class="clear"> <a href="#"><span class="text-white font-bold">名字</a></span> <small class="block">住址</small> <a href="#" class="btn btn-xs btn-success m-t-xs">本周评分:90</a> </div>
          </div>
          <div class="row m-l-none m-r-none m-b-n-xs text-center">
            <div class="col-xs-4">
              <div class="padder-v"> <span class="m-b-xs h4 block text-white">2,035</span> <small class="text-muted">平均步数</small> </div>
            </div>
            <div class="col-xs-4 dk">
              <div class="padder-v"> <span class="m-b-xs h4 block text-white">10</span> <small class="text-muted">睡眠时间</small> </div>
            </div>
            <div class="col-xs-4">
              <div class="padder-v"> <span class="m-b-xs h4 block text-white">85</span> <small class="text-muted">健康分数</small> </div>
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
          <li> <a href="#">设置</a>
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
                  <li class="active"> <a href="home.php" > <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span>健康管理</span> </a> </li>
                  <li > <a href="doc_advice.php" > <i class="fa fa-columns icon"> <b class="bg-warning"></b> </i> <span class="pull-right"> </span> <span>医生建议</span> </a></li>
                  <li > <a href="comm_notice.php" > <i class="fa fa-flask icon"> <b class="bg-success"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>社区活动</span> </a>
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
          <section class="scrollable padder">
            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
              <li><a href="index.html"><i class="fa fa-home"></i> 主页</a></li>
              <li class="active">健康管理</li>
            </ul>
            <div class="m-b-md">
              <h3 class="m-b-none">健康管理</h3>
              <small>欢迎回来，XXX</small> </div>
            <section class="panel panel-default">
              <div class="row m-l-none m-r-none bg-light lter">
                <div class="col-sm-6 col-md-3 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-male fa-stack-1x text-white"></i> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong>25,00</strong></span> <small class="text-muted text-uc">今日步数</small> </a> </div>
                <div class="col-sm-6 col-md-3 padder-v b-r b-light lt"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-warning"></i> <i class="fa fa-bug fa-stack-1x text-white"></i> <span class="easypiechart pos-abt" data-percent="90" data-line-width="4" data-track-Color="#fff" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="2000" data-target="#bugs" data-update="0"></span> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="bugs">0</strong></span> <small class="text-muted text-uc">心率评分</small> </a> </div>
                <div class="col-sm-6 col-md-3 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-fire-extinguisher fa-stack-1x text-white"></i> <span class="easypiechart pos-abt" data-percent="80" data-line-width="4" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="3000" data-target="#firers" data-update="0"></span> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="firers">0</strong></span> <small class="text-muted text-uc">健康评分</small> </a> </div>
                <div class="col-sm-6 col-md-3 padder-v b-r b-light lt"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x icon-muted"></i> <i class="fa fa-clock-o fa-stack-1x text-white"></i> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong>8.5</strong></span> <small class="text-muted text-uc">睡眠时间</small> </a> </div>
              </div>
            </section>
            <div class="row">
              <div class="col-md-8">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">心率记录<span class="pull-right">星期五</span></header>
                  <div class="bg-light dk wrapper">
                    <div class="text-center m-b-n m-t-sm">
                      <div class="sparkline" data-type="line" data-height="185" data-width="100%" data-line-width="2" data-line-color="#dddddd" data-spot-color="#bbbbbb" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-resize="true" values="100,90,80,100,80,99,88,71,91,89,101,96,81,77"></div>
                    </div>
                  </div>
                  <footer class="panel-footer bg-white no-padder">
                    <div class="row text-center no-gutter">
                      <div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">1</span> <small class="text-muted m-b block">最高心率</small> </div>
                      <div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">1</span> <small class="text-muted m-b block">最低心率</small> </div>
                      <div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">1</span> <small class="text-muted m-b block">平均心率</small> </div>
                      <div class="col-xs-3"> <span class="h4 font-bold m-t block">1</span> <small class="text-muted m-b block">心率评分</small> </div>
                    </div>
                  </footer>
                </section>
              </div>
              <div class="col-md-4">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">环境<span class="pull-right">星期五</span></header>
                  <div class="bg-light dk wrapper">
                    <div class="text-center m-b-n m-t-sm">
                      <div class="sparkline" data-type="line" data-height="65" data-width="100%" data-line-width="2" data-line-color="#dddddd" data-spot-color="#bbbbbb" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-resize="true" values="32,34.5,25,25,25,30,38"></div>
                      <div class="sparkline inline" data-type="bar" data-height="65" data-bar-width="6" data-bar-spacing="30" data-bar-color="#65bd77">40,36,33,44,31,39,38</div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <div> <span class="text-muted">天气</span> <span class="h3 block">1</span> </div>
                    <div class="line pull-in"></div>
                    <div class="row m-t-sm">
                      <div class="col-xs-4"> <small class="text-muted block">温度</small> <span>1</span> </div>
                      <div class="col-xs-4"> <small class="text-muted block">湿度</small> <span>1</span> </div>
                      <div class="col-xs-4"> <small class="text-muted block">风级</small> <span>1</span> </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <h4 class="m-t-none">今日任务</h4>
                <ul class="list-group gutter list-group-lg list-group-sp sortable">
                  <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-2" data-toggle="class:text-lt text-danger"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-danger"></i> </a> </span>
                    <div class="clear" id="todo-2"> 1 </div>
                  </li>
                  <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-3" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span>
                    <div class="clear" id="todo-3"> 1 </div>
                  </li>
                  <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-4" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span>
                    <div class="clear" id="todo-4"> 1 </div>
                  </li>
                  <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-5" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span>
                    <div class="clear" id="todo-5"> 1 </div>
                  </li>
                  <li class="list-group-item box-shadow"> <a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> </a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-6" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span>
                    <div class="clear" id="todo-6"> 1 </div>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <section class="panel b-light">
                  <header class="panel-heading bg-primary dker no-border"><strong>日历</strong></header>
                  <div id="calendar" class="bg-primary m-l-n-xxs m-r-n-xxs"></div>
                  <div class="list-group"> <a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-danger">7:30</span> 散步 </a> <a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-success">9:30</span> 出门买菜 </a> </div>
                </section>
              </div>
            </div>
          </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>

      <aside class="bg-light lter b-l aside-md hide" id="notes">
        <div class="wrapper">Familyhealth</div>
      </aside>
    </section>
  </section>
</section>
<script src="js/app.v2.js"></script><script src="js/charts/easypiechart/jquery.easy-pie-chart.js" cache="false"></script> <script src="js/charts/sparkline/jquery.sparkline.min.js" cache="false"></script> <script src="js/charts/flot/jquery.flot.min.js" cache="false"></script> <script src="js/charts/flot/jquery.flot.tooltip.min.js" cache="false"></script> <script src="js/charts/flot/jquery.flot.resize.js" cache="false"></script> <script src="js/charts/flot/jquery.flot.grow.js" cache="false"></script> <script src="js/charts/flot/demo.js" cache="false"></script> <script src="js/calendar/bootstrap_calendar.js" cache="false"></script> <script src="js/calendar/demo.js" cache="false"></script> <script src="js/sortable/jquery.sortable.js" cache="false"></script>
</body>
</html>
