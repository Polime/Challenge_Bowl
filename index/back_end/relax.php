<?php 
	require "conn.php";
	$sql = "select * from active order by class,time desc";
	$res = $pdo->query($sql);
?>
			<section id="content">
              <section class="vbox">
                <header class="header bg-white b-b b-light">
                  <p>老人娱乐 <small>(线上及线下)</small></p>
                </header>
                <section class="scrollable wrapper">
                  <div class="row">
                    <div class="col-lg-6">
                      
                        
                          
<?php
	foreach($res as $row){
		if($row['class'] == 0){//未进行
?>	
				<section class="panel panel-default">
                        <header class="panel-heading"> <span class="label bg-dark">15</span> 活动(未进行) </header>
					<section class="panel-body slim-1scro1ll" data-height="230px">
	 					<article class="media"> <span class="pull-left thumb-sm"><img src="images/avatar_default.jpg" class="img-circle"></span>
                            <div class="media-body">
                              <div class="pull-right media-xs text-center text-muted"> 
                              <strong class="h4"><?php echo $row['time']?></strong><br> </div>
                              <a href="#" class="h4"><?php echo $row['headline']; ?></a> <small class="block"><a href="#" class=""><?php echo $row['name'] ?></a> <span class="label label-success">发起者</span></small> <small class="block m-t-sm"><?php echo $row['content']; ?></small> </div>
                          </article>
                          <div class="line pull-in"></div>
                    </section>
                </section>
<?php
		}
		if($row['class'] == 1){//已经进行
?> 
					
                      <section class="panel panel-default">
                        <header class="panel-heading"> <span class="label bg-dark">15</span> 活动(已过期) </header>
                        <section class="panel-body slim-1scro1ll" data-height="230px">
						<article class="media"> <span class="pull-left thumb-sm"><img src="images/avatar_default.jpg" class="img-circle"></span>
                            <div class="media-body">
                              <div class="pull-right media-xs text-center text-muted"> <strong class="h4"><?php echo $row['time']; ?></strong><br></div>
                              <a href="#" class="h4"><?php echo $row['headline']; ?></a> <small class="block"><a href="#" class=""><?php echo $row['name'] ?></a> <span class="label label-success">发起者</span></small> <small class="block m-t-sm"><?php echo $row['content']; ?></small> </div>
                          </article>
                          <div class="line pull-in"></div>
                         </section>
                      </section>
<?php
		}
	}
 ?>
     
                    </div>
                    <div class="col-lg-6">
                      <section class="comment-list block">

<?php
	$resql = "select * from old_mood order by time desc";
	$reres = $pdo->query($resql);
	foreach($reres as $rerow){
?>
						<article id="comment-id-1" class="comment-item"> <a class="pull-left thumb-sm avatar"> <img src="images/avatar.jpg" class="img-circle"> </a> <span class="arrow left"></span>
                          <section class="comment-body panel panel-default">
                            <header class="panel-heading bg-white"> <a href="#"><?php echo $rerow['name'] ?></a>
                              <label class="label bg-info m-l-xs">留言者</label>
                              <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> <?php echo $rerow['time'] ?> </span> </header>
                            <div class="panel-body">
                              <div><?php echo $rerow['mood'] ?></div>
                            </div>
                          </section>
                        </article>		
 <?php
	}
?>
                        <article class="comment-item media" id="comment-form"> <a class="pull-left thumb-sm avatar"><img src="images/avatar.jpg" class="img-circle"></a>
                          <section class="media-body">

                            <form action="./back_end/mood.php" class="m-b-none" method="post">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="在这里输入你的留言" name="mood">
                                <span class="input-group-btn">
                                <input class="btn btn-primary" type="submit" value="留言" />
                                </span> </div>
                            </form>

                          </section>
                        </article>
                      </section>
               		</div>
                  </div>
                </section>
              </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>