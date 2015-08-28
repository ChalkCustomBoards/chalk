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