<?php

namespace Drupal\nrc_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class NRCExampleForm extends FormBase {
  public function getFormId() {
    return 'my_example_module_form';
  }
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['my_example'] = [
      '#markup' => t('Hello NRC module'),
    ];
    return $form;
  }
}

