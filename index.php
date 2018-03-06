<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ThaneCoin(TPI)</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="crypto, crypt" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    <link href="img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet"> -->

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.6/sweetalert2.min.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="favicon.png"> -->
    <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
    <link rel="stylesheet" href="css/dashboardred.css">
    <link rel="stylesheet" href="css/jquery-u.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--==========================
  Header
  ============================-->
    <header id="header" style="background:black;opacity:1">
        <div class="container" style="display:flex">

            <div id="logo" class="pull-left" style="flex:2">
                <!--        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>-->
                <!-- Uncomment below if you prefer to use a     text logo -->
                <h1>
                    <a href="#"><img style="float:left; height: 75px;width:70px" src="img/logo.png"> 
                    
                    </a>
                </h1>
            </div>

            <nav id="nav-menu-container" style="flex:1">
                <ul class="nav-menu">
                    <!-- <li class="menu-active"><a href="#hero">Home</a></li> -->
                    <!-- <li><a href="#new_wallet">Send</a></li> -->
                    <!-- <li><a href="#about">About Us</a></li> -->
                    <li><a href="#new_wallet">My Wallet</a></li>
                    <li><a href="#" id="menu_login"  data-toggle="modal" data-target="#myModal">Login</a></li>
                </ul>
            </nav>
            
        </div>
	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	        <h3 style="margin:0">Login</h3>
	          <button type="button" style="padding:0;margin-right:20px" class="close" data-dismiss="modal">&times;</button>
	          
	        </div>
	        <div class="modal-body">
	        	<input type="text" id="login_name" placeholder="Name">
	        	<input type="password" id="login_password" placeholder="Password">  
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" id="login">Sign In</button>
	        </div>
	      </div>
	      
	    </div>
	  </div>
    </header>
    <!-- #header -->

    <!--==========================
    Hero Section
  ============================-->
    <section id="hero" style="display:none">
        <div class="hero-container">
            
            <!-- <button class="btn-get-started" data-toggle="modal" data-target="#login_modal">Get Started</button> -->
            <a href="#new_wallet"><button class="btn-get-started">Get Started</button></a>


            <!-- Modal -->
            <!-- <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="loginLabel">Login / Register</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            Description text
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button_1" onclick='' data-dismiss="modal">Button 1</button>
                            <a href='' target='_self' class='atag'>Atag</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!----MODAL--->
        </div>
    </section>
    <!-- #hero -->

    <main id="main">

        <!--==========================
      About Us Section
    ============================-->
        <section id="about" style="display:none">
            <div class="container">
                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">ThaneCoin comming soon</h2>
                     	<img src="img/gladiators.jpg" style="width:100%">

                        <!-- <div class="icon-box wow fadeInUp">
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                        </div>

                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-photo"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>

                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon"><i class="fa fa-bar-chart"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                        </div> -->

                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
                </div>

            </div>
        </section>
        <!-- #about -->

        <!--==========================
      Facts Section
    ============================-->
        <!-- <section id="facts">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <h3 class="section-title">Facts</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">232</span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">521</span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">1,463</span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">15</span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- #facts -->

        <!--==========================
      Services Section
    ============================-->
        <!-- <section id="services">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <h3 class="section-title">Services</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-road"></i></a></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-shopping-bag"></i></a></div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- #services -->

        <!--==========================
    Call To Action Section
    ============================-->
        <!-- <section id="call-to-action">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- #call-to-action -->

        <!--==========================
      Portfolio Section
    ============================-->

        <!--==========================
      New Walet Section
      
      
    ============================-->
      <section id="new_wallet" style="margin-top:180px">
      	<h1 style="text-align:center">Create Your Wallet</h1>
      	<div class="logo-container">
			
			<div class="wallet-desc" style="display: none" id="desc_main">
				<p class="small-margin">This is your ThaneCoin token Wallet. It will show both your Ethereum balance and your ThaneCoin tokens.
					<br> You must contribute ETH from this wallet in order to recieve your tokens here.</p>
			</div>
		</div>
	</header>
	<div class="b-form-place container">

		<div class="row" id='reg'>
			<div class="col-md-offset-2 col-md-8" style='display:none' id='right'>

				<div class="login-desc" id="desc_login">
					<center>
						<h3 style="padding-bottom: 8px;">ThaneCoin Wallet with ShapeShift Integration</h3>
					</center>
					<p>This is an ETH and ThaneCoin token wallet that you can use for the ThaneCoin ICO.</p>
					<p>Please enter your info in these boxes and hit Enter/Return to access your wallet. The password is only used when you buy tokens
						in the wallet.</p>
					<p> We do not keep your keys, please save them. This keyphrase will be used for getting back into the system or MyEtherWallet
						after the ICO.</p>
					<p>The
						<b>Wallet String</b> in the textfile you are downloading is your only access back into this sytem, so
						<b>do not destroy this file</b>, and
						<b>back it up</b>.</p>
				</div>

				<!-- <div class="b-form-cont">
					<h2 class="b-form-cont__title" style="display: flex;">
						Crowdsale Fund Raising
					</h2>
					<div class="b-form b-form--place container-fluid">
						<div class="b-form__row">
							<div id="progress_funding" class="ui green big progress">
								<div class="bar">
								</div>
							</div>
						</div>
						<div class="b-form__row">
							<span id="token_sold">...</span>
							<span>&nbsp;Of&nbsp;</span>
							<span id="token_total">...</span>
						</div>
					</div>
				</div> -->

				<div class="b-form-cont">
					<h2 class="b-form-cont__title" style="position:relative; display: flex;">
						<span id="" style="float: left;">Create account (below)</span>
						<span style="margin-left: auto; margin-right: auto;">or</span>
						<input type="file" style='width:130px;postion:absolute;z-index:10;opacity:0; float:right; cursor: pointer;' id="import_key" name="files[]">
						<span style="position: absolute; right:40px;cursor:pointer">Import Key File</span>
					</h2>
					<div class="b-form b-form--place container-fluid">
						<div class="b-form__row">
							<input type="text" id='name' placeholder="Enter your name (and press Enter)">
						</div>
						<div class="b-form__row email" style='display:none'>
							<input type="email" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required id='email' placeholder="Enter your email (and press Enter)">
						</div>
						<div class="b-form__row pre_pass" style='display:none'>
							<input type="password" id='pre_pass' placeholder="Enter password (and press Enter)">
						</div>
						<div class="b-form__row pass" style='display:none'>
							<input type="password" id='pass' placeholder="Confirm password (and press Enter)">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id='savekey' style='display:none' class='row savekey'>
			<div class="col-md-12">
				<div class="b-form-cont">

					<h2 class="b-form-cont__title">
						<span class='hiname'>Hi</span>
						<a href="#" style='float:right' onclick='localStorage.clear();window.location.reload();return false'>Logout</a>
					</h2>
					<div class="b-form b-form--place container-fluid">
						<div class='b-form__row'>

							Write down these 12 words using
							<i class="fa fa-pencil" aria-hidden="true"></i> and
							<i class="fa fa-file-o" aria-hidden="true"></i>:
							<!-- <br> (these can be used in MyEtherWallet after ICO)-->
							<br>
							<textarea id='d12keys' onclick="this.focus();this.select()" readonly="readonly">.:...:.</textarea>
							<br>
							<br>
							<i style='color:red' class="fa fa-exclamation-triangle" aria-hidden="true"></i> We do not store your private keys and will not be able to restore them.
							<br>
							<br>
							<a href='#' class='btn' onclick='sv("ThaneCoin.keys",getmsg(),2);return false'>download keys</a> or
							<a href='#' class='mailto'>send to email</a>
							<br>
							<Br>You will continue after save
							<script>
								function getmsg() {
									return localStorage.getItem("keystore");
								}
							</script>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row mainboard" id='info2' style='display:none'>

			<div class="col-md-4 tabs griditem" id='a1'>

				<!-- .b-form-cont -->
				<div class="b-form-cont">
					<div style='float:right;padding:22px 18px;'>

						<a href="#" id='exprta' onclick='sv("ThaneCoin.keys",getmsg());return false'>Export keys</a> |
						<a href="#" onclick='localStorage.clear();window.location.reload();return false'>Logout</a>
					</div>
					<h2 class="b-form-cont__title hiname">Hi</h2>
					<div class="b-form b-form--place container-fluid">
						<div class="b-form__row">
							<div id='topupbalance'>
								For buy TOKENS you must topup your balance! Using
								<a href="#" onclick='$("#openkey").focus().select()'>this form</a>.
							</div>

							<div id='balancediv'>
								<span class='balacnetokens'></span>
								Tokens on your balance. And
								<span class='balance'></span>
								<a href='#' style='display:none' id='withall' onclick='try2withdrawETH();'>withdraw all ETH</a>
								<span id='consolewithdraw'> /
									<a onclick='window.location.reload()' href="">refresh</a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- .b-form-cont -->
			</div>

			<div class="col-md-4 tabs griditem" id='try2buy'>

				<!-- .b-form-cont -->
				<div class="b-form-cont">
					<h2 class="b-form-cont__title">Your ETH wallet address</h2>
					<div class="b-form b-form--place container-fluid">
						<div class='b-form__row'>
							<div id='console'></div>
							<input type='text' style='margin-bottom:20px' id='openkey' value=''>
							<img id='ethqr' src='' style='padding-right:10px;float:left'>
							<span style='margin-top:10px'>Minimum payment 0.5 ETH</span>


							<script>
								function shapeshift_click(a, e) {
									e.preventDefault();
									var link = 'https://shapeshift.io/shifty.html?destination=' + openkey + '&amount=10&output=ETH';
									window.open(link, '1418115287605',
										'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');
									return false;
								}
							</script>
							<br>
							<br>
							<a onclick="shapeshift_click(this, event);" href="#">
								<img src="https://shapeshift.io/images/shifty/xs_light_ss.png" class="ss-button">
							</a>
						</div>
					</div>
				</div>
				<!-- .b-form-cont -->
			</div>

			<div class="col-md-4 tabs griditem">

				<!-- .b-form-cont -->
				<div class="b-form-cont">
					<h2 class="b-form-cont__title">Buy tokens (with ETH wallet, left)</h2>
					<div class="b-form b-form--place container-fluid">
						<div class='b-form__row'>
							<div class="front-box8">Choose amount of token you want buy</div>

							<div class="front-box2">

								<font class="fi2">TOKEN(s)</font>
								<input type="text" id="amount" style='background:#ffffff;font-size:18px;padding:1px;min-height:0;border:0;width: auto;background: #f7f7f7;height: auto'
								    class="inputslider" readonly>

								<div class="slider-range-i">
									<div id="slider-range-max"></div>
								</div>

								<p style="display:none">
									<font>BTC</font>
									<span id='btcfor100hmq'>...</span>
								</p>
								<p>
									<font>ETH</font>
									<span id='ethfor100hmq'>...</span>
								</p>
								<p class="plast">
									<font>USD</font>
									<span id='usdfor100hmq'>....</span>
								</p>
							</div>

							<input type='button' onclick='try2buy($("#ethfor100hmq").html());' id='try2buybtn' class='btn' value='Buy now'>
							<span id='consolebuy'></span>

						</div>
					</div>
				</div>
				<!-- .b-form-cont -->
			</div>

			<div class="col-md-8 tabs griditem" id='sendtokens'>

				<!-- .b-form-cont -->
				<div class="b-form-cont">
					<h2 class="b-form-cont__title">Send tokens</h2>
					<div class="b-form b-form--place container-fluid">
						<div class='b-form__row'>
							<div class='onlyhavetoken'>
								To address:
								<Br>
								<input type='text' id='kuda' style='margin-bottom:20px' id='openkey22' value='0x'> Amount:
								<Br>
								<input type='text' id='skoko' style='margin-bottom:20px' value=''>

								<input type='button' onclick='try2send()' class='btn' name='BTN' value='Send'>
								<span id='consolesend'></span>
								<script>
									function try2send() {
										$("#consolesend").html('.:...::');
										sendRwTr(0,[$("#kuda").val(),$("#skoko").val()*1000000000000000000],"transfer","#consolesend");
									}
								</script>
							</div>

							<div class='onlynohavetoken'>
								You can send tokens once you have some tokens.
							</div>
						</div>
					</div>
				</div>
				<!-- .b-form-cont -->
			</div>

			<div class="col-md-4 tabs griditem" id='a4'>

				<!-- .b-form-cont -->
				<div class="b-form-cont">
					<h2 class="b-form-cont__title">Ethereum stat</h2>
					<div class="b-form b-form--place container-fluid">
						<div class='b-form__row'>
							Price USD :
							<span id='price_usd'></span>
							<br> Price BTC :
							<span id='price_btc'></span>
							<div id='ethereumstat'></div>
						</div>
					</div>
				</div>
				<!-- .b-form-cont -->
			</div>

			<div class="col-md-4 tabs griditem" style="right:0;display:none;">
				<div class="b-form-cont">
					<h2 class="b-form-cont__title">Sell tokens</h2>
					<div class="b-form b-form--place container-fluid">
						<div class='b-form__row'>
							1 ThaneCoin TOKEN =
							<span id='onetoken'>.</span>
							<div class='sellnow'>
								You can sell
								<span class='balacnetokensnocss'></span> token(s) immediately for
								<span class='hnew'></span>
								<input type='button' onclick='try2sell();' class='btn ' value='SELL NOW'>
								<div id='consolesell'></div>
							</div>


						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 tabs griditem" style="display:none">
				<div class="b-form-cont">
					<h2 class="b-form-cont__title">Market rates</h2>
					<div class="b-form b-form--place container-fluid">
						<div class='b-form__row'>
							Pending token listing in markets
						</div>
					</div>
				</div>
			</div>

			<div style='display:none' class="col-md-12 tabs griditem" id='a4'>

				<!-- .b-form-cont -->
				<div class="b-form-cont">
					<h2 class="b-form-cont__title">Transactions</h2>
					<div class="b-form b-form--place container-fluid">
						<div class='b-form__row'>
							<div id='nhistory'></div>
						</div>
					</div>
				</div>
				<!-- .b-form-cont -->
			</div>

		</div>
		<!-- .row -->
	</div>
      </section>  
        <!-- <section id="portfolio">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Portfolio</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-logo">Logo</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row" id="portfolio-wrapper">
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="">
                            <img src="img/portfolio/app1.jpg" alt="">
                            <div class="details">
                                <h4>App 1</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <a href="">
                            <img src="img/portfolio/web2.jpg" alt="">
                            <div class="details">
                                <h4>Web 2</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="">
                            <img src="img/portfolio/app3.jpg" alt="">
                            <div class="details">
                                <h4>App 3</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="">
                            <img src="img/portfolio/card1.jpg" alt="">
                            <div class="details">
                                <h4>Card 1</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="">
                            <img src="img/portfolio/card2.jpg" alt="">
                            <div class="details">
                                <h4>Card 2</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <a href="">
                            <img src="img/portfolio/web3.jpg" alt="">
                            <div class="details">
                                <h4>Web 3</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="">
                            <img src="img/portfolio/card3.jpg" alt="">
                            <div class="details">
                                <h4>Card 3</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="">
                            <img src="img/portfolio/app2.jpg" alt="">
                            <div class="details">
                                <h4>App 2</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
                        <a href="">
                            <img src="img/portfolio/logo1.jpg" alt="">
                            <div class="details">
                                <h4>Logo 1</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
                        <a href="">
                            <img src="img/portfolio/logo3.jpg" alt="">
                            <div class="details">
                                <h4>Logo 3</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <a href="">
                            <img src="img/portfolio/web1.jpg" alt="">
                            <div class="details">
                                <h4>Web 1</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
                        <a href="">
                            <img src="img/portfolio/logo2.jpg" alt="">
                            <div class="details">
                                <h4>Logo 2</h4>
                                <span>Alored dono par</span>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- #portfolio -->

        <!--==========================
      Team Section
    ============================-->
        <!-- <section id="team">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Team</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
                            <h4>Sarah Jhinson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- #team -->

        <!--==========================
      Contact Section
    ============================-->


    </main>

    <!--==========================
    Footer
  ============================-->
    
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>ThaneCoin </strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->

            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>

    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    
    <script src="js/web3.min.js"></script>
    <script src="js/lightwallet.min.js"></script>

    <script src="js/jquery-u.js"></script>
    <script src="js/progress.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.6/sweetalert2.min.js"></script>
    <script src="erc20dashboard.js?v=3"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    
    <!-- Contact Form JavaScript File -->
    <!-- <script src="contactform/contactform.js"></script> -->
