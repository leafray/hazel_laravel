<!-- header top -->
<div class="ht-wrapper d-none d-sm-block">
	<div class="hl-default hl-p container">
		<div class="row">
			<div class="col-6">
				<div class="today-date">June 29, 2019</div>
			</div>
			<div class="col-6">
				<ul class="list-inline ht-slr">
					<li class="list-inline-item ht-social">
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#">
								  <i class="fa fa-facebook" title="Facebook"></i>
								</a>
							</li>

							<li class="list-inline-item">
								<a href="#">
								  <i class="fa fa-twitter" title="Twitter"></i>
								</a>
							</li>

							<li class="list-inline-item">
								<a href="#">
								  <i class="fa fa-google-plus" title="Google Plus"></i>
								</a>
							</li>

							<li class="list-inline-item">
								<a href="#">
								  <i class="fa fa-linkedin" title="Linkedin"></i>
								</a>
							</li>

							<li class="list-inline-item">
								<a href="#">
								  <i class="fa fa-youtube" title="Youtube"></i>
								</a>
							</li>

							<li class="list-inline-item">
								<a href="#">
								  <i class="fa fa-instagram" title="Instagram"></i>
								</a>
							</li>

							<li class="list-inline-item">
								<a href="#">
								  <i class="fa fa-vimeo" title="Vimeo"></i>
								</a>
							</li>
						</ul>
					</li> <!-- .ht-scoial -->
					<li class="list-inline-item ht-logreg"></li> <!-- .ht-logreg -->
				</ul>
			</div>
		</div>
	</div>
</div> <!-- .ht-wrapper -->

<div class="logreg">
	<div class="lr-item">
		<div class="lr-header"></div>
		<ul class="list-inline lr-nav clearfix">
			<li class="list-inline-item active">
				<a href="#">Sign In</a>
			</li>
			<li class="list-inline-item">
				<a href="#">Sign Up</a>
			</li>
		</ul>
		<ul class="list-inline lr-content">
			<li>
				<div class="input-group flex-nowrap">
					<div class="input-group-prepend">
				    	<span class="input-group-text" id="addon-wrapping">
				    		<i class="fa fa-user-o" aria-hidden="true"></i>
				    	</span>
				  	</div>
				  	<input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
				</div>
				<div class="input-group flex-nowrap">
					<div class="input-group-prepend">
				    	<span class="input-group-text" id="addon-wrapping">
				    		<i class="fa fa-lock" aria-hidden="true"></i>
				    	</span>
				  	</div>
				  	<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
				</div>
				<div class="input-group flex-nowrap">
					<div class="remember">
						<input type="checkbox" checked="">
						<label for="remember">Remember me</label>
					</div>
					<div class="forgot-pass">
						<a href="#">Forgot Password</a>
					</div>
				</div>
				<div class="input-group flex-nowrap">
					<button type="button" class="btn btn-primary">Sign in</button>
				</div>
			</li>
			<li>
				<div class="input-group flex-nowrap">
					<div class="input-group-prepend">
				    	<span class="input-group-text" id="addon-wrapping">
				    		<i class="fa fa-user-o" aria-hidden="true"></i>
				    	</span>
				  	</div>
				  	<input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
				</div>
				<div class="input-group flex-nowrap">
					<div class="input-group-prepend">
				    	<span class="input-group-text" id="addon-wrapping">
				    		<i class="fa fa-at" aria-hidden="true"></i>
				    	</span>
				  	</div>
				  	<input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
				</div>
				<div class="input-group flex-nowrap">
					<div class="input-group-prepend">
				    	<span class="input-group-text" id="addon-wrapping">
				    		<i class="fa fa-lock" aria-hidden="true"></i>
				    	</span>
				  	</div>
				  	<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
				</div>
				<div class="input-group flex-nowrap">
					<button type="button" class="btn btn-primary">Sign up</button>
				</div>
				<span class="privacy">By creating this account, you agree to our Privacy Policy & Cookie Policy.</span>
			</li>
		</ul>
	</div>
</div> <!-- .log-reg -->

