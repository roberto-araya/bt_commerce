<?php

namespace Drupal\bt_commerce\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class CommerceRouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    if ($route = $collection->get('view.commerce_orders.page_1')) {
      $route->setOption('_admin_route', TRUE);
    }

    if ($route = $collection->get('view.commerce_carts.page_1')) {
      $route->setOption('_admin_route', TRUE);
    }

    if ($route = $collection->get('entity.commerce_order.collection')) {
      $route->setPath('/app/commerce/orders');
      $route->setOption('_admin_route', TRUE);
    }

    if ($route = $collection->get('entity.commerce_order.add_page')) {
      $route->setPath('/app/commerce/orders/add');
    }

    if ($route = $collection->get('entity.commerce_order.reassign_form')) {
      $route->setPath('/app/commerce/orders/{commerce_order}/reassign');
    }

    if ($route = $collection->get('entity.commerce_order.unlock_form')) {
      $route->setPath('/app/commerce/orders/{commerce_order}/unlock');
    }

    if ($route = $collection->get('entity.commerce_product_attribute.collection')) {
      $route->setPath('/app/commerce/product-attributes');
      $route->setOption('_admin_route', TRUE);
    }

    if ($route = $collection->get('entity.commerce_product_attribute.add_form')) {
      $route->setPath('/app/commerce/product-attributes/add');
      $route->setOption('_admin_route', TRUE);
    }

    if ($route = $collection->get('entity.commerce_product.collection')) {
      $route->setPath('/app/commerce/products');
      $route->setOption('_admin_route', TRUE);
    }

    if ($route = $collection->get('entity.commerce_product.add_page')) {
      $route->setPath('/app/commerce/products/add');
      $route->setOption('_admin_route', TRUE);
    }

    if ($route = $collection->get('entity.commerce_promotion.collection')) {
      $route->setPath('/app/commerce/promotions');
      $route->setOption('_admin_route', TRUE);
    }

    if ($route = $collection->get('entity.commerce_promotion.add_form')) {
      $route->setPath('/app/commerce/promotions/add');
      $route->setOption('_admin_route', TRUE);
    }

  }

}
