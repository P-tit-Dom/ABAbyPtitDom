<?php

/**
 * @file
 * Contains \Drupal\ebt_core\Plugin\field\formatter\SnippetsDefaultFormatter.
 */

namespace Drupal\ebt_core\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'ebt_settings_default' formatter.
 *
 * @FieldFormatter(
 *   id = "ebt_settings_default",
 *   label = @Translation("EBT block settings default"),
 *   field_types = {
 *     "ebt_settings"
 *   }
 * )
 */
class EbtSettingsDefaultFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    foreach ($items as $delta => $item) {
      // Render output using ebt_settings_default theme.
      $source = [
        '#theme' => 'ebt_settings_default',
        '#ebt_settings' => $item->ebt_settings,
      ];

      $elements[$delta] = ['#markup' => \Drupal::service('renderer')->render($source)];
    }

    return $elements;
  }
}
