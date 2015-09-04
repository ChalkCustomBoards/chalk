<?php

/**
 * @file chalk_display.blocks.php
 * Blocks markup for the Chalk Display module.
 */

/**
 * Renders markup for the social medias links.
 * @return array
 */
function _chalk_display_social() {
  $output = '';
  $items = array();
  // @todo images
  $items[] = l('Facebook','https://www.facebook.com/pages/Chalk-Custom-Board-Project/837413683020006');
  $items[] = l('Ello','https://ello.co/chalk_collective');
  $items[] = l('Instagram','https://instagram.com/chalkcustomboard/');
  $items[] = l('Pinterest','https://www.pinterest.com/chalkcustom/');
  $items[] = l('YouTube','https://www.youtube.com/channel/UCkzRQhwlf39InmYu8WsRRRA');
  $type = 'ul';
  $attributes = array();
  $output .= theme_item_list(array('items' => $items, 'title' => NULL, 'type' => $type, 'attributes' => $attributes));
  return array(
    '#markup' => $output,
  );
}


function _chalk_display_main_menu() {
	$tree = menu_tree_all_data('main-menu');
	$items = array();
  $output = '';
  $output = '<nav id="nav">';
	foreach($tree as $leaf){
		//$items[] = l('<span class="icon >'. $leaf['link']['link_title']. '</span>', $leaf['link']['href'], array('html' => TRUE));
		$items[] = l($leaf['link']['link_title'], $leaf['link']['href']);
	}
	$type = 'ul';
	$attributes = array();
	$output .= theme_item_list(array('items' => $items, 'title' => NULL, 'type' => $type, 'attributes' => $attributes));

  $output .= '</nav>';
  return array(
    '#markup' => $output,
  );
}

function _chalk_display_intro() {
  $output = '
            <section id="top" class="one dark cover">
              <div class="container">
                <header>
                  <h2 class="alt"><strong>In custom boards we trust</strong></h2>
                  <p>
                  CHALK is more than a collective, it is a new way of gathering artists and riders around board art.
Stay connected and find out where and when CHALK will perform, in France, Belgium and more.
Get to know the CHALK artists and be all set for their next custom boards.
								</p>
                </header>

                <footer>
                  <a href="artists" class="button scrolly"></a>
                </footer>

              </div>
            </section>';
  return array(
    '#markup' => $output,
  );
}

/**
 * @todo description
 * @return array
 */
function _chalk_display_artists_teaser() {

	global $language;
	$query = new EntityFieldQuery();

	$nodes = array();
	$query->entityCondition('entity_type', 'node')
		->entityCondition('bundle', 'artist')
		->propertyCondition('status', NODE_PUBLISHED)
		->range(0, 10);

	$result = $query->execute();

	if (isset($result['node'])) {
		$items_nids = array_keys($result['node']);
		$nodes = entity_load('node', $items_nids);
	}

	$output = '';

	foreach($nodes as $n){
		$variables = array(
			'path' => image_style_url('artist_teaser', $n->field_banner['und'][0]['uri']),
			'alt' => $n->field_banner['und'][0]['alt'],
			'title' => $n->field_banner['und'][0]['alt'],
			'attributes' => array(),
		);
		//dpm($n);
		$description = truncate_utf8($n->body['und'][0]['safe_value'], 300, TRUE, TRUE);
		//$description = text_summary($n->body['und'][0]['safe_value'], NULL, 600);
		//$description = $n->field_speciality[LANGUAGE_NONE][0]['safe_value'];
		$image = theme('image', $variables);
		$title = $n->title_field[$language->language][0]['value'];
		$output .= '<section class="spotlight">
									<div class="image">
										<a href="#" class="image fit">'.$image.'</a>
									</div>
									<div class="content">
											<h2>'.$title.'</h2>
											<p>'.$description.'</p><p>'.
											l(t('Read more'), drupal_get_path_alias('node/'.$n->nid))
									.'</p></div>
								</section>';
	}

	return array(
		'#markup' => $output,
	);
}

/**
 * @todo description
 * @return array
 */
function _chalk_display_events_teaser() {

	global $language;
	$query = new EntityFieldQuery();

	$nodes = array();
	$query->entityCondition('entity_type', 'node')
		->entityCondition('bundle', 'event')
		->propertyCondition('status', NODE_PUBLISHED)
		->range(0, 10);
  // @todo orderBy

	$result = $query->execute();

	if (isset($result['node'])) {
		$items_nids = array_keys($result['node']);
		$nodes = entity_load('node', $items_nids);
	}
  $output = '';

  // @todo theme_item list
  $output .= '<ul class="features">';
  foreach($nodes as $n){
    dpm($n);
    $title = $n->title_field[$language->language][0]['value'];
    $description = '';
    if(isset($n->body['und'][0]['safe_value'])) {
      $description = truncate_utf8($n->body['und'][0]['safe_value'], 300, TRUE, TRUE);
    }
    $date = format_date(strtotime($n->field_date['und'][0]['value']), 'medium'); // @todo from to
    $location = $n->field_event_location['und'][0]['locality'] . '('.$n->field_event_location['und'][0]['country'].')';
    $output .= '
    <li class="icon">
			<h3>'.$title.'</h3>
      <h4>'.$date. '<br>'.$location.'</h4>'
      .$description.
			'<p>'.l(t("Read more"), "node/".$n->nid).'</p>
		</li>';
  }
  $output .= '</ul>';

	return array(
		'#markup' => $output,
	);
}

/*
function _chalk_display_artists_teaser() {

	global $language;
	$query = new EntityFieldQuery();

	$nodes = array();
	$query->entityCondition('entity_type', 'node')
		->entityCondition('bundle', 'artist')
		->propertyCondition('status', NODE_PUBLISHED)
		->range(0, 10);

	$result = $query->execute();

	if (isset($result['node'])) {
		$items_nids = array_keys($result['node']);
		$nodes = entity_load('node', $items_nids);
	}

  $output = '
  <section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Chalk artists</h2>
							</header>

							<p>Vitae natoque dictum etiam semper magnis enim feugiat convallis convallis
							egestas rhoncus ridiculus in quis risus amet curabitur tempor orci penatibus.
							Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis
							fusce hendrerit lacus ridiculus.</p>';

	$output .= '<div class="row">';

	foreach($nodes as $n){
		$variables = array(
			'path' => image_style_url('artist_teaser', $n->field_banner['und'][0]['uri']),
			'alt' => $n->field_banner['und'][0]['alt'],
			'title' => $n->field_banner['und'][0]['alt'],
			'attributes' => array(),
		);
		$img = theme('image', $variables);
		$image = '';
		$title = $n->title_field[$language->language][0]['value'];
		$output .= '<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit">'.$image.'</a>
										<header>
											<h3>'.$title.'</h3>
										</header>
									</article>
								</div>';
	}

	$output .='
							</div>
						</div>
					</section>
  ';
  return array(
    '#markup' => $output,
  );
}
*/