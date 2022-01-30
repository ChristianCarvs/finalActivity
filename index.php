<?php
session_start();
$_SESSION;
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Final Activity - ITS100 WEB DEV">
	<meta name="author" content="Christian Franc Carvajal">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<title>Home</title>
</head>

<body>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
	<br>
	<h6 style="text-align: right; color: #fff; position: absolute; right: 50px; top: 30px; width: 200px; height: 120px;">Hello, <?php echo $user_data['user_name']; ?> </h6>
	<a href="logout.php" style="text-align: right; position: absolute; right: 50px; width: 200px; height: 120px;">Logout</a>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-8 col-lg-6">
				<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; color: #fff; animation: animate 3s 1;">
					<h1>GROUP MEMBERS</h1>
					<div class="line"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<!--#1-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; animation: animate 3s 1;">
					<div class="advisor_thumb">
						<img src="https://scontent.fmnl25-3.fna.fbcdn.net/v/t1.6435-9/99158871_1162959237371998_2408213563303788544_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=0debeb&_nc_eui2=AeGTUhgRfXgZHIpjicxkN8TxWJ8txy9lR6hYny3HL2VHqGcUzRjugCo5IzbdtEaOusNOK84BllgUVtIv7nL4ej8-&_nc_ohc=8LRNk7y8l8EAX81XxYN&_nc_ht=scontent.fmnl25-3.fna&oh=00_AT_q0Tx4wEPKPzdfUUnrvtWsPOmk5Q9BRMAtKM_-HJHVGA&oe=62199F5D" width="223px" height="285px" alt="">
						<div class="single_advisor_details_info">
							<h6>Bantoto, Sheen Mae B.</h6>
							<div class="aa">
								<a href="https://web.facebook.com/sheenmae.bantoto">
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END-->
			
			<!--#2-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; animation: animate 3s 1;">
					<div class="advisor_thumb">
						<img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/271874946_352505870208735_7506940118177118265_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeE_rdsjikzN50uP5BntXc1nV75m6OHqz4ZXvmbo4erPhk1YJwKyzdZGJomx_59XC9QNKylxhSZcOaQ2Dgfh1sr5&_nc_ohc=fRvRjJOl7xEAX-dNbhJ&_nc_ht=scontent.fceb2-1.fna&oh=03_AVL47MPO-d53B_mHzE64Yt5AK9pLmzglztm6izr8INYrLQ&oe=621A38AC" width="223px" height="285px" alt="">
						<div class="single_advisor_details_info">
							<h6>Cadalin, Jocelyn T.</h6>
							<div class="aa">
								<a href="https://web.facebook.com/jocelyn.cadalin.1">
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END-->
			
			<!--#3-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; animation: animate 3s 1;">
					<div class="advisor_thumb">
						<img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t39.30808-6/258729285_603523914199408_5880447494247206565_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeE9l3BLpVfondnEDvRL9znoJQxKJoKMJ9ElDEomgown0VfY6_3GAQkfRdoFNYZPr5T3Pb6zKwqtCxepyk2Ebqko&_nc_ohc=AE8eM61ECnIAX-45dMz&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=00_AT-AdEmEY2TnBL0FFMC4KFvSb-wVpkfhXzSFOEvMRYDmbg&oe=61F967F4" width="220px" height="265px" alt="">
						<div class="single_advisor_details_info">
							<h6>Carvajal, Christian Franc M.</h6>
							<div class="aa">
								<a href="https://web.facebook.com/Koykoy200078/">
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END-->
			
			<!--#4-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; animation: animate 3s 1;">
					<div class="advisor_thumb">
						<img src="https://scontent.fceb2-2.fna.fbcdn.net/v/t39.30808-6/271169417_2991505284431751_4942035365052374899_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeHLIMzRfNaI_FF6rOqxyv5-4q4Ryv-WR0XirhHK_5ZHRQNC4LiWeLjtLD9vv9gSfBruiJFLfkb0nAZy0F9_dGYA&_nc_ohc=9R5MFkXuufUAX9CjKhs&_nc_zt=23&_nc_ht=scontent.fceb2-2.fna&oh=00_AT-5B31WJqqKuTS-b9tD1OXc4_XSGkzAXIkKEO0TMOW0CQ&oe=61F82DD9" width="220px" height="285px" alt="">
						<div class="single_advisor_details_info">
							<h6>Frejoles, Hayna J.</h6>
							<div class="aa">
								<a href="https://web.facebook.com/feat.HaynaBing">
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END-->
			
			<!--#5-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; animation: animate 3s 1;">
					<div class="advisor_thumb">
						<img src="https://scontent.fceb2-2.fna.fbcdn.net/v/t39.30808-6/271952050_3093775037558909_7872758268060510679_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeEUWmphExjqZvWV1UDo-gC0JMrWkyNzz2QkytaTI3PPZND_yD8lGcomgLmGmJCEwQK_v3rVCkCOvcrf9SAje2D4&_nc_ohc=tgueJyJU2FwAX9iPQ6Z&_nc_oc=AQkMbC-_sGQ6K1C2nWzbWfMtxok-FLeLJqIj_Z12jJdSDQ6WPVb0aeMC--D3fAo3Smc&_nc_zt=23&_nc_ht=scontent.fceb2-2.fna&oh=00_AT-NTQvqPsUUgvvN5Z4z8kF47olB7xdHIaYnv4A4Oj2QoA&oe=61F94D65" width="223px" height="285px" alt="">
						<div class="single_advisor_details_info">
							<h6>Gele, Niña Lynn D.</h6>
							<div class="aa">
								<a href="https://web.facebook.com/ninalynn.gele">
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END-->
			
			<!--#6-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; animation: animate 3s 1;">
					<div class="advisor_thumb">
						<img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/s206x206/272104278_943726009589941_1291466181760274869_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeGEB6o6zYjG9pRGmcfPjGWtV3a_sJsUHKVXdr-wmxQcpS31h4qvqgxbM4MbRqC3QXSqEpMnrXTHH84UBL5cH_5n&_nc_ohc=McqnAcUiaaIAX-wTP3I&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVJg5MPgJMbJNxjR8AY4259LkXYbX-heaXrFVky9Maa7KA&oe=6218E98F" width="223px" height="285px" alt="">
						<div class="single_advisor_details_info">
							<h6>Juanillo, Maria Luz A.</h6>
							<div class="aa">
								<a href="https://web.facebook.com/profile.php?id=100046746700716">
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END-->
			
			<!--#7-->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; animation: animate 3s 1;">
					<div class="advisor_thumb">
						<img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/s206x206/271665889_751832412446315_7967063531467394087_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=aee45a&_nc_eui2=AeFhrEPggvZNxNsOt04s_sY6nBeM4twUAk2cF4zi3BQCTdd_qDl5Ie9RJ2hf7UHRaAdlXMPsuh_f-jLQpi1Rs2x0&_nc_ohc=3OONh9n2IB8AX9ghI2D&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVI3PHHwnkkqV6GtFMZ2A3megVp0hkk6xi0rKOlGZF_IDg&oe=621B31EE" width="223px" height="285px" alt="">
						<div class="single_advisor_details_info">
							<h6>Labandia, Johna Mae O.</h6>
							<div class="aa">
								<a href="https://web.facebook.com/johnamae.labandia">
									<i class="fa fa-facebook"></i>
								</a>
							
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END-->
		</div>
	</div>

