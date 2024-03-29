<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>1-Time Offer | Watercolor University</title>

        <!-- CSS -->
        <link href='//fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/buttons.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <!-- Javascript -->
        <script data-cfasync="false" type="text/javascript" src="https://code.tinypass.com/tinypass.js"></script>
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
        <![endif]-->

        <!-- Tinypass -->
        <script type="text/javascript">
            window._tpm = window._tpm || [];
            window._tpm['paywallID'] = '25875543';
            window._tpm['trackPageview'] = true;
            window._tpm['onCheckoutSuccess'] = function(){_kmq.push(['record', 'Purchased']);};
        </script>
        <!-- End Tinypass -->

    </head>

    <body>

        <!-- Loader -->
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>

        <!-- Tinypass button generation -->
        <?php
            /* Include TinyPass - make sure to use the correct path */
            include_once($_SERVER['DOCUMENT_ROOT'] . "/watercolor-painting-tutorials/tp/TinyPass.php");

            // configure Tinypass
            TinyPass::$SANDBOX = false;
            TinyPass::$AID = "3dCZMeAXgw";
            TinyPass::$PRIVATE_KEY = "cJEQYMDfs1wBgy73TvsXj5y31mlknx289ewMKual";

            $rid = "PW_25875543";
            $store = new TPAccessTokenStore();
            $store->loadTokensFromCookie($_COOKIE);
            $token = $store->getAccessToken($rid);

            if($token->isAccessGranted()) {
                //Access granted! Display requested resource to the user
                echo '<div style="text-align:center;line-height:500px;"><p>You have access! Unlock all videos by visiting: <a href="http://lessons.watercolorpainting.com/class-list/" target="_blank">http://lessons.watercolorpainting.com/class-list/</a></p><p>Remember to claim your bonus products by forwarding your mailing address and purchase confirmation email (sent from TinyPass, our payment system) to webmaster@watercolorpainting.com by 10pm, Nov 27, 2015, Pacific Standard Time. For international residents, we will bill you for shipping and handling, then ship when we receive your payment.</p></div>';

            } else {
                //Access denied! Proceed with the next steps and display a Tinypass button...
                $resource = new TPResource($rid, "Watercolor Video Classes", "http://lessons.watercolorpainting.com/class-list/");
                //$po1 = new TPPriceOption("6.99", "7 days");
                $po2 = new TPPriceOption("[29.99 | monthly | *]");
                //$po3 = new TPPriceOption("89.99", "30 days");
                //$offer1 = new TPOffer($resource, $po1);
                $offer2 = new TPOffer($resource, $po2);
                //$offer3 = new TPOffer($resource, $po3);

                //Create a request and generate an HTML button for option 1
                //$request1 = new TPPurchaseRequest($offer1);
                //$buttonHTML1 = $request1->generateTag();
                //echo $buttonHTML1;

                //Create a request and generate an HTML button for option 2
                $request2 = new TPPurchaseRequest($offer2);
                $buttonHTML2 = $request2->generateTag();
                echo $buttonHTML2;

                //Create a request and generate an HTML button for option 3
                //$request3 = new TPPurchaseRequest($offer3);
                //$buttonHTML3 = $request3->generateTag();
                //echo $buttonHTML3;
            }
        ?>

        <!-- Bind pretty buttons to default Tinypass buttons -->
        <script type="text/javascript">
            $(function(){
                $("#buy-button").click(function(){
                    $("#tp_button_PW_25875543").click();
                });
            });
        </script>
		<!-- Top menu -->
		<nav>
			<a class="scroll-link" href="#top-content">Top</a>
			<a class="scroll-link" href="#features">Features</a>
			<a class="scroll-link" href="#faq">FAQs</a>
			<a class="scroll-link" href="#testimonials">Testimonials</a>
			<a class="scroll-link" href="#about-us">About</a>
			<div class="hide-menu">
				<a href=""><i class="fa fa-bars"></i></a>
			</div>
		</nav>
		<div class="show-menu">
			<a href=""><i class="fa fa-bars"></i></a>
		</div>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                    	<div class="col-sm-6 video wow fadeInLeft">
                    		<div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/oS-e9G39S1I?autoplay=1&amp;rel=0&amp;showinfo=0&amp;wmode=opaque" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen=""></iframe>
                        	</div>
                        </div>
                        <div class="col-sm-6 text wow fadeInUp">
                        	<div class="logo">
                        		<h1>Sale Activated…</h1>
                        	</div>
                            <h2 class="hero">Here's your early Black Friday offer to get $131.97 worth of watercolor products for just $29.99!</h2>
                            <div class="top-button">
                                <a id="buy-button" class="button-1" href="javascript:void(0);" onclick="$mcGoal.processEvent('Started WU Membership Purchase');">Pay Now - $29.99</a>
                            </div>
                            <strong>Payment form should pop up on click</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="features-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn">
	                    <h2>Are we nuts? "Pay $29.99 for $131.97 worth of watercolor products?"</h2>
	                    <p>Yes, we're taking a big risk by slashing so much off our regular price…that's why we're only emailing it to select people during sale season! You may ask, "What's the catch?" No catch. No hidden fees. Here's everything about how this works…</p>
                                    <p>…Become a member of Watercolor University at 66% off the regular price and be eligible to claim all these bonus watercolor products, mailed to you at no additional cost! So instead of paying $89.99 to unlock all 47 video classes for 30 days, only pay $29.99 (66% off!) to get these watercolor products worth $131.97:</p>
                                    <p>#1. A 30-day, auto-renewing Watercolor University membership <b>worth $89.99</b>. Self-cancel anytime. Every 30 days after your initial charge, you'll preserve the reduced rate of $29.99 when you're charged for the next month of access. Includes protection from price increases, which means your month-to-month price stays at $29.99 even when we raise our prices back to $89.99. Yes, you keep saving 66% every month!</p>
                                        <p>#2. A Prang watercolor set <b>worth $19.99</b> rated 4.6 out of 5 stars on Amazon.com. Contains 1 round #7 brush (a versatile brush for small details &amp; large washes), 16 colors of watercolor paints (includes colors similar to those used in Watercolor University videos), and 1 paint-holding palette with 5 wells.</p>
                                        <p>#3. 15 sheets of 140-pound coldpress watercolor paper <b>worth $11.99</b>.</p>
                                        <p>#4. Free upgraded shipping &amp; handling <b>worth $10</b> to USA &amp; Canada. International residents will be charged FedEx shipping &amp; handling rates.</p>
                                <p>Important: All purchases protected by our 100% Satisfaction Guarantee—love it or your money back, no questions asked. We're not kidding. And you can keep the watercolor products even if you request money back. It's our gift to you for giving Watercolor University an honest try. Plus, our Easy-Refund Policy lets you get your money back even if you forget to manage your subscription, no questions asked.</p>
                                <p>Remember to claim your bonus watercolor products after starting your membership by forwarding your mailing address and purchase confirmation email (sent from TinyPass, our payment system) to webmaster@watercolorpainting.com by 10pm, Nov 27, 2015, Pacific Standard Time. For international residents, we'll bill you for shipping &amp; handling then ship when we receive your payment.</p>
                                <p>Keep reading for an introduction to Watercolor University's online watercolor classes!</p>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 features-box wow fadeInUp">
	                	<div class="features-box-icon">
	                		<i class="fa fa-eye"></i>
	                	</div>
	                    <h3>22+ Hours Of Video</h3>
	                    <p>All videos on the Watercolor University website unlock so you can play, pause and paint along. Reference photos, initial sketches and list of materials included for relevant classes.</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInDown">
	                	<div class="features-box-icon">
	                		<i class="fa fa-pencil"></i>
	                	</div>
	                    <h3>No Fine Print</h3>
	                    <p>Our Easy-Refund Policy and 100% Satisfaction Guarantee means you love it, or your money back. No questions asked. We mean it!</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInUp">
	                	<div class="features-box-icon">
	                		<i class="fa fa-cloud"></i>
	                	</div>
	                    <h3>Multi-Device Viewing</h3>
	                    <p>Log in and view hi-quality video from multiple smartphones, tablets &amp; computers thanks to cloud technology.</p>
                    </div>
	            </div>
	        </div>
        </div>

        <!-- Single feature -->
        <div class="single-feature-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 single-feature section-description wow fadeIn">
	                    <h2>We're Watercolor University: a grandma-friendly website packed with 22+ hours of video classes</h2>
	                    <p>Just 1 click to browse a list of all video classes or browse by these categories: beginner classes, technique classes &amp; step-by-step classes.</p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-6 single-feature-box wow fadeInLeft">
	                    <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="//player.vimeo.com/video/110844826" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <em>Preview a watercolor technique class.</em>
	                </div>
	                <div class="col-sm-6 single-feature-box wow fadeInUp">
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-gear"></i></div>
	                    	<h3>No fancy technology needed</h3>
	                    	<div class="single-feature-box-text-description">
	                    		If you've viewed videos on the Internet before, then our videos will work on your device.
	                    	</div>
	                    </div>
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-fire"></i></div>
	                    	<h3>Help is always a moment away</h3>
	                    	<div class="single-feature-box-text-description">
	                    		Call our 24/7 customer service at (888) 881-2542 or click the blue livechat tab on bottom of the screen to ask a human or leave a message outside of business hours.
	                    	</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Single feature -->
        <div class="single-feature-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-6 single-feature-box single-feature-box-left wow fadeInLeft">
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-eye"></i></div>
	                    	<h3>Everything to get started</h3>
	                    	<div class="single-feature-box-text-description">
	                    		From basic techniques such as mixing paint and picking paper to complete landscape paintings from start to finish. Plenty to learn!
	                    	</div>
	                    </div>
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-pencil"></i></div>
	                    	<h3>Extras included</h3>
	                    	<div class="single-feature-box-text-description">
	                    		Relevant classes include a list of supplies, reference photos, initial sketches, an image of the finished painting.
	                    	</div>
	                    </div>
	                </div>
	                <div class="col-sm-6 single-feature-box wow fadeInUp">
	                    <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="//player.vimeo.com/video/110947348" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <em>Preview this step-by-step class.</em>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Single feature -->
        <div class="single-feature-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 single-feature section-description wow fadeIn">
	                    <h2>Learn from award-winning artists who are also great teachers</h2>
	                    <p>
	                    	We handpick the artists who will teach you.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-6 single-feature-box wow fadeInLeft">
	                    <img src="assets/img/3limes.png" alt="3 Limes, Watercolor by Greg Conley"><br />
                                <em>Painted by one of our artists. Follow along and paint this too!</em>
	                </div>
	                <div class="col-sm-6 single-feature-box wow fadeInUp">
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-check"></i></div>
	                    	<h3>Accomplished painters</h3>
	                    	<div class="single-feature-box-text-description">
	                    		Our teachers have won numerous watercolor awards at the regional and national level.
	                    	</div>
	                    </div>
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-check"></i></div>
	                    	<h3>Experienced teachers</h3>
	                    	<div class="single-feature-box-text-description">
	                    		Award-winning artists usually charge hundreds of dollars per student to teach a live workshop. You're getting a bargain by learning online.
	                    	</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- FAQ -->
        <div class="faq-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 faq section-description wow fadeIn">
	                    <h2>Common questions</h2>
	                    <p>
	                    	Click each question or click the blue livechat tab on bottom of the screen to ask a human.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-6 faq-box wow fadeInLeft">
	                    <div class="single-faq">
	                    	<h3>What are your 3 Guarantees for every customer?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                 <ol>
                                                <li>Our Easy-Refund Guarantee makes us work harder to please customers. If you’re not satisfied for whatever reason, we’ll refund your money hassle-free. We know some bad guys will take advantage of our policy to get free lessons. Thankfully, our happy customers more than compensate for freeloaders.</li>
                                                <li>We’re always working on bringing you new videos. Videos take time, especially watercolor videos. Even the best artists don’t paint everything perfectly the first time (especially on camera), which means we need to shoot again and again. We’ve been adding 2-4 new video classes on average each month.</li>
                                                <li>Our customer care team always responds promptly and politely. We hate being mistreated by so-called “customer service” just as much as you do.</li>
		                  </ol>
	                    	</div>
	                    </div>
	                    <div class="single-faq">
	                    	<h3>How does payment work and what happens when I buy a membership?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                  <p>We accept nearly every payment option: VISA, Mastercard, American Express, Discover, PayPal, Amazon Payments, Bitcoin and Dwolla. After buying a membership, you can immediately begin watching every Watercolor University video class. You’ll also receive a purchase confirmation email from Tinypass, our payments system. Paying $29.99 gives you unlimited views of all video classes for 30 days, starting from the time you first buy. After your first 30 days, your membership auto-renews at the same discounted rate of $29.99 per month (which is 66% off the regular price of $89.99 per month!). Self-cancel anytime by logging in or contacting us at webmaster@watercolorpainting.com.</p>
	                    	</div>
	                    </div>
	                    <div class="single-faq">
	                    	<h3>How secure is my credit card information?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                  <p>All payments are handled by Tinypass, which powers transactions for big-name brands like Esquire and Cosmopolitan. We figure if Tinypass is good enough for them, it’s good enough for us. We actually never see your payment information, so we can’t leak it even if we were forced to.</p>
                                            <p>To further protect yourself online, we recommend signing up for automatic alerts from your credit card and payment providers. You’ll catch mysterious transactions quicker, which means you can challenge them quicker with your credit card and payment providers. Providers usually refund mystery charges when you challenge them.</p>
	                    	</div>
	                    </div>
                                <div class="single-faq">
                                    <h3>What colors, brushes and other watercolor supplies do I need?</h3>
                                    <span><i class="fa fa-plus"></i></span>
                                    <div class="single-faq-text">
                                        <p>We'll send you everything you need at no extra cost during our early Black Friday Sale. Remember to claim your bonus watercolor products after starting your membership by forwarding your mailing address and purchase confirmation email (sent from TinyPass, our payment system) to webmaster@watercolorpainting.com by 10pm, Nov 27, 2015, Pacific Standard Time. For international residents, we'll bill you for shipping &amp; handling then ship when we receive your payment.</p>
                                    </div>
                                </div>
                                <div class="single-faq">
                                    <h3>What happens when my membership expires?</h3>
                                    <span><i class="fa fa-plus"></i></span>
                                    <div class="single-faq-text">
                                        <p>Videos will lock up so you can no longer watch them. To regain unlimited views, you can buy again; either another 1-time payment or a month-to-month/semi-annual subscription. Your choice.</p>
                                    </div>
                                </div>
                                <div class="single-faq">
                                    <h3>What if I want my membership to start later?</h3>
                                    <span><i class="fa fa-plus"></i></span>
                                    <div class="single-faq-text">
                                        <p>Simply email yourself a <a href="https://dashboard.tinypass.com/gift?giftId=OF05IZoL" target="_blank">gift membership</a>, which lets you start your membership on any "delivery date." Buying these gift options will not make you eligible for bonus watercolor products, mailed to your door.</p>
                                    </div>
                                </div>
	                </div>
	                <div class="col-sm-6 faq-box wow fadeInUp">
	                    <div class="single-faq">
	                    	<h3>What is your 100% Satisfaction Guarantee &amp; Easy-Refund Policy?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                    	<p>Email webmaster@watercolorpainting.com within 30 days of the purchase date if you're not satisfied. Include the original receipt. That’s it! There’s no catch. We will refund your last payment in full and we won’t prorate your last payment, even if you’ve used up a good chunk of your membership before requesting a refund. If you want your money back because you aren’t satisfied, you can have your money back. We want to be generous with our Easy-Refund policy because we stay in business thanks to happy customers.</p>
	                    	</div>
	                    </div>
	                    <div class="single-faq">
	                    	<h3>What kind of technology do I need to enjoy these videos?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                    	<p>If you can watch videos online, you can watch all the videos on Watercolor University. We use HTML5 video players, which means we support nearly every Internet-connected device on the planet, including Apple’s iOS devices and Android devices. Flash is optional and not required.</p>
	                    	</div>
	                    </div>
	                    <div class="single-faq">
	                    	<h3>Who are the instructors?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                    	<p>All instructors are hand-picked. They’re accomplished, award-winning watercolor artists and experienced teachers. Biographies are displayed inside each class.</p>
	                    	</div>
	                    </div>
                                    <div class="single-faq">
                                        <h3>Can I watch video classes on another computer/device?</h3>
                                        <span><i class="fa fa-plus"></i></span>
                                        <div class="single-faq-text">
                                            <p>Yes! If you keep an active membership, you can always sign in when you’re prompted to pay. The sign-in link is at the bottom of the paywall pop-up.</p>
                                        </div>
                                    </div>
                                    <div class="single-faq">
                                        <h3>Will this work for me if I live outside the US?</h3>
                                        <span><i class="fa fa-plus"></i></span>
                                        <div class="single-faq-text">
                                            <p>Non-American currencies are accepted with exchange rates that are competitive with banks and currency exchanges. All videos should work unless your country blocks video sites like YouTube and Vimeo.</p>
                                        </div>
                                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- divider -->
        <div class="divider-1">~</div>

        <!-- Screenshots -->
        <div class="screenshots-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 screenshots section-description wow fadeIn">
	                    <h2>Some examples of what you'll paint</h2>
	                    <p>
	                    	Follow along and paint these scenes from start to finish. Many more scenes available. We only had room to show 3 here.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-4 screenshot-box wow fadeInUp">
	                    <img src="assets/img/screenshots/1.jpg" alt="Still Life Flowers" >
	                </div>
	            	<div class="col-sm-4 screenshot-box wow fadeInDown">
	            		<img src="assets/img/screenshots/2.jpg" alt="Plein Air" >
	                </div>
	                <div class="col-sm-4 screenshot-box wow fadeInUp">
	            		<img src="assets/img/screenshots/3.jpg" alt="Close-Ups" >
	                </div>
	            </div>
	        </div>
        </div>

        <!-- divider -->
        <div class="divider-1">~</div>

        <!-- Testimonials -->
        <div class="testimonials-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description wow fadeIn">
	                    <h2>Real testimonials from real students</h2>
	                    <div class="testimonial-active"></div>
	                    <div class="testimonial-quote">&ldquo; &rdquo;</div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		I'm currently taking a local class and have learned nothing compared to the video tutorials I've watched on your site. THANK YOU for taking the time to video and share! Love it!
	                    		<br>
	                    		<span class="student">Maria, Watercolor University student</span>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
	                    	</div>
	                    </div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		I can't tell you how happy I am that I decided to try your instructional videos. You are an exceptional teacher.  have never seen any tutorial in any medium that describes the painting process the way you do. You leave nothing out. You explain what artists, and beginning artists, need to hear.
	                    		<br>
	                    		<span class="student">Isabelle, Watercolor University student</span>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
	                    	</div>
	                    </div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		Wow, I want to say how perfectly amazing the instructor here is first off. Second, from this one video I have watched, she could teach ANYONE! If I feel confident enough to paint a still life bunch of flowers just from watching her do so in this lesson, anyone could. Point is, she's incredible at TEACHING.
	                    		<br>
	                    		<span class="student">Jeanine, Watercolor University student</span>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
	                    	</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Call to action -->
        <div class="call-to-action-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action section-description wow fadeIn">
	                    <h2>Why wait? Get started now</h2>
	                    <p>
	                    	No risk because you're protected by our 100% Satisfaction Guarantee: love it or your money back, no questions asked! Cancel anytime. Easy-Refund Policy.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 call-to-action-button wow fadeInUp">
	                    <a class="scroll-link button-1" href="#top-content">Click To View The Buy Button</a>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- About us -->
        <div class="about-us-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about-us section-description wow fadeIn">
	                    <h2>About us</h2>
	                    <p>
	                    	Since 1999, WatercolorPainting.com has become the go-to site for watercolor tutorials, attracting millions from all over. Watercolor University by WatercolorPainting.com introduces video classes for the first time. Each video is painstakingly created over 2-4 weeks. Imagine painting live on camera. One mistake and you'll have to start over. Even our award-winning artists aren't immune to pressure, which means one video may be shot over and over again to get everything right. All the time, energy and skill put into all these videos are now available for the price of gas traveling to and from a local class. New videos are constantly being developed, so students will enjoy new classes as they're completed. Think of Watercolor University as a never-ending watercolor workshop in the comfort of your own home. Students include busy professionals, retirees, parents, youth, art teachers and artists.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
        <footer>
	        <div class="container">
	            <div class="row">
                            <div class="col-sm-7 footer-copyright">
                            	&copy; Copyright 1999-2015. WatercolorPainting.com
                            </div>
	            </div>
	        </div>
        </footer>
        <!-- Tinypass loads after DOM loads -->
        <script type="text/javascript">
        function downloadJSAtOnload() {
        var element = document.createElement("script");
        element.src = "https://code.tinypass.com/tpl/d1/tpm.js";
        document.body.appendChild(element);
        }
        if (window.addEventListener)
        window.addEventListener("load", downloadJSAtOnload, false);
        else if (window.attachEvent)
        window.attachEvent("onload", downloadJSAtOnload);
        else window.onload = downloadJSAtOnload;
        </script>
        <!-- /Tinypass -->
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TBZKNS"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TBZKNS');</script>
        <!-- End Google Tag Manager -->
        <!-- begin olark code -->
        <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
        f[z]=function(){
        (a.s=a.s||[]).push(arguments)};var a=f[z]._={
        },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
        f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
        0:+new Date};a.P=function(u){
        a.p[u]=new Date-a.p[0]};function s(){
        a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
        hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
        return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
        b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
        b.contentWindow[g].open()}catch(w){
        c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
        var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
        b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
        loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
        /* custom configuration goes here (www.olark.com/documentation) */
        olark.identify('6321-445-10-3331');/*]]>*/</script><noscript><a href="https://www.olark.com/site/6321-445-10-3331/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
        <!-- end olark code -->
    </body>

</html>

