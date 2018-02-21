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
}