<style type="text/css">
body {
	margin-top: 20px;
	background-image: url('aw.jpg');
}

@keyframes animate {
	0% {
		transform: scale(0);
	}
	100% {
		transform: scale(1);
	}
}
	
a:hover, a:focus, a:active, a:visited, a:link {
	text-decoration: none;
}

a {
	position: relative;
    z-index: 1;
    padding: 5px;
    text-align: center;
}
	
.section_heading {
	margin-top: 30px;
	margin-bottom: 20px;
	animation: animate 3s 1;
}

.single_advisor_profile {
	position: relative;
	margin-bottom: 50px;
	-webkit-transition-duration: 500ms;
	transition-duration: 500ms;
	z-index: 1;
	border-radius: 15px;
	-webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
	box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
}

.single_advisor_profile .advisor_thumb {
	position: relative;
    z-index: 1;
    border-radius: 15px 15px 15px 15px;
    margin: 0 auto;
	width: 280px;
    padding: 30px 30px 0 30px;
    background-color: #9400D3;
    overflow: hidden;
}

.single_advisor_profile .advisor_thumb::after {
	-webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    width: 150%;
    height: 80px;
    bottom: -45px;
    left: -25%;
    content: "";
    background-color: #ffffff;
    -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
}

@media only screen and (max-width: 575px) {
	.single_advisor_profile .advisor_thumb::after {
		height: 160px;
        bottom: -90px;
	}
}

.single_advisor_profile .advisor_thumb .social-info {
	position: absolute;
    z-index: 1;
    width: 100%;
    bottom: 0;
    right: 30px;
    text-align: right;
}

.single_advisor_profile .advisor_thumb .social-info a {
    font-size: 14px;
    color: #020710;
    padding: 0 5px;
}

.single_advisor_profile .advisor_thumb .social-info a:hover,
.single_advisor_profile .advisor_thumb .social-info a:focus {
    color: #3f43fd;
}

.single_advisor_profile .advisor_thumb .social-info a:last-child {
    padding-right: 0;
}

.single_advisor_profile .single_advisor_details_info {
    position: relative;
    z-index: 1;
    padding: 20px;
    text-align: right;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    border-radius: 0 0 15px 15px;
    background-color: #ffffff;
}

.single_advisor_profile .single_advisor_details_info::after {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    z-index: 1;
    width: 50px;
    height: 3px;
    background-color: #3f43fd;
    content: "";
    top: 12px;
    right: 30px;
}

.single_advisor_profile .single_advisor_details_info h6 {
    margin-bottom: 0.25rem;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info h6 {
        font-size: 14px;
    }
}

.single_advisor_profile .single_advisor_details_info p {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    margin-bottom: 0;
    font-size: 14px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info p {
        font-size: 12px;
    }
}

.single_advisor_profile:hover .advisor_thumb::after,
.single_advisor_profile:focus .advisor_thumb::after {
    background-color: #070a57;
}

.single_advisor_profile:hover .advisor_thumb .social-info a,
.single_advisor_profile:focus .advisor_thumb .social-info a {
    color: #ffffff;
}

.single_advisor_profile:hover .advisor_thumb .social-info a:hover,
.single_advisor_profile:hover .advisor_thumb .social-info a:focus,
.single_advisor_profile:focus .advisor_thumb .social-info a:hover,
.single_advisor_profile:focus .advisor_thumb .social-info a:focus {
    color: #ffffff;
}

.single_advisor_profile:hover .single_advisor_details_info,
.single_advisor_profile:focus .single_advisor_details_info {
    background-color: #BA55D3;
}

.single_advisor_profile:hover .single_advisor_details_info::after,
.single_advisor_profile:focus .single_advisor_details_info::after {
    background-color: #ffffff;
}

.single_advisor_profile:hover .single_advisor_details_info h6,
.single_advisor_profile:focus .single_advisor_details_info h6 {
    color: #ffffff;
}

.single_advisor_profile:hover .single_advisor_details_info p,
.single_advisor_profile:focus .single_advisor_details_info p {
    color: #ffffff;
}
</style>
	
<script type="text/javascript">
</script>
</body>
</html>