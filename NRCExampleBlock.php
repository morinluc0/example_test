<?php

namespace Drupal\nrc_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'NRC Example' Block.
 *
 * @Block(
 *   id = "nrc_example_block",
 *   admin_label = @Translation("NRC Example block"),
 *   category = @Translation("NRC"),
 * )
 */
class NRCExampleBlock extends BlockBase {
  public function build() {
    return array(
      '#markup' => $this->t('Hello NRC'),
    );
  }
  public function blockForm($form, FormStateInterface $form_state) {
    $form['nrc_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('NRC text'),
      '#default_value' => $this->configuration['nrc_text'];
    ];
    return $form;
 }
 public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['nrc_text'] = $form_state->getValue('nrc_text');
 }
}
