<!-- <div id="events" class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Upcoming events</h2>
						<div class="text-center">
							<a href="#" class="prev-events"><img src="images/arrow-left.png" alt=""></a>
							<a href="#" class="next-events"><img src="images/arrow-right.png" alt=""></a>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="images/logo.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="#">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="images/logo.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="images/logo.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="images/logo.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>

                            <div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="images/logo.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
                            <div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="images/logo.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
                            <div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="images/logo.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
                            <div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="images/logo.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
                            
						</div> 
					</div> 
				</div> #events -->
				<div id="events" class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Upcoming events</h2>
						<br>
						<br>
						<div class="row">
							<div class="col-md-12">

					<div class="owl-carousel owl-theme" >
				
						<?php
						$sql="SELECT * FROM event";
						$query=mysqli_query($conn,$sql);

						if(!$query){
							echo "not selected ".mysqli_error($conn);
						}
						while ($row=mysqli_fetch_assoc($query)) {
							# code...
							
						# code...
										

										?>
							<div class="item">			
								<div class="event ">
								
			
										<img src="images/logo.jpg" width="300px" alt="" class="event-image">
										<h3 class="event-title">
											<a href="">
											<?php
										echo ucwords($row['event_name']);
										?>
										</a></h3>
									<div class="event-meta">
											<span class="date"><i class="fa fa-calendar">

										</i> <?php
										echo $row['date'];
										?>
										</span>
										<span class="location">
											<i class="fa fa-map-marker">

										</i> <?php
										echo strtoupper($row['place']);
										?></span>
									</div>
										
								</div>
								</div>							
	<?php
		}
	?>
	</div>
		</div>
</div>
</div>
</div>
	</div>

	