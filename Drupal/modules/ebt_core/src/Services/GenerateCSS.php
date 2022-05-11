<?php

namespace Drupal\ebt_core\Services;

use Drupal\Component\Utility\Html;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\media\Entity\Media;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Transform Block settings in CSS.
 */
class GenerateCSS implements ContainerInjectionInterface {

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
    $global_styles = '';

    $positions = [
      'top',
      'right',
      'bottom',
      'left',
    ];

    if (!empty($settings['other_settings']['border_color'])) {
      $border_color = str_replace('#', '', $settings['other_settings']['border_color']);
      $border_color = '#' . Html::escape($border_color);
    }
    else {
      $border_color = '#000';
    }
    $border_style = !empty($settings['other_settings']['border_style']) ? Html::escape($settings['other_settings']['border_style']) : 'solid';

    foreach ($positions as $position) {
      if (!empty($settings['box1']['margin_' . $position])) {
        $margin_width = str_replace('px', '', $settings['box1']['margin_' . $position]);
        $styles .= ' margin-' . $position . ': ' . Html::escape($margin_width) . 'px !important;';
      }

      if (!empty($settings['box1']['box2']['border_' . $position])) {
        $border_width = str_replace('px', '', $settings['box1']['box2']['border_' . $position]);
        $styles .= ' border-' . $position . ': ' . Html::escape($border_width) . 'px ' . Html::escape($border_color) . ' ' . Html::escape($border_style) . ' !important;';
      }

      if (!empty($settings['box1']['box2']['box3']['padding_' . $position])) {
        $padding_width = str_replace('px', '', $settings['box1']['box2']['box3']['padding_' . $position]);
        $styles .= ' padding-' . $position . ': ' . Html::escape($padding_width) . 'px !important;';
      }
    }

    if (!empty($settings['other_settings']['border_radius']) && $settings['other_settings']['border_radius'] != 'none') {
      $styles .= ' border-radius: ' . Html::escape($settings['other_settings']['border_radius']) . ';';
    }

    if (!empty($settings['other_settings']['background_media'])) {
      $media = Media::load($settings['other_settings']['background_media']);
      if ($media->bundle() == 'image') {

        $uri = $media->field_media_image->entity->getFileUri(); // It is for image media.
        $media_url = file_create_url($uri);

        if (!empty($media_url)) {
          if (!empty($settings['other_settings']['background_image_style']) &&
            $settings['other_settings']['background_image_style'] != 'parallax') {
            $styles .= ' background: url("' . $media_url . '") center center no-repeat;';
          }

          switch ($settings['other_settings']['background_image_style']) {
            case 'cover':
              $styles .= ' background-size: cover !important;';
              break;
            case 'contain':
              $styles .= ' background-size: contain !important;';
              break;
            case 'repeat':
              $styles .= ' background-repeat: repeat !important;';
              break;
          }
        }
      }
    }

    if (!empty($settings['other_settings']['background_color'])) {
      $background_color = str_replace('#', '', $settings['other_settings']['background_color']);
      $styles .= ' background-color: #' . Html::escape($background_color) . ';';
    }

    if (!empty($settings['other_settings']['edge_to_edge'])) {
      $global_styles .= '.ebt-edge-to-edge {';
      $global_styles .= ' overflow: hidden;';
      $global_styles .= ' width: 100vw; ';
      $global_styles .= ' max-width: 100vw; ';
      $global_styles .= ' margin-left: calc(-50vw + 50%) !important; ';
      $global_styles .= ' margin-right: calc(-50vw + 50%) !important; ';
      $global_styles .= ' object-fit: cover; ';
      $global_styles .= '} ';

      $global_styles .= 'body { overflow-x: hidden; }';

      if (!empty($settings['other_settings']['container_width']) &&
        $settings['other_settings']['container_width'] != 'auto') {
        $container_width_default = [
          'xxsmall' => '280',
          'xsmall' => '480',
          'small' => '780',
          'default' => '960',
          'large' => '1120',
          'xlarge' => '1320',
          'xxlarge' => '1600',
        ];

        $width = $this->config->get('ebt_core_' . $settings['other_settings']['container_width'] . '_width');
        if (empty($width)) {
          $width = $container_width_default[$settings['other_settings']['container_width']];
        }

        $global_styles .= ' .ebt-width-' . Html::escape($settings['other_settings']['container_width']) . ' .ebt-container { ';
        $global_styles .= ' max-width: ' . $width . 'px; ';
        $global_styles .= ' margin: 0 auto; ';
        $global_styles .= '} ';
      }
    }

    if (empty($styles) && empty($global_styles)) {
      return '';
    }

    return '<style>.'. $block_class . '{' . $styles . '} ' . $global_styles . ' </style>';
  }
}
