<?php
/**
 * @file
 * contains \Drupal\rsvplist\Plugin\Block\RSVPBlock
 */
namespace Drupal\rsvplist\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Form\FormInterface;

/**
 * Provides an RSVP list block
 * @Block (
 *   id = "rsvp_block",
 *   admin_label = @Translation("RSVP Block"),
 *   )
 */

class RSVPBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */

  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\rsvplist\Form\RSVPForm');
    return $form;
  }
}