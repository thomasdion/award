<?php

/**
 * @file
 * Contains award_entity.page.inc.
 *
 * Page callback for The Award Entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for The Award Entity templates.
 *
 * Default template: award_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_award_entity(array &$variables) {
  // Fetch AwardEntity Entity Object.
  $award_entity = $variables['elements']['#award_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
