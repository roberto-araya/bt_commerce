<?php

namespace Drupal\bt_commerce\Config;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Config\ConfigFactoryOverrideInterface;
use Drupal\Core\Config\StorageInterface;

/**
 * Example configuration override.
 */
class ConfigCommerceOverride implements ConfigFactoryOverrideInterface {

  /**
   * {@inheritdoc}
   */
  public function loadOverrides($names) {
    $overrides = [];

    if (in_array('views.view.commerce_orders', $names)) {
      $overrides['views.view.commerce_orders']['display']['page_1']['display_options']['path'] = 'app/commerce/orders/list';
    }

    if (in_array('views.view.commerce_carts', $names)) {
      $overrides['views.view.commerce_carts']['display']['page_1']['display_options']['path'] = 'app/commerce/orders/carts';
    }
    return $overrides;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheSuffix() {
    return 'ConfigCommerceOverride';
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheableMetadata($name) {
    return new CacheableMetadata();
  }

  /**
   * {@inheritdoc}
   */
  public function createConfigObject($name, $collection = StorageInterface::DEFAULT_COLLECTION) {
    return NULL;
  }

}
