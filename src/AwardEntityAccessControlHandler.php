<?php

namespace Drupal\award;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the The Award Entity entity.
 *
 * @see \Drupal\award\Entity\AwardEntity.
 */
class AwardEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\award\Entity\AwardEntityInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished the award entity entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published the award entity entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit the award entity entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete the award entity entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add the award entity entities');
  }

}
