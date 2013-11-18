<?php
/**
 Template Name: Homepage
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */

get_header(); ?>
    <script type="text/javascript">
        var is_homepage = true;
    </script>
    <div class="side-menu-buttons">
        <?php wp_nav_menu( array( 'theme_location' => 'side', 'menu_class' => '' ) ); ?>
    </div>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

				<article class="slice-1 slice" data-500="position:abosolute;top:20px;" data-1500="top: -600px;">
					<header class="entry-header homepage-header">
						<h1 class="entry-title">
                            <span class="first-letter hidden">W</span><span class="hidden">hatever you want.&nbsp;&nbsp;</span>
                            <span class="first-letter hidden">W</span><span class="hidden">henever you want.&nbsp;&nbsp;</span>
                            <span class="first-letter hidden">W</span><span class="hidden">herever you want.</span>
                                <a class="try-it-now hidden" href="#"></a>
                        </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
                        <div class="homepage-figure none">
                            <div class="phase-1 phase hidden"></div>
                            <div class="phase-2 phase hidden"></div>
                            <div class="phase-3 phase hidden"></div>
                            <div class="phase-4 phase hidden"></div>
                            <div class="phase-5 phase hidden"></div>
                            <div class="item phone hidden"><a data-target="phone" href="#"></a></div>
                            <div class="item tablet hidden"><a data-target="tablet" href="#"></a></div>
                            <div class="item device hidden"><a data-target="device" href="#"></a></div>
                            <div class="item usb hidden"><a data-target="usb" href="#"></a></div>
                            <div class="item tv active hidden"><a data-target="tv" href="#"></a></div>
                        </div>
                        <div class="homepage-figure-content hidden homepage-step-1">
                            <div class="item tv active">
                                <p>Cutting edge <span class="">technology</span> allows access to <span class="">media</span></p>
                                <img src="/wp-content/themes/nebel.tv/images/tv-big.png" alt="tv" width="477" height="307"/>
                            </div>
                            <div class="item usb">
                                <p>Some cool <span class="green">text</span> about the <span class="green">USB</span></p>
                                <img src="/wp-content/themes/nebel.tv/images/usb-big.png" alt="usb" widh="477" height="165"/>
                            </div>
                            <div class="item phone">
                                <p>Some cool <span class="green">text</span> about the <span class="green">phone</span></p>
                                <img src="/wp-content/themes/nebel.tv/images/phone-big.png" alt=""/></div>
                            <div class="item tablet">
                                <p>Some cool <span class="green">text</span> about the <span class="green">tablet</span></p>
                                <img src="/wp-content/themes/nebel.tv/images/tablet-big.png" alt=""/></div>
                            <div class="item device">
                                <p>Some cool <span class="green">text</span> about the <span class="green">device</span></p>
                                <img src="/wp-content/themes/nebel.tv/images/device-big.png" alt=""/></div>
                        </div>
					</div><!-- .entry-content -->

				</article><!-- #post -->
                <article class="slice-2 slice" data-500-start="" data-3500="">
                    <div class="entry-content">
                        <div class="media-sharing" data-700="top:1000px" data-1500="top:0px" data-2300="top:0px" data-3100="top:-600px">
                            <h2 class="green drop-shadow">Media sharing</h2>
                            <p class="white drop-shadow">Sharing your media has now never been easier. Instant access to the media files of your friends.</p>
                        </div>
                        <div class="full-control" data-700="top:1000px" data-1700="top:450px" data-2500="top:450px" data-3500="top:-600px">
                            <h2 class="green drop-shadow">Full control</h2>
                            <p class="white drop-shadow">Full control over access to your own material, share only with those within your social circle.</p>
                        </div>
                    </div><!-- .entry-content -->

                </article><!-- #post -->
                <article class="slice-3 slice" data-2500="" data-5500="">
                    <div class="entry-content">
                        <div class="live-recorded" data-2700="top:1000px" data-3500="top: 0px" data-5000="top:0px" data-5100="top:-600px">
                            <h2 class="green drop-shadow">Enjoy both Live and Recorded content</h2>
                            <p class="white drop-shadow">Pause live broadcasts and continue watching whenever you choose, wherever you choose.</p>
                        </div>
                        <div class="live-recorded-2" data-3500="left:-1000px" data-4000="left:65px" data-5000="top:240px" data-5500="top:-600px"></div>
                        <div class="live-recorded-3" data-3500="right: -1000px" data-4000="right:50px" data-5000="top:240px" data-5500="top:-600px"></div>
                        <div class="missed" data-3500="top:1000px" data-4000="top:350px;" data-5000="top:350px" data-5500="top:-600px">
                            <p class="green dwop-shadow">Missed an episode of your favorite show? Access the recorded
                                content of your social network. Never miss anything again!</p>
                        </div>
                    </div><!-- .entry-content -->

                </article><!-- #post -->
                <article class="slice-4 slice" data-4500="" data-7500="">
                    <div class="entry-content">
                        <div class="smart-playback-1" data-4700="top:1000px" data-5500="top:0px" data-6500="top:0px" data-7100="top:-600px"></div>
                        <div class="smart-playback" data-4900="top:1000px" data-5900="top:0px" data-6600="top:0px" data-7500="top:-600px">
                            <h2 class="green drop-shadow">Smart playback</h2>
                            <p class="white drop-shadow">Technology adjusts to screen capabilities and available network bandwidth</p>
                        </div>
                        <div class="bandwidth-load" data-4900="top:1000px" data-5900="top:210px" data-6600="top:210px" data-7500="top:-600px">
                            <span class="green drop-shadow">Bandwidth load</span>
                        </div>
                    </div><!-- .entry-content -->
                </article>
                <article class="slice slice-5" data-7500="" data-10500="">
                    <div class="entry-content">
                        <div class="pay-zero-1" data-7500="left:-1000px" data-8000="left:0" data-9500="top:50px"; data-10500="top:-600px"></div>
                        <div class="pay-zero-2" data-7500="right:-1000px" data-8000="right:0" data-9500="top:110px"; data-10500="top:-600px"></div>
                        <div class="pay-zero" data-8000="top:1000px" data-8200="top:70px" data-9500="top:70px" data-10500="top:-600px">
                            <h2 class="white drop-shadow">Cutting edge technology is for free!!!</h2>
                            <p class="white drop-shadow">
                                That’s right, pay absolutely nothing, zero, zilch, for the software download for
                                your applicable device from the online store.
                            </p>
                        </div>
                    </div>
                </article>
                <article class="slice slice-6" data-9500="" data-12500="">
                    <div class="entry-content">
                        <h2 class="white drop-shadow center smoothly" data-9500="top: 1000px" data-10300="top:40px" data-11300="top:40px" data-12500="top:-600px">
                            Smoothly integrated payment system: <br/>
                            Pay and get paid for your own online content
                        </h2>
                        <div class="inner" data-11300="top:0px" data-12500="top:-600px">
                            <p class="white drop-shadow coin" data-10300="opacity:0" data-10800="opacity:1">
                                Live in a country not supported by Paypal?
                                Not a problem... the integrated Bitcoin system
                                gives you the best confidentiality possible
                            </p>
                            <p class="white drop-shadow money" data-10800="opacity:0" data-11300="opacity:1">
                                Tired of being flooded with advertising...
                                now GET paid to view ads and spent
                                the credit on your new content!
                            </p>
                        </div>
                        <div class="payment-system-phone" data-9700="top:1000px" data-10200="top:143px" data-11300="top:143px" data-12500="top:-600px"></div>
                    </div>
                </article>
                <article class="slice slice-7" data-11500="" data-14500="">
                    <div class="entry-content">
                        <h2 class="white drop-shadow center" data-12000="top:1000px" data-12700="top:40px" data-14000="top:40px" data-14400="top:-600px">
                            Follow your favorite artists without third party intervention
                        </h2>
                        <div class="left" data-12700="left:-1000px" data-13400="left:0px" data-14200="top:200px" data-14500="top:-600px">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/follow-1.png" width="204" height="204"><br/>
                                Directly reward the artist themselves
                                for their creativity, not the recording label,
                                hosting site etc
                            </p>
                        </div>
                        <div class="right" data-12700="right:-1000px" data-13400="right:0px" data-14200="top:200px" data-14500="top:-600px">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/follow-2.png" width="204" height="204"/><br/>
                                Heard or seen something that you enjoyed?
                                Want to help get this artist recognised?
                                Pledge your support to their future projects.
                            </p>
                        </div>
                    </div>
                </article>
                <article class="slice slice-8" data-13500="" data-16500="">
                    <div class="entry-content">
                        <h2 class="white drop-shadow" data-13900="top:1000px" data-14600="top:40px" data-16000="top:40px" data-16400="top:-600px">
                            An Artist yourself?<br/>
                            A budding independent film maker<br/>
                            or creative musician?
                        </h2>

                        <div class="left first" data-14800="left:-1000px" data-15300="left:0px" data-16100="top:220px" data-16500="top:-600px">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/artist-1.png" height="204" width="204" /><br/>
                                Promote your content and receive 100% royalties for your work by reaching out to a global audience.
                            </p>
                        </div>
                        <div class="left second" data-14800="top:1000px" data-15300="top:220px" data-16100="top:220px" data-16500="top:-600px">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/artist-2.png" height="204" width="204" /><br/>
                                Create your own news or TV channel, feed it to your network and compete with the likes of CNN and the BBC.
                            </p>
                        </div>
                        <div class="left third" data-14800="right:-1000px" data-15300="right:0px" data-16100="top:220px" data-16500="top:-600px">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/artist-3.png" height="204" width="204" /><br/>
                                Never share or give away your royalties. You works remains your forever.
                            </p>
                        </div>
                    </div>
                </article>
                <articel class="slice slice-9" data-15500="" data-18500="">
                    <div class="entry-content">
                        <div class="text" data-16000="top:1000px" data-16700="top:40px">
                            <h2 class="white drop-shadow">The ability to make all of your viewing activities private:</h2>
                            <h3 class="white drop-shadow">You have the ability to share your content and social network with only those you choose. Nothing is shared unless you choose to.</h3>
                        </div>
                        <div class="left" data-16600="opacity:0" data-17100="opacity:1">
                            <p class="green">
                                <img src="/wp-content/themes/nebel.tv/images/security-1.png" width="204" height="183"/><br/>
                                Share your content with one friend or group. Nobody is able to pick in!
                            </p>
                        </div>
                        <div class="right" data-16600="opacity:0" data-17100="opacity:1">
                            <p class="green">
                                <img src="/wp-content/themes/nebel.tv/images/security-2.png" width="196" height="183"/> <br/>
                                Make your social network private: no one except you can analyze and monetize your network.
                            </p>
                        </div>
                    </div>
                </articel>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>