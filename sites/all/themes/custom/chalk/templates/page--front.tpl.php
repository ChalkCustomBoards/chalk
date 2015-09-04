      <!-- Page Wrapper -->
        <div id="page-wrapper">

          <!-- Header -->
          <?php // @todo get menu ?>
            <header id="header" class="alt">
              <h1><a href="index.html"><?php print $site_name; ?></a></h1>
              <nav id="nav">
                <ul>
                  <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                      <ul>
                        <li><a href="chalk-custom-board-project">Chalk</a></li>
                        <li><a href="get-involved">Get involved !</a></li>
                        <li><a href="artists">Artists</a></li>
                        <li><a href="events">Events</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </nav>
            </header>

          <!-- Banner -->
            <section id="banner">
              <div class="inner">
                <?php if ($logo): ?>
                  <figure>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                  </figure>
                <?php endif; ?>

                  <hgroup>
                    <?php if($site_slogan): ?>
                      <h2><?php print $site_slogan; ?></h2>
                    <?php endif; ?>
                      <p></p>
                      <ul class="actions">
                        <li><a href="get-involved" class="button special">Get involved</a></li>
                      </ul>
                  </hgroup>
              </div>
              <a href="#one" class="more scrolly">Chalk artists</a>
            </section>

          <!-- One -->
            <section id="one" class="wrapper style1 special">
              <div class="inner">
                <header class="major">
                  <h2>CHALK is more than a collective</h2>
                  <p>it is a new way of gathering artists and riders around board art.
Stay connected and find out where and when CHALK will perform, in France, Belgium and more.
Get to know the CHALK artists and be all set for their next custom boards.</p>
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

          <!-- Two -->
            <section id="two" class="wrapper alt style2">

              <?php print render($page['front_two']); ?>

            </section>

          <!-- Three -->
            <section id="three" class="wrapper style3 special">
              <div class="inner">
                <header class="major">
                  <h2>Events</h2>
                  <p>Meet CHALK, be there</p>
                  <?php print render($page['front_three']); ?>
                </header>

              </div>
            </section>

          <!-- CTA -->
            <section id="cta" class="wrapper style4">
              <div class="inner">
                <header>
                  <h2>Contact us</h2>
                  <p>chalkcustomboard@gmail.com.</p>
                  <p>DOWNLOAD OUR CHALK BROCHURE</p>
                </header>
                <ul class="actions vertical">
                  <li><a href="get-involved" class="button fit special">Get involved !</a></li>
                  <li><a href="chalk-custom-board-project" class="button fit">Learn More</a></li>
                </ul>
              </div>
            </section>

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
                <li>&copy; Chalk Custom Boards</li><li><a href="https://en.wikipedia.org/wiki/Vulcan_salute">Live long and prosper</a></li>
              </ul>
            </footer>

        </div>