<?php

namespace Drupal\award\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for The Award Entity entities.
 */
class AwardEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
