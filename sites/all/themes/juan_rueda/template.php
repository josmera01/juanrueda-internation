<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function juan_rueda_menu_link__menu_menu_secciones_principales(&$variables) {
   $element = $variables['element'];
  $sub_menu = '';

  $element['#attributes']['class'][] = 'menu-' . $element['#original_link']['mlid'];

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }

  if (isset($element['#localized_options']['attributes']['title'])) {
    $output = l('<span class="titulo_menu">' . $element['#title'] .'</span><span class="texto">'. $element['#localized_options']['attributes']['title'] . '</span>', $element['#href'], array('attributes' => $element['#localized_options']['attributes'], 'html' => TRUE));
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu  ."</li>\n";
  }


}



function juan_rueda_preprocess_page(&$variables) {
  $title = drupal_get_title();


  $paths = implode("\n", array(
    'tips/*',
  ));

  $path = current_path();



  if (drupal_match_path($path, $paths)) {
    //Titulo que salga con tildes
    $title = str_replace('-', " ", $title);
    $term = reset(taxonomy_get_term_by_name($title));
    $title =  $term->name;
    //Para que salga también la miga de pan
    $breadcrumb[] = l('Inicio', '<front>');
    $breadcrumb[] = l($title, '');

    drupal_set_breadcrumb($breadcrumb);

  }


  $caracter = explode(" ", $title);
  $title = str_replace($caracter[0], "", $title);

  $texto_primero = ucwords($caracter[0]);

  drupal_set_title($texto_primero .' '. $title);


}

