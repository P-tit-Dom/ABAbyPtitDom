<?php

namespace Drupal\ebt_basic_button\Services;

use Drupal\Component\Utility\Html;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\media\Entity\Media;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Transform Block settings in CSS.
 */
class GenerateCustomCSS implements ContainerInjectionInterface {

  /**
   * The EBT Core configuration.
   *
   * @var \Drupal\Core\Config\Config
   */
  protected $config;

  /**
   * Constructs a new GenerateCSS object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   Config factory.
   */
  public function __construct(ConfigFactoryInterface $config_factory) {
    $this->config = $config_factory->get('ebt_core.settings');
  }

  /**
   * Instantiates a new instance of this class.
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory')
    );
  }

  /**
   * Generate CSS from $settings.
   */
  public function generateFromSettings($settings, $block_class) {
    $styles = '';
    $hover_styles = '';
    $button_selector = '.' . $block_class . ' .ebt-basic-button';

    if (!empty($settings['title_color'])) {
      $title_color = str_replace('#', '', $settings['title_color']);
      $title_color = '#' . Html::escape($title_color);
    }
    else {
      $title_color = '#fff';
    }
    $styles .= ' color: ' . $title_color . ';';

    if (!empty($settings['background_color'])) {
      $background_color = str_replace('#', '', $settings['background_color']);
      $background_color = '#' . Html::escape($background_color) . ';';
    }
    else {
      // @todo Add primary bg color in global settings form
      $background_color = '#0d77b5';
    }
    $styles .= ' background-color: ' . $background_color . ';';

    if (!empty($settings['custom_hover_colors'])) {
      if (!empty($settings['hover_title_color'])) {
        $title_color = str_replace('#', '', $settings['hover_title_color']);
        $title_color = '#' . Html::escape($title_color);
      }
      else {
        $title_color = '#fff';
      }
      $hover_styles .= ' color: ' . $title_color . ';';

      if (!empty($settings['hover_background_color'])) {
        $background_color = str_replace('#', '', $settings['hover_background_color']);
        $background_color = '#' . Html::escape($background_color) . ';';
      }
      else {
        // @todo Add primary bg color in global settings form
        $background_color = '#0d77b5';
      }
      $hover_styles .= ' background-color: ' . $background_color . ';';
    }

    return '<style>'. $button_selector . '{' . $styles . '} ' . $button_selector . ':hover {' . $hover_styles . '} </style>';
  }
}
