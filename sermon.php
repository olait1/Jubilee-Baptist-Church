
				<div id="seremons" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<h3 class="section-title">Upcoming seremons</h3>
								<ul class="seremon-list">
									<?php
									include_once("conn.php");
									if (!isset($_POST['up_sermon'])) {
										# code...
									
									$sql="SELECT *  FROM upcoming_sermons LIMIT 0,2";
									$query=mysqli_query($conn,$sql);
								}else{
											
									$sql="SELECT *  FROM upcoming_sermons ";
									$query=mysqli_query($conn,$sql);
								}
									$sql1="SELECT count(*) as total FROM upcoming_sermons";
									$query1=mysqli_query($conn,$sql1);
									$data= mysqli_fetch_row($query1);
								
									if (!$query) {
										# code...
										echo" not selected ".mysqli_error($conn);
									}
									if ($data[0]>0) {
										# code...
									
									while ($row=mysqli_fetch_assoc($query)) {
										# code...
									
									?>
									<li>
										<h3 class="seremon-title"><a href="#"><?php
										echo $row['tittle'];
										?></a></h3>
										<p><?php
										echo $row['short_note_on_tittle'];
										?></p>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date: </strong> <?php
											echo $row['date'];
											?></span>
											<span><i class="fa fa-user"></i> <strong>Servant Of God : </strong><?php
											echo $row['pastor'];
											?></span>
										</div>
									</li>
									<?php
									}
								}

									?>
								</ul>
									<?php
									
									$total=$data[0];
									
											if ($total > 2) {
												if (!isset($_POST['up_sermon'])) {
													# code...
												
									?>
									<form action="" method="post">
								<button name="up_sermon" style="width:300px;"  class="button">See all upcoming seremons</button>
								</form>
						<?php
										}}
							?>
							
							</div>
							<div class="col-md-5 col-md-offset-2">
								<h3 class="section-title">Latest seremons</h3>
								<ul class="seremon-list">
								<?php
									// include_once("conn.php");
									if (!isset($_POST['l_sermon'])) {
										# code...
									
									$sql="SELECT *  FROM sermon LIMIT 0,2";
									$query=mysqli_query($conn,$sql);
								}else{
											
									$sql="SELECT *  FROM sermon";
									$query=mysqli_query($conn,$sql);
								}
									$sql1="SELECT count(*) as total FROM sermon";
									$query1=mysqli_query($conn,$sql1);
									$data= mysqli_fetch_row($query1);
								
									if (!$query) {
										# code...
										echo" not selected ".mysqli_error($conn);
									}
									if ($data[0]>0) {
										# code...
									
									while ($row=mysqli_fetch_assoc($query)) {
										# code...
									
									?>
									<li>
										<h3 class="seremon-title"><a href="#"><?php echo $row['tittle'];?></a></h3>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong> <?php echo $row['date'];?></span>
											<span><i class="fa fa-user"></i> <strong>Servant Of God :</strong> <?php echo $row['pastor_tittle']." ". $row['pastor'];?></span>
										</div>
										<a href="https://files.fm/f/cfc7b9rw6" class="button secondary"><img src="images/icon-headset.png" alt="" class="icon"> Audio record</a>
										<a href="https://files.fm/u/r7d7pxqmy" class="button secondary"><img src="images/icon-film.png" alt=""> Video record</a>
									</li>
									<?php
									}
								}

									?>
								</ul>
								<?php
									
									$total=$data[0];
									
											if ($total > 2) {
												if (!isset($_POST['l_sermon'])) {
													# code...
												
									?>
									<form action="" method="post">
								<button style="width:300px" name="l_sermon" class="button">See all latest seremons</button>
								</form>
						<?php
										}}
							?>
							</div>
						</div> <!-- .row -->
						<div class="row " style="margin:50px 0;">
							<div class="col-md-12">

							
								<h1 style="text-align:center; color:#eee;">WATCH LIVE PROGRAM</h1>
							<iframe width="100%" height="480" src="https://www.youtube.com/embed/"
								 title="Jubilee Baptist Church Ogbomoso Live Program" 
								 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
								 allowfullscreen></iframe>

							</div>


						</div>
					</div> <!-- .container -->
				</div> <!-- #seremons -->