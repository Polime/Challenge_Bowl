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
                  <li class="active"> <a href="hos_home.php" > <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span>数据分析</span> </a> 
                    <ul class="nav lt">
                      <li > <a href="old_info.php" > <i class="fa fa-angle-right"></i> <span>老人档案</span> </a> </li>
                      <li > <a href="old_health.php" ><i class="fa fa-angle-right"></i> <span>老人健康</span> </a> </li>
                       <li > <a href="equipment.php" ><i class="fa fa-angle-right"></i> <span>设备管理</span> </a> </li>
                        <li > <a href="location.php" ><i class="fa fa-angle-right"></i> <span>医生管理</span> </a> </li>
                    </ul>
                  </li>
                  <li > <a href="hos_video.php" >  <i class="fa fa-envelope-o icon"> <b class="bg-primary dker"></b> </i> <span>老人视频</span> </a> </li>
                  <li > <a href="hos_info.php" > <i class="fa fa-pencil icon"> <b class="bg-info"></b> </i> <span>应急报警</span> </a> </li>
                </ul>
              </nav>
             </div>
          </section>
          <footer class="footer lt hidden-xs b-t b-light">
            <div id="chat" class="dropup">
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
            <p>  <strong>数据分析</strong> 功能列表</p>
          </header>
          <section class="scrollable wrapper">
            <div class="row">
              <div class="col-sm-6 portlet">
                <section class="panel panel-info portlet-item">
                  <header class="panel-heading"> 老人档案 </header>
                  <div class="list-group bg-white"> 
                   <a href="#" class="list-group-item"> 新增老人 </a>
                   <a href="#" class="list-group-item"> 老人档案 </a> 
                   <a href="#" class="list-group-item"> 审核中档案 </a> 
                   <a href="#" class="list-group-item"> 未审核档案 </a> 
                 </div>
                </section>
              </div>
              <div class="col-sm-6 portlet">
                <section class="panel panel-success portlet-item">
                  <header class="panel-heading"> 老人健康 </header>
                  <ul class="list-group alt">
                    <li class="list-group-item">
                      <div class="media"> <span class="pull-left thumb-sm"></span>

                        <div class="media-body">
                          <div><a href="#">健康评测</a></div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media"> <span class="pull-left thumb-sm"></span>
                        <div class="media-body">
                          <div><a href="#">体检记录</a></div>
                        </div>
                     </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media"> <span class="pull-left thumb-sm"></span>

                        <div class="media-body">
                          <div><a href="#">健康随访</a></div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media"> <span class="pull-left thumb-sm"></span>

                        <div class="media-body">
                          <div><a href="#">健康预警</a></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </section>
              </div>

              <div class="col-sm-6 portlet">
                <section class="panel panel-success portlet-item">
                  <header class="panel-heading"> 设备管理 </header>
                  <ul class="list-group alt">
                    <li class="list-group-item">
                      <div class="media"> <span class="pull-left thumb-sm"></span>

                        <div class="media-body">
                          <div><a href="#">设备列表</a></div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media"> <span class="pull-left thumb-sm"></span>
                        <div class="media-body">
                          <div><a href="#">设备信息</a></div>
                        </div>
                     </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media"> <span class="pull-left thumb-sm"></span>

                        <div class="media-body">
                          <div><a href="#">设备型号维护</a></div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media"> <span class="pull-left thumb-sm"></span>
                        <div class="media-body">
                          <div><a href="#">厂商信息</a></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </section>
              </div>
              <div class="col-sm-6 portlet">
                <section class="panel panel-info portlet-item">
                  <header class="panel-heading"> 医生管理 </header>
                  <div class="list-group bg-white"> 
                   <a href="#" class="list-group-item"> 老人就诊管理 </a>
                   <a href="#" class="list-group-item"> 视频记录 </a> 
                   <a href="#" class="list-group-item"> 医生评分 </a> 
                 </div>
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
