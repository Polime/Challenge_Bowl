<?php 
	require "conn.php";
	$sql = "select * from comm_notice order by time desc";
	$res = $pdo->query($sql);
?>
<section id="content">
        <section class="hbox stretch">
            <aside>
                <section class="vbox">
                    <header class="header bg-white b-b b-light">
                        <p>社区公告</p>
                    </header>
                    <section class="scrollable wrapper">
                        <div class="timeline">
                            <article class="timeline-item active">
                                <div class="timeline-caption">
                                    <div class="panel bg-primary lter no-borders">
                                        <div class="panel-body"> <span class="timeline-icon"><i class="fa fa-bell-o time-icon bg-primary"></i></span>
                                            <h5> <span>小区公告</span> </h5>
                                            <div class="m-t-sm timeline-action"> <span class="h3 pull-left m-r-sm">2017</span>
                                                <button class="btn btn-sm btn-default btn-bg">龙潭社区</button>
                                                <button class="btn btn-sm btn-default btn-bg">社区公告</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
<?php
	foreach ($res as $row){
		if($row['id']%2 == 1){
?>
							<article class="timeline-item">
                                <div class="timeline-caption">
                                    <div class="panel panel-default">
                                        <div class="panel-body"> <span class="arrow left"></span> <span class="timeline-icon"><i class="fa fa-phone time-icon bg-primary"></i></span> <span class="timeline-date"><?php echo $row['time'] ?></span>
                                            <h5> <span>全小区</span> <?php echo $row['notice'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </article>
  <?php 
	}else{
   ?>
							<article class="timeline-item alt">
                                <div class="timeline-caption">
                                    <div class="panel panel-default">
                                        <div class="panel-body"> <span class="arrow right"></span> <span class="timeline-icon"><i class="fa fa-male time-icon bg-success"></i></span> <span class="timeline-date"><?php echo $row['time'] ?></span>
                                            <h5> <span>全小区</span></h5>
                                            <p><?php echo $row['notice'] ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </article>
<?php
		}
	}
 ?>
  
 	
                            <div class="timeline-footer"><a href="#"><i class="fa fa-plus time-icon inline-block bg-dark"></i></a></div>
                        </div>
                    </section>
                </section>
            </aside>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
    </section>
