
				<div id="pastors" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<h2 class="section-title">Meet our pastors</h2>
						<p class="section-intro">The men and women of God who has been anionted with water and holyspirit</p>
						<div class="row"> 
						  <?php
                          include_once("conn.php");
						  if (!isset($_POST['pastor'])) {
							# code...
						
                          $sql="SELECT * FROM pastors limit 0,6";
                          $query=mysqli_query($conn,$sql);
                          if(!$query){
                            echo"not selected ".mysqli_error($conn);
                          }
                                # code...
                           while ($row=mysqli_fetch_assoc($query)) {
                      
                        ?>
						
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="pastor">
									<img src="upload/<?php echo $row['img'];?>" alt="" class="pastor-image" style="background-image: url('images/logo.jpg'); background-position:center;">
									<h3 class="pastor-name"> <span><?php echo ucwords($row['tittle']);?> </span>
                                     <?php echo ucwords($row['Oname'])." ". ucwords($row['lname']);?></h3>
									<small class="date">Joined <?php echo $row['year'];?></small>
								</div>
							</div>
                            <?php
                              }   }else{
								
								$sql="SELECT * FROM pastors ";
								$query=mysqli_query($conn,$sql);
								if(!$query){
								  echo"not selected ".mysqli_error($conn);
								}
									
								?>
								  
								<?php
								# code...
								$sql1="SELECT count(*) as total FROM pastors";
									$query1=mysqli_query($conn,$sql1);
									$data= mysqli_fetch_row($query1);
								if ($data[0]>0) {
								 while ($row=mysqli_fetch_assoc($query)) {
							
							  ?>
							
								  <div class="col-md-2 col-sm-3 col-xs-6">
									  <div class="pastor" >
							
										  <img src="upload/<?php echo $row['img'];?>" alt="" class="pastor-image" style="background-image: url('images/logo.jpg'); background-position:center;">
										  <h3 class="pastor-name"> <span><?php echo ucwords($row['tittle']);?> </span>
										   <?php echo ucwords($row['Oname'])." ". ucwords($row['lname']);?></h3>
										  <small class="date">Joined <?php echo $row['year'];?></small>
									
									  </div>
								  </div>
								  <?php
									} }  }
							
                            ?>
							
						</div> <!-- .row -->

						<form action="" method="post">
							<?php
								$sql1="SELECT count(*) as total FROM pastors";
								$query1=mysqli_query($conn,$sql1);
								$data= mysqli_fetch_row($query1);
							$total=$data[0];
									
							if ($total > 10) {
							if (!isset($_POST['pastor'])) {
								# code...
							

							?>
						<div class="text-center">
							<button class="button" style="width:300px;"  name="pastor" style="outline:none;">View all our pastors</button>
						</div>
						<?php
							}
						}
						?>
						</form>
					</div> <!-- .container -->
				</div> <!-- #pastors -->