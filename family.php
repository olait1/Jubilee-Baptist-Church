
				<div id="families" class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Our families</h2>
						<br>
						<p class="section-intro">These are the faces of the blessed families in Jubilee Baptist Church</p>

						<div class="family-list">

						<?php
									// include_once("conn.php");
									if (!isset($_POST['family'])) {
										# code...
									
									$sql="SELECT *  FROM family LIMIT 0,10";
									$query=mysqli_query($conn,$sql);
								}else{
											
									$sql="SELECT *  FROM family";
									$query=mysqli_query($conn,$sql);
								}
									$sql1="SELECT count(*) as total FROM family";
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
							<figure class="family">
								<img src="upload/<?php echo $row['img'];?>" alt="" style="background-image: url('images/logo.jpg'); background-position:center;">
								<figcaption>
									<h3 class="family-name"><?php
									echo $row['tittle']." ". $row['surname'];
									?></h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<?php
									}}

                            ?>
						</div>
						<?php
									
									$total=$data[0];
									
											if ($total > 10) {
												if (!isset($_POST['family'])) {
													# code...
												
									?>
									<form action="" method="post">
						<hr class="space">

						<div class="text-center">
							<button name="family" style="width:200px;" class="button">View all families</button>
						</div>

						</form>
						<?php
										}}
							?>
					</div> <!-- .container -->
				</div> <!-- #families -->
