      <!-- Page Wrapper -->
        <div id="page-wrapper">

          <!-- Header -->
          <?php // @todo get menu, move in block ?>
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
                        <li><a href="https://www.facebook.com/pages/Chalk-Custom-Board-Project/837413683020006" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="https://ello.co/chalk_collective" class="icon fa-ello"><span class="label">Ello</span></a></li>
                        <li><a href="https://instagram.com/chalkcustomboard/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="https://www.pinterest.com/chalkcustom/" class="icon fa-pinteres"><span class="label">Pinterest</span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCkzRQhwlf39InmYu8WsRRRA" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </nav>
            </header>

          <!-- Banner -->

            <section id="banner">
              <div>
                <!--
                <iframe height="100%" width="100%" src="https://player.vimeo.com/video/18300299#t=0m56s?autoplay=1&title=0&byline=0&portrait=0" width="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                -->
                <iframe frameborder="0" height="100%" width="100%"
                  src="https://youtube.com/embed/d_z3IsRmXVc?start=0&autoplay=1&controls=0&showinfo=0&autohide=1&rel=0&vq=hd720">
                </iframe>
                <?php //print render($page['hero']); ?>
              </div>
              <div id="logo" class="inner" style="display:none;">
                <?php if ($logo): ?>
                  <figure>
                      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </figure>
                <?php endif; ?>

                  <hgroup>
                    <?php if($site_slogan): ?>
                      <h2><?php print $site_slogan; ?></h2>
                    <?php endif; ?>
                    <!--
                      <p></p>
                      <ul class="actions">
                        <li><a href="get-involved" class="button special">Get involved</a></li>
                      </ul>
                    -->
                  </hgroup>
              </div>
              <a href="#one" class="more scrolly">Meet Chalk</a>
            </section>

          <!-- One -->
            <section id="one" class="wrapper style1 special">
              <div class="inner">
                <header class="major">
                  <h2>CHALK CUSTOM BOARD PROJECT. <span>IN CUSTOM BOARD WE TRUST.</span></h2>
                  <p>One mission. To gather various known and not-so-well-known artists around the same theme : the Board.<br>
Skateboard, longboard, surfboard, snowboard, kiteboard...<br>We never get fed up with so many opportunities to express ourselves.</p>
<p>Stay connected. Get to know the Chalkers.<br>Meet us at our next exhibitions and events. Order some custom boards.</p>
                </header>
                <!--
                <ul class="icons major">
                  <li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
                  <li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
                  <li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
                </ul>
                -->
              </div>
            </section>


          <!-- Three -->
            <section id="three" class="wrapper style3 special">
              <div class="inner">
                <header class="major">
                  <h2>Events</h2>
                  <!--<p>Meet CHALK</p>-->
                  <?php print render($page['front_three']); ?>
                </header>

              </div>
            </section>

          <!-- Two -->
            <section id="two" class="wrapper alt style2">

              <?php print render($page['front_two']); ?>

            </section>



          <!-- CTA -->
            <section id="cta" class="wrapper style4">
              <div class="inner">
                <header>
                  <h2>Contact us</h2>
                  <p><a href='m&#97;&#105;l&#116;o&#58;&#37;63&#104;al&#37;6&#66;cu%73t&#111;m%&#54;2o&#97;rd&#64;gm%61&#105;l&#46;c%&#54;&#70;m'>cha&#108;k&#99;u&#115;to&#109;&#98;o&#97;&#114;&#100;&#64;g&#109;a&#105;l&#46;c&#111;m</a>
                  </br><a href="http://www.chalkcustomboard.com/app/download/12272310825/CHALK_BOARD_PROJECT_08_07_2015.pdf">DOWNLOAD OUR CHALK BROCHURE</a> [PDF]</p>
                </header>
                <ul class="actions vertical">
                  <li><a href="get-involved" class="button fit special">Get involved !</a></li>
                  <li><a href="chalk-custom-board-project" class="button fit">Learn More</a></li>
                </ul>
              </div>
            </section>

          <!-- Footer -->
          <?php // @todo move in block ?>
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
