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
                  <li > <a href="#" > <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span>健康管理</span> </a> </li>
                  <li class="active"> <a href="#" > <i class="fa fa-columns icon"> <b class="bg-warning"></b> </i> <span class="pull-right"> </span> <span>医生建议</span> </a></li>
                  <li > <a href="#" > <i class="fa fa-flask icon"> <b class="bg-success"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>社区活动</span> </a>
                    <ul class="nav lt">
                      <li > <a href="#" > <i class="fa fa-angle-right"></i> <span>社区公告</span> </a> </li>
                      <li > <a href="#" ><i class="fa fa-angle-right"></i> <span>老人娱乐</span> </a> </li>
                    </ul>
                  </li>
                  <li > <a href="#" >  <i class="fa fa-envelope-o icon"> <b class="bg-primary dker"></b> </i> <span>医生视屏</span> </a> </li>
                  <li > <a href="#" > <i class="fa fa-pencil icon"> <b class="bg-info"></b> </i> <span>应急报警</span> </a> </li>
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
          <section class="scrollable">
            <div class="wrapper b-b b-light"> <a href="#" data-toggle="class" class="pull-left m-r-sm"><i class="fa fa-star-o fa-1x text"></i><i class="fa fa-star text-warning fa-1x text-active"></i></a> <a href="#email-content, #email-list" data-toggle="class:show,hide" class="pull-right text"> <i class="fa fa-trash-o"></i> </a>
              <h4 class="m-n"> Kickoff meeting</h4>
            </div>
            <div class="text-sm padder m-t">
              <div class="block clearfix m-b"> <a href="#" class="thumb-xs inline"><img src="images/avatar.jpg" class="img-circle"></a> <span class="inline m-t-xs">Mika Sokeil &lt;mica_sokeil@gmail.com&gt; to me</span>
                <div class="pull-right inline">May 12 (<em>4 days ago</em>)
                  <div class="btn-group">
                    <button class="btn btn-default btn-xs" data-toggle="tooltip" data-title="Reply"><i class="fa fa-reply"></i></button>
                    <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right">
                      <li><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
                      <li><a href="#"><i class="fa fa-signout"></i> Forward</a></li>
                      <li><a href="#">Add Mika Sokeil to contact list</a></li>
                      <li><a href="#">Mark as unread</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Delete this message</a></li>
                      <li><a href="#">Report spam</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="line pull-in"></div>
              <p>Mr. Soe</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
              <blockquote> <em>Morbi nec nunc condimentum, egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula. Nunc placerat purus quam, ac adipiscing arcu rutrum eu. Vestibulum adipiscing ut augue ut auctor. Vestibulum nec lorem imperdiet nibh mollis gravida ut a justo.<br>
                <br>
                Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis</em> </blockquote>
              <div class="show">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend</p>
              </div>
              <p>Best Regards<br>
                Mical</p>
            </div>
            <div class="padder">
              <div class="panel text-sm bg-light">
                <div class="panel-body"> Click here to <a href="#">Reply</a> or <a href="#">Forward</a> </div>
              </div>
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