<!-- header bottom -->
<div class="hb-wrapper d-none d-lg-block">
 	<div class="hl-default hl-p container">
 		<div class="row">
 			<div class="col-4"></div>
 			<div class="col-4">
 				<a href="{{ route('index') }}">
 					<img src="{{ asset('img/hazel.png') }}" class="img-fluid" alt="">
 				</a>
 			</div>
 			<div class="col-4"></div>
 		</div>
 	</div>
</div> <!-- .header-wrapper -->

<!-- Header Menu -->
<div class="hl-menu">
	<div class="hl-default contianer">
		<nav class="navbar navbar-expand-lg" role="nav">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<div class="navbar-toggler-icon">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>

			<div class="navbar-logo d-block d-lg-none">
				<a href="{{ route('index') }}">
 					<img src="{{ asset('img/hazel.png') }}" class="img-fluid" alt="">
 				</a>
			</div>

			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
				  		<a class="nav-link" href="{{ route('index') }}">Home</a>
				  	</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Daily</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
				  <li class="nav-item dropdown nav-megamenu mm-zero">
				    <a class="nav-link nav-mega-item" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Food</a>
				    <div class="megamenu d-none d-lg-block">
				    	<div class="row">
				    		<div class="col-3">
				    			<div class="mm-item">
					    			<a href="#" class="megamenu-cat">Food</a>
					    			<a href="#">
					    				<img src="{{ asset('img/load.png') }}" data-src="{{ asset('uploads/image-01.jpg') }}" class="img-fluid lazy" alt="">
					    			</a>
					    			<h3>
					    				<a href="#">Pellentesque efficitur ornare sapien</a>
					    			</h3>
					    			<time>
					    				<i class="fa fa-clock-o" aria-hidden="true"></i>
					    				<span>June 26, 2019</span>
					    			</time>
					    		</div>
				    		</div>
				    		<div class="col-3">
				    			<div class="mm-item">
					    			<a href="#" class="megamenu-cat">Food</a>					    			
					    			<a href="#">
					    				<img src="{{ asset('img/load.png') }}" data-src="{{ asset('uploads/image-02.jpg') }}" class="img-fluid lazy" alt="">
					    			</a>
					    			<h3>
					    				<a href="#">Morbi ut laoreet dui</a>
					    			</h3>
					    			<time>
					    				<i class="fa fa-clock-o" aria-hidden="true"></i>
					    				<span>April 13, 2019</span>
					    			</time>
					    		</div>
				    		</div>
				    		<div class="col-3">
				    			<div class="mm-item">
					    			<a href="#" class="megamenu-cat">Food</a>					    			
					    			<a href="#">
					    				<img src="{{ asset('img/load.png') }}" data-src="{{ asset('uploads/image-03.jpg') }}" class="img-fluid lazy" alt="">
					    			</a>
					    			<h3>
					    				<a href="#">Nam tincidunt nunc quis lacinia ullamcorper</a>
					    			</h3>
					    			<time>
					    				<i class="fa fa-clock-o" aria-hidden="true"></i>
					    				<span>March 29, 2019</span>
					    			</time>
					    		</div>
				    		</div>
				    		<div class="col-3">
				    			<div class="mm-item">
					    			<a href="#" class="megamenu-cat">Food</a>					    			
					    			<a href="#">
					    				<img src="{{ asset('img/load.png') }}" data-src="{{ asset('uploads/image-04.jpg') }}" class="img-fluid lazy" alt="">
					    			</a>
					    			<h3>
					    				<a href="#">Ut odio lectus, sodales tristique mollis in</a>
					    			</h3>
					    			<time>
					    				<i class="fa fa-clock-o" aria-hidden="true"></i>
					    				<span>January 18, 2019</span>
					    			</time>
					    		</div>
				    		</div>
				    	</div>
				    </div>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Entertainment</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Lifestyle</a>
				  </li>
				  <li class="nav-item dropdown nav-megamenu">
				    <a class="nav-link nav-mega-item" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sports</a>
				    <div class="megamenu mmx">
				    	<div class="row">
				    		<div class="col-12 col-lg-3">
				    			<div class="dropdown-menu">
					    			<div class="dropdown-item">
				    					<a href="#" class="nav-link mmx-active">All</a>
					    			</div>
					    			<div class="dropdown-item">
				    					<a href="#" class="nav-link">Football</a>
					    			</div>
					    			<div class="dropdown-item">
				    					<a href="#" class="nav-link">Basketball</a>
					    			</div>
					    			<div class="dropdown-item">
				    					<a href="#" class="nav-link">Tennis</a>
					    			</div>
					    			<div class="dropdown-item">
				    					<a href="#" class="nav-link">HandBall</a>
					    			</div>
					    			<div class="dropdown-item">
				    					<a href="#" class="nav-link">Baseball</a>
					    			</div>
				    			</div>
				    		</div>
				    		<div class="col-9 d-none d-lg-block">
				    			<div class="row">
				    				<div class="col-4">
				    					<div class="mm-item">
					    					<a href="#" class="megamenu-cat">Basketball</a>					    			
							    			<a href="#">
							    				<img src="{{ asset('img/load.png') }}" data-src="{{ asset('uploads/image-05.jpg') }}" class="img-fluid lazy" alt="">
							    			</a>
							    			<h3>
							    				<a href="#">Mauris nec sem cursus, pretium augue quis, scelerisque orci</a>
							    			</h3>
							    			<time>
							    				<i class="fa fa-clock-o" aria-hidden="true"></i>
							    				<span>June 27, 2019</span>
							    			</time>
							    		</div>
				    				</div>
				    				<div class="col-4">
				    					<div class="mm-item">
					    					<a href="#" class="megamenu-cat">Football</a>					    			
							    			<a href="#">
							    				<img src="{{ asset('img/load.png') }}" data-src="{{ asset('uploads/image-06.jpg') }}" class="img-fluid lazy" alt="">
							    			</a>
							    			<h3>
							    				<a href="#">Nulla tempus enim nec urna pharetra, hendrerit euismod turpis mattis</a>
							    			</h3>
							    			<time>
							    				<i class="fa fa-clock-o" aria-hidden="true"></i>
							    				<span>June 20, 2019</span>
							    			</time>
							    		</div>
				    				</div>
				    				<div class="col-4">
				    					<div class="mm-item">
					    					<a href="#" class="megamenu-cat">Basketball</a>					    			
							    			<a href="#">
							    				<img src="{{ asset('img/load.png') }}" data-src="{{ asset('uploads/image-07.jpg') }}" class="img-fluid lazy" alt="">
							    			</a>
							    			<h3>
							    				<a href="#">Aliquam erat volutpat. Etiam ultrices auctor egestas</a>
							    			</h3>
							    			<time>
							    				<i class="fa fa-clock-o" aria-hidden="true"></i>
							    				<span>June 18, 2019</span>
							    			</time>
							    		</div>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				  </li>
				  <li class="nav-item dropdown">
				    <a class="nav-link dropdown-nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				      Dropdown
				    </a>
				    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				      <ul class="list-inline">
					      <li class="list-inline-item">
					      	<a class="dropdown-item" href="#">Dropdown 1</a>
					      </li>
					      <li class="list-inline-item dropdown nav-submenu-wrapper">
					      	<a class="dropdown-item nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown 2</a>
					      	<div class="dropdown-menu nav-submenu">
						      	<ul class="list-inline">
						      		<li class="list-inline-item">
						      			<a href="#" class="dropdown-item">Sub Menu 1</a>
						      		</li>
						      		<li class="list-inline-item">
						      			<a href="#" class="dropdown-item">Sub Menu 2</a>
						      		</li>
						      		<li class="list-inline-item">
						      			<a href="#" class="dropdown-item">Sub Menu 3</a>
						      		</li>
						      		<li class="list-inline-item">
						      			<a href="#" class="dropdown-item">Sub Menu 4</a>
						      		</li>
						      	</ul>
						      </div>
					      </li>
					      <li class="list-inline-item">
					      	<a class="dropdown-item" href="#">Dropdown 3</a>
					      </li>
					      <li class="list-inline-item">
					      	<a class="dropdown-item" href="#">Dropdown 4</a>
					      </li>
					      <li class="list-inline-item">
					      	<a class="dropdown-item" href="#">Dropdown 5</a>
					      </li>
					  </ul>
				    </div>
				  </li>
				</ul>
			</div>
		</nav>
	</div>
</div> <!-- .hl-menu -->


