<?php
/**
 * Template Name: Membership
 *
 * This is the template that displays the membership page.
 *
 * @package dublab14
 * @since dublab14 2.0
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>DUBLAB Membership Drive</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php mp3j_addscripts(); ?>

<?php wp_head(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.backstretch.min.js"></script>
    

        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/membership.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style-drive.css" />
        <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

    </head>
    <body>
        <div id="drive-menu">
		  <div class="container">
            <nav id="happy">
                 <ul id="menu-items">
                     <li id="menu-item-1"><a href="http://dublab.com/schedule/">broadcast schedule</a></li>
                     <li id="menu-item-2"><a href="http://dublab.com/home">dublab site</a></li>
                </ul> 
            </nav>
		</div>
	
	</div><!-- #drive-menu -->
        <div id="player-band">
		<div class="container">
			<div id="dublab-player" class="twelve columns">
			<?php //include player
				dynamic_sidebar('player-area');
			?>
				<div class="stream-link"><a href="//dublab.com/streams/dubstream.m3u" title="listen in your player">&nbsp;</a></div>	
			</div>
		</div><!--container-->
	</div><!--player-band-->
        <section id="section1">
            <div id="screenwidth">
            </div>
        </section>
        <section id="section2">
        </section>
        <section id="section3">
            <h2 style="margin:0 auto; text-align: center; margin-bottom:40px;">click a column below and become a member!</h2>
            <div id="prize_table">
                <div id="center-img-holder">
                    <img class="prizeimg" id="ticket" src="http://dublab.com/wp-content/uploads/2018/06/TICKETS-1024x973-1.png">
                    <img class="prizeimg" id="sticker" src="http://dublab.com/wp-content/uploads/2018/06/DUBLABBUMPER.png">
                    <img class="prizeimg" id="ll" src="http://dublab.com/wp-content/uploads/2018/06/1999-tee.png">
                    <img class="prizeimg" id="tote" src="http://dublab.com/wp-content/uploads/2018/06/Frimkiss-TOTE.png">
                    <img class="prizeimg" id="cup" src="http://dublab.com/wp-content/uploads/2018/06/MUG-1.png">
                    <img class="prizeimg" id="pack" src="http://dublab.com/wp-content/uploads/2018/06/CARE-PACKAGE.png">
                </div>
                <div id="prize-holder">
                    <div id="prize-images">
                        <div id="prize-ticket" onmouseover="showImage('ticket');" onmouseout="hideImage();">
                        </div>
                        <div id="prize-sticker" onmouseover="showImage('sticker');" onmouseout="hideImage();">
                        </div>
                        <div id="prize-ll_shirt" onmouseover="showImage('ll');" onmouseout="hideImage();">
                        </div>   
                        <div id="prize-tote" onmouseover="showImage('tote');" onmouseout="hideImage();">
                        </div>
                        <div id="prize-cup" onmouseover="showImage('cup');" onmouseout="hideImage();">
                        </div>
                        <div id="prize-pack" onmouseover="showImage('pack');" onmouseout="hideImage();">
                        </div>
                    </div>
                    <a href="https://dublab.myshopify.com/pages/membership-drive" id="level1" class="membership_level"></a>
                    <a href="https://dublab.myshopify.com/pages/5-monthly-membership" id="level2" class="membership_level"></a>
                    <a href="https://dublab.myshopify.com/pages/10-monthly-membership" id="level3" class="membership_level"></a>
                    <a href="https://dublab.myshopify.com/pages/20-monthly-membership" id="level4" class="membership_level"></a>
                    <a href="https://dublab.myshopify.com/pages/30-monthly-membership" id="level5" class="membership_level"></a>
                    <img id="prizes" src="http://dublab.com/wp-content/uploads/2018/06/LEVELS.png">
                </div>
            </div>
        </section>
        <section id="section4">
            <div id="yellow_donor_box">
                <p>or<br>visit our webstore<br>&<br><i>make a one time donation!</i><br>any amount counts.<br>+<br>check out the <a href="https://dublab.myshopify.com/" id="rare-goods">very rare goods</a> gifted from our lovely friends just for this exact moment. get em straight to your door, with much deserved love. 
                </p>
                <a href="https://dublab.myshopify.com/">
                    <div id="love-button">
                        <img id="heart_img" src="http://dublab.com/wp-content/uploads/2018/06/heart.png">
                    </div>
                </a>
            </div>
        </section>
        <section id="section5">
        </section>
        <section id="section6">
        </section>
        <section id="section7">
            <h1>[ FAQ ]</h1>
            <div id="info-para-holder">
                <p id="info-para">DUBLAB relies on listeners like you to continue our live radio programming. Your support allows us to pay for everyday expenses such as rent, streaming services, equipment repair, upgrades, and salaries.</p>
            </div>
            <div id="faq-holder">
                <div class="ticket-tab">
                    <h3>
                        <span>+</span>
                        HOW DOES IT WORK?
                    </h3>
				    <div class="ticket-info">
                        <p>
                            Choose a level you feel is the most appropriate. Once selected, you&#39;ll be donating to dublab every month, with an option of automatic renewal at the end of the 12 month period. There are many benefits and goodies we send your way for becoming a member. Your support, no matter how small (or big), allows us to count on your donation to continue and expand our mission.
                        </p>
                    </div>
				</div>
                <div class="ticket-tab">
                    <h3>
                        <span>+</span>
                        WHY BECOME A SUSTAINING MEMBER?
                    </h3>
				    <div class="ticket-info">
                        <ul>
                            <li>It&#39;s one of the best ways to make sure the radio station you love will be around tomorrow</li>
                            <li>You&#39;re part of a community of listeners that appreciate the wide variety of music we offer</li>
                            <li>A small amount goes a long way - even $5 a month makes a difference</li>
                            <li>Our &#34;thank you&#34; gifts are exclusive items we produce - not available anywhere else.</li>
                            <li>Why let an algorithm pick your music?  Support live radio! </li>
                            <li>It&#39;s supporting a service you use more than cable</li>
                            <li>It&#39;s the easiest and most convenient way to support truly freeform independent radio</li>
                        </ul>
                    </div>
				</div>
                <div class="ticket-tab">
                    <h3>
                        <span>+</span>
                        WILL YOU SEND ME A REMINDER WHEN MY MEMBERSHIP NEEDS TO BE RENEWED? 
                    </h3>
				    <div class="ticket-info">
                        <p>
                            Yes, we&#39;ll email you.  If you happen to have selected automatic renewal you will still be informed that your current membership is ending and automatically renewed.
                        </p>
                    </div>
				</div>
                <div class="ticket-tab">
                    <h3>
                        <span>+</span>
                        IS THE SUSTAINING MEMBERSHIP OFFERED ONLY TO U.S. RESIDENTS? 
                    </h3>
				    <div class="ticket-info">
                        <p>Not at all, in fact, many of our members are literally from all corners of the planet.  And we will mail the thank you gifts wherever you live.</p>
                    </div>
				</div>
                <div class="ticket-tab">
                    <h3>
                        <span>+</span>
                        WHAT IF MY PAYMENT INFORMATION CHANGES? 
                    </h3>
				    <div class="ticket-info">
                        <p>If you have an account with our webstore, just login and change it there! Otherwise send us an email at donate@dublab.com and we will get it all sorted out.</p>
                    </div>
				</div>
                <div class="ticket-tab">
                    <h3>
                        <span>+</span>
                        WHAT HAPPENS IF I WANT TO EITHER CANCEL OR CHANGE THE MEMBERSHIP LEVEL AT ANY TIME? 
                    </h3>
				    <div class="ticket-info">
                        <p>Not a problem, if for some reason you decide not to continue donating every month we will cancel the membership immediately. As for changing membership levels, send us an email to donate@dublab.com and we’ll take it from there.</p>
                    </div>
				</div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous">
        </script>
        <script>
            function showImage(img1) {
                var list = document.getElementsByClassName('prizeimg');
                for (var i = 0; i < list.length; i++) {
                    list[i].style.display = "none";
                }
                var toShow = document.getElementById(img1);
                toShow.style.display = "block";
            }
            
            function hideImage() {
                var alist = document.getElementsByClassName('prizeimg');
                for (var i = 0; i < alist.length; i++) {
                    alist[i].style.display = "none";
                    console.log(alist[1])
                }
            }
        </script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/other.js"></script>
        <?php do_action('wp_footer'); ?>
    </body>
    
    

</html>