<script>
		var buyPrice = parseInt(Web3.utils.toWei('0.0005', 'ether'));
		var sellPrice = parseInt(Web3.utils.toWei('0.0005', 'ether'));
		var tokens_for_one_eth = 1000000000000000000 / buyPrice;

		$("#onetoken").html(sellPrice / 1000000000000000000 + " ETH");
		// extrahook = function () {
		// 	if ($("#skoko").val() > 0) {
		// 		$(".sellnow").show();

		// 		$(".hnew").html(Math.round(sellPrice / 1000000000000000000 * $("#skoko").val() * 1000000) / 1000000 + " ETH");

		// 	}
		// }
		// disable sell token function now.
		// extrahook();
		recalc();

		$.get(option_etherscan_api + "/api?module=stats&action=ethprice&apikey=" + option_etherscan_api_key, function (d) {
			console.log(d);
			// $("#market_cap_usd").html(d.result.ethusd + " USD");
			$("#price_btc").html(d.result.ethbtc);
			$("#price_usd").html(d.result.ethusd);
			recalc();
		}, "json");
	</script>
	
	<script>
		build_state();
		rebalance();
		setInterval(rebalance, 10000);
	</script>
	<script>
		if (localStorage.getItem("privkey")) {
			$("#info2").html("You use old version of dashboard. Save this key " + localStorage.getItem("privkey") +
				". Open myetherwallet.com > login using plain key > and add token " + erc20contract_address +
				". Or <a href='#' onclick='localStorage.clear();window.location.reload();return false'>logout</a>"
			);
		}
	</script>
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
	
</body>

</html>