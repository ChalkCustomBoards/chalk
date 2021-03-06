<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- page.tpl.php -->
<?php } ?>
<?php print $mothership_poorthemers_helper; ?>

<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
              <h1><a href="/"><?php print $site_name; ?></a></h1>
              <nav id="nav">
                <ul>
                  <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                      <ul class="menu-link">
                        <li>
                          <figure>
                           <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                          </figure>
                        </li>
                        <li><a href="/">Chalk</a></li>
                        <li><a href="/get-involved">Get involved !</a></li>
                        <li><a href="/artists">Artists</a></li>
                        <li><a href="/events">Events</a></li>
                        <li><a href="/videos">Videos</a></li>
                      </ul>
                      <ul class="menu-social-icon">
                        <li class="call-link"><p>join us</p></li>
                        <li><a href="https://instagram.com/chalkcustomboard/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="https://www.pinterest.com/chalkcustom/" class="icon fa-pinteres"><span class="label">Pinterest</span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCkzRQhwlf39InmYu8WsRRRA" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </nav>
            </header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2><?php print $title; ?></h2>
							<p></p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
                  <?php if($page['highlighted'] OR $messages){ ?>
                    <div class="drupal-messages">
                    <?php print render($page['highlighted']); ?>
                    <?php print $messages; ?>
                    </div>
                  <?php } ?>


                  <?php print render($page['content_pre']); ?>

                  <?php print render($page['content']); ?>

                  <?php print render($page['content_post']); ?>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
              <ul class="icons">
                <li><a href="https://www.facebook.com/pages/Chalk-Custom-Board-Project/837413683020006" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="https://ello.co/chalk_collective" class="icon fa-ello"><span class="label">Ello</span></a></li>
                <li><a href="https://instagram.com/chalkcustomboard/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://www.pinterest.com/chalkcustom/" class="icon fa-pinteres"><span class="label">Pinterest</span></a></li>
                <li><a href="https://www.youtube.com/channel/UCkzRQhwlf39InmYu8WsRRRA" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
              </ul>
              <ul class="copyright">
                <li>&copy; Chalk Custom Boards</li><li><a href="https://en.wikipedia.org/wiki/Vulcan_salute" target="_blank">Live long and prosper</a></li>
              </ul>
            </footer>

			</div>
