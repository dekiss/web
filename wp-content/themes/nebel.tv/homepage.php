<?php
/**
 Template Name: Homepage
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */

get_header(); ?>
    <div class="side-menu-buttons">
        <?php wp_nav_menu( array( 'theme_location' => 'side', 'menu_class' => '' ) ); ?>
    </div>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

				<article class="slice-1 slice">
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
                            <div class="item tv hidden"><a data-target="tv" href="#"></a></div>
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
                <article class="slice-2 slice">
                    <div class="entry-content">
                        <div class="media-sharing">
                            <h2 class="green drop-shadow">Media sharing</h2>
                            <p class="white drop-shadow">Sharing your media has now never been easier. Instant access to the media files of your friends.</p>
                        </div>
                        <div class="full-control">
                            <h2 class="green drop-shadow">Full control</h2>
                            <p class="white drop-shadow">Full control over access to your own material, share only with those within your social circle.</p>
                        </div>
                    </div><!-- .entry-content -->

                </article><!-- #post -->
                </article><!-- #post -->
                <article class="slice-3 slice">
                    <div class="entry-content">
                        <div class="live-recorded">
                            <h2 class="green drop-shadow">Enjoy both Live and Recorded content</h2>
                            <p class="white drop-shadow">Pause live broadcasts and continue watching whenever you choose, wherever you choose.</p>
                        </div>
                        <div class="missed">
                            <p class="green dwop-shadow">Missed an episode of your favorite show? Access the recorded
                                content of your social network. Never miss anything again!</p>
                        </div>
                    </div><!-- .entry-content -->

                </article><!-- #post -->
                <article class="slice-4 slice">
                    <div class="entry-content">
                        <div class="smart-playback">
                            <h2 class="green drop-shadow">Smart playback</h2>
                            <p class="white drop-shadow">Technology adjusts to screen capabilities and available network bandwidth</p>
                        </div>
                        <div class="bandwidth-load">
                            <span class="green drop-shadow">Bandwidth load</span>
                        </div>
                    </div><!-- .entry-content -->
                </article>
                <article class="slice slice-5">
                    <div class="entry-content">
                        <h2 class="white drop-shadow">Cutting edge technology is for free!!!</h2>
                        <p class="white drop-shadow">
                            That’s right, pay absolutely nothing, zero, zilch, for the software download for
                            your applicable device from the online store.
                        </p>
                    </div>
                </article>
                <article class="slice slice-6">
                    <div class="entry-content">
                        <h2 class="white drop-shadow center">Smoothly integrated payment system: <br/>
                            Pay and get paid for your own online content
                        </h2>
                        <div class="inner">
                            <p class="white drop-shadow coin">
                                Live in a country not supported by Paypal?
                                Not a problem... the integrated Bitcoin system
                                gives you the best confidentiality possible
                            </p>
                            <p class="white drop-shadow money">
                                Tired of being flooded with advertising...
                                now GET paid to view ads and spent
                                the credit on your new content!
                            </p>
                        </div>
                    </div>
                </article>
                <article class="slice slice-7">
                    <div class="entry-content">
                        <h2 class="white drop-shadow center">Follow your favorite artists without third party intervention</h2>
                        <div class="left">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/follow-1.png" width="204" height="204"><br/>
                                Directly reward the artist themselves
                                for their creativity, not the recording label,
                                hosting site etc
                            </p>
                        </div>
                        <div class="right">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/follow-2.png" width="204" height="204"/><br/>
                                Heard or seen something that you enjoyed?
                                Want to help get this artist recognised?
                                Pledge your support to their future projects.
                            </p>
                        </div>
                    </div>
                </article>
                <article class="slice slice-8">
                    <div class="entry-content">
                        <h2 class="white drop-shadow">An Artist yourself?<br/>
                            A budding independent film maker<br/>
                            or creative musician?</h2>

                        <div class="left">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/artist-1.png" height="204" width="204" /><br/>
                                Promote your content and receive 100% royalties for your work by reaching out to a global audience.
                            </p>
                        </div>
                        <div class="left">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/artist-2.png" height="204" width="204" /><br/>
                                Create your own news or TV channel, feed it to your network and compete with the likes of CNN and the BBC.
                            </p>
                        </div>
                        <div class="left">
                            <p class="white drop-shadow">
                                <img src="/wp-content/themes/nebel.tv/images/artist-3.png" height="204" width="204" /><br/>
                                Never share or give away your royalties. You works remains your forever.
                            </p>
                        </div>
                    </div>
                </article>
                <articel class="slice slice-9">
                    <div class="entry-content">
                        <h2 class="white drop-shadow">The ability to make all of your viewing activities private:</h2>
                        <h3 class="white drop-shadow">You have the ability to share your content and social network with only those you choose. Nothing is shared unless you choose to.</h3>
                        <div class="left">
                            <p class="green">
                                <img src="/wp-content/themes/nebel.tv/images/security-1.png" width="204" height="183"/><br/>
                                Share your content with one friend or group. Nobody is able to pick in!
                            </p>
                        </div>
                        <div class="right">
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