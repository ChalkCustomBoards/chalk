<?php
/*
  Preprocess
*/

/**
 * Preprocess
 * @param $vars
 * @param $hook
 */
function chalk_preprocess(&$vars, $hook) {
  global $theme;
  global $base_url;
  //$path = drupal_get_path('theme', $theme);
  $path_chalk = drupal_get_path('theme', 'chalk');
  //if ( $hook == "html" ) {
    // =======================================| HTML |========================================
    //get the path for the site
    $vars['chalk_path'] = $base_url . '/' . $path_chalk;
  //}
}


function chalk_preprocess_html(&$vars) {
  //  kpr($vars['content']);
}



function chalk_preprocess_page(&$vars,$hook) {
  // pass node id to a page if it is a node display
  if (arg(0) == 'node' && is_numeric(arg(1))) {
    $vars['nid'] = arg(1);
  }
  //typekit
  //drupal_add_js('http://use.typekit.com/XXX.js', 'external');
  //drupal_add_js('try{Typekit.load();}catch(e){}', array('type' => 'inline'));

  //webfont
  //drupal_add_css('http://cloud.webtype.com/css/CXXXX.css','external');
  
  //googlefont 
  //  drupal_add_css('http://fonts.googleapis.com/css?family=Bree+Serif','external');
}

/*
function chalk_preprocess_region(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function chalk_preprocess_block(&$vars, $hook) {
  //  kpr($vars['content']);

  //lets look for unique block in a region $region-$blockcreator-$delta
   $block =  
   $vars['elements']['#block']->region .'-'. 
   $vars['elements']['#block']->module .'-'. 
   $vars['elements']['#block']->delta;
   
  // print $block .' ';
   switch ($block) {
     case 'header-menu_block-2':
       $vars['classes_array'][] = '';
       break;
     case 'sidebar-system-navigation':
       $vars['classes_array'][] = '';
       break;
    default:
    
    break;

   }


  switch ($vars['elements']['#block']->region) {
    case 'header':
      $vars['classes_array'][] = '';
      break;
    case 'sidebar':
      $vars['classes_array'][] = '';
      $vars['classes_array'][] = '';
      break;
    default:

      break;
  }

}
*/

/**
 * Preprocess node
 * @param $vars
 * @param $hook
 */
function chalk_preprocess_node(&$vars,$hook) {

  // replaces header with a custom banner if any
  global $base_url;
  $banner_url = '';
  if(isset($vars['content']['field_banner'][0]['#item']['uri'])){
    $banner_url = image_style_url($vars['content']['field_banner'][0]['#image_style'], $vars['content']['field_banner'][0]['#item']['uri']);
    /*
    $banner_variables = array(
      'path' => $banner_url,
      'alt' => $vars['content']['field_banner'][0]['#item']['alt'],
      'title' => $vars['content']['field_banner'][0]['#item']['title'],
      'width' => $vars['content']['field_banner'][0]['#item']['width'],
      'height' => $vars['content']['field_banner'][0]['#item']['height'],
      'attributes' => array('class' => 'banner',),
    );
    $vars['banner'] = theme_image($banner_variables);
    */
  }else{
    $banner_url = $base_url . '/' . drupal_get_path('theme', 'chalk') . '/images/banner.jpg';
  }

  $header_css = '
    #main > header {
      padding: 12em 0 10em 0 ;
      background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("'.$banner_url.'");
      background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("'.$banner_url.'");
      background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("'.$banner_url.'");
      background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("'.$banner_url.'");
      background-attachment: fixed;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      text-align: center;
	  }';

  drupal_add_css(
    $header_css,
    array(
      'group' => CSS_THEME,
      'type' => 'inline',
      'media' => 'screen',
      'preprocess' => FALSE,
      'weight' => '9999',
    )
  );

  /*
  // add a nodeblock 
  // in .info define a region : regions[block_in_a_node] = block_in_a_node 
  // in node.tpl  <?php if($noderegion){ ?> <?php print render($noderegion); ?><?php } ?>
  //$vars['block_in_a_node'] = block_get_blocks_by_region('block_in_a_node');
  */
}

/*
function chalk_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function chalk_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
  //add class to a specific field
  switch ($vars['element']['#field_name']) {
    case 'field_ROCK':
      $vars['classes_array'][] = 'classname1';
    case 'field_ROLL':
      $vars['classes_array'][] = 'classname1';
      $vars['classes_array'][] = 'classname2';
      $vars['classes_array'][] = 'classname1';
    case 'field_FOO':
      $vars['classes_array'][] = 'classname1';
    case 'field_BAR':
      $vars['classes_array'][] = 'classname1';    
    default:
      break;
  }

}
*/
/*
function chalk_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}
*/
/*
function chalk_form_alter(&$form, &$form_state, $form_id) {
  //if ($form_id == '') {
  //....
  //}
}
*/

