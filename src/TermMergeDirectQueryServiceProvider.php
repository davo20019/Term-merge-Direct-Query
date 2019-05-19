<?php

namespace Drupal\term_merge_direct_query;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class TermMergeDirectQueryServiceProvider.
 *
 * @package Drupal\term_merge_direct_query
 */
class TermMergeDirectQueryServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    $definition = $container->getDefinition('term_merge.term_merger');
    $definition->setClass('Drupal\term_merge_direct_query\TermMergerDirectQuery');
  }

}