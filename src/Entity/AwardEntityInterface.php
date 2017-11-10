<?php

namespace Drupal\award\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining The Award Entity entities.
 *
 * @ingroup award
 */
interface AwardEntityInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the The Award Entity name.
   *
   * @return string
   *   Name of the The Award Entity.
   */
  public function getName();

  /**
   * Sets the The Award Entity name.
   *
   * @param string $name
   *   The The Award Entity name.
   *
   * @return \Drupal\award\Entity\AwardEntityInterface
   *   The called The Award Entity entity.
   */
  public function setName($name);

  /**
   * Gets the The Award Entity url.
   *
   * @return string
   *   Url of the The Award Entity.
   */
  public function getUrl();

  /**
   * Sets the The Award Entity url.
   *
   * @param string $url
   *   The The Award Entity url.
   *
   * @return \Drupal\award\Entity\AwardEntityInterface
   *   The called The Award Entity entity.
   */
  public function setUrl($url);

  /**
   * Gets the The Award Entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the The Award Entity.
   */
  public function getCreatedTime();

  /**
   * Sets the The Award Entity creation timestamp.
   *
   * @param int $timestamp
   *   The The Award Entity creation timestamp.
   *
   * @return \Drupal\award\Entity\AwardEntityInterface
   *   The called The Award Entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the The Award Entity published status indicator.
   *
   * Unpublished The Award Entity are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the The Award Entity is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a The Award Entity.
   *
   * @param bool $published
   *   TRUE to set this The Award Entity to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\award\Entity\AwardEntityInterface
   *   The called The Award Entity entity.
   */
  public function setPublished($published);

}
