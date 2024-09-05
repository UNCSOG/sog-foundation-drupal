<?php

namespace Drupal\sog_unc_cookie_policy\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;

/**
 * Provides a 'SOG UNC Cookie Banner' block.
 *
 * @Block(
 *   id = "sog_unc_cookie_banner_block",
 *   admin_label = @Translation("SOG UNC Cookie Banner Block"),
 *   category = @Translation("SOG")
 * )
 */
class SogUncCookieBannerBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['label_display' => FALSE];
  }

  /**
   * {@inheritdoc}
   *
   * Returns cache contexts for this block.
   */
  public function getCacheContexts() {
    // If you have any additional cache contexts to add,
    // you should include them in the array, e.g., ['ip'].
    return Cache::mergeContexts(parent::getCacheContexts(), ['ip']);
  }

  /**
   * {@inheritdoc}
   *
   * Builds the render array for the cookie banner block.
   */
  public function build() {
    return [
      '#theme' => 'cookie_banner_block',
      '#banner' => 'banner',
    ];
  }

}
