<?php
function apartment_form_alter( &$form, &$form_state, $form_id )
{
    if (in_array( $form_id, array( 'user_login', 'user_login_block')))
unset($form['name']['#title']);
  unset($form['name']['#description']);
  unset($form['pass']['#title']);
  unset($form['pass']['#description']);   
   {
        $form['name']['#attributes']['placeholder'] = t( 'Имя или email' );
        $form['pass']['#attributes']['placeholder'] = t( 'Пароль' );
    }
}

function apartment_form_comment_form_alter(&$form, &$form_state, $form_id) {
	$form['author']['homepage']['#access'] = FALSE;
  unset($form['author']['name']['#title']);
  unset($form['author']['name']['#description']);
  unset($form['author']['mail']['#title']);
  unset($form['author']['mail']['#description']); 
  unset($form['author']['homepage']['#title']);
  unset($form['author']['homepage']['#description']);   
   
        $form['author']['name']['#attributes']['placeholder'] = t( 'Имя' );
        $form['author']['mail']['#attributes']['placeholder'] = t( 'Ваш Email' );
       
        
    
}

function apartment_form_contact_site_form_alter(&$form, &$form_state, $form_id) {
  $form['author']['homepage']['#access'] = FALSE;
  unset($form['name']['#title']);
  unset($form['name']['#description']);
  unset($form['mail']['#title']);
  unset($form['mail']['#description']); 
  unset($form['subject']['#title']);
  unset($form['subject']['#description']);
  unset($form['message']['#title']);
  unset($form['message']['#description']);     
   
        $form['name']['#attributes']['placeholder'] = t( 'Имя' );
        $form['mail']['#attributes']['placeholder'] = t( 'Ваш Email' );
        $form['subject']['#attributes']['placeholder'] = t( 'Тема' );
        $form['message']['#attributes']['placeholder'] = t( 'Текст вашего сообщения...' );
        
    
}




function apartment_username($variables) {
  if (isset($variables['link_path'])) {
   
    $variables['link_options']['attributes'] = array_merge_recursive($variables['link_attributes'], $variables['attributes']);
    
    $output = l($variables['name'] . $variables['extra'], $variables['link_path'], $variables['link_options']);
  }
  else {
    $output = '<span' . backdrop_attributes($variables['attributes']) . '>' . $variables['name'] . '</span>';
  }
  return $output;
}

