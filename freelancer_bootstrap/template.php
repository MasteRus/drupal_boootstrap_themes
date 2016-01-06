<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function Freelancer_bootstrap_preprocess_webform_element(&$variables) {
  $variables['name']['#wrapper_attributes']['class'][] = 'another-wrapper-class';
  $variables['name']['#wrapper_attributes']['class'][] = 'another-wrapper-class';
}


function Freelancer_bootstrap_form_alter(&$form, &$form_state, $form_id) {
  if (!empty($form['actions']) && $form['actions']['submit']) {
    $form['actions']['submit']['#attributes'] = array('class' => array('btn-block','btn-default','superform_submit','webform-submit','first', 'button', 'radius', 'col-lg-2','offset5' ));
	$form['actions']['#attributes'] = array('class' => array('form-group', 'col-lg-8', 'col-lg-offset-2', 'floating-label-form-group', 'controls' ));
  }
}
