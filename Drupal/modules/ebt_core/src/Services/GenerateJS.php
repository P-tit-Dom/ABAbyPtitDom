<?php

namespace Drupal\ebt_core\Services;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\media\Entity\Media;
use Drupal\media\OEmbed\UrlResolver;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Transform Block settings in JS.
 */
class GenerateJS implements ContainerInjectionInterface {

  /**
   * The EBT Core configuration.
   *
   * @var \Drupal\Core\Config\Config
   */
  protected $config;

  /**
   * Converts oEmbed media URLs into endpoint-specific resource URLs.
   *
   * @var \Drupal\media\OEmbed\UrlResolver
   */
  protected $urlResolver;

  /**
   * Constructs a new GenerateCSS object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   Config factory.
   * @param \Drupal\media\OEmbed\UrlResolver $url_resolver
   *   Converts oEmbed media URLs into endpoint-specific resource URLs.
   */
  public function __construct(ConfigFactoryInterface $config_factory, UrlResolver $url_resolver) {
    $this->config = $config_factory->get('ebt_core.settings');
    $this->urlResolver = $url_resolver;
  }

  /**
   * Instantiates a new instance of this class.
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('media.oembed.url_resolver')
    );
  }

  /**
   * Generate JS from $settings.
   */
  public function generateFromSettings($settings) {
    $javascript_data = [];

    if (!empty($settings['other_settings']['background_media'])) {
      $media = Media::load($settings['other_settings']['background_media']);
      if ($media->bundle() == 'image') {
        $uri = $media->field_media_image->entity->getFileUri();
        $media_url = file_create_url($uri);
        if (!empty($media_url) && !empty($settings['other_settings']['background_image_style']) &&
          $settings['other_settings']['background_image_style'] == 'parallax') {
          $javascript_data['ebtCoreParallax']['mediaUrl'] = $media_url;
        }
      }
      else if ($media->bundle() == 'remote_video') {
        $javascript_data['ebtCoreBackgroundRemoteVideo']['mediaUrl'] = $media->field_media_oembed_video->value;
        $provider = $this->urlResolver->getProviderByUrl($media->field_media_oembed_video->value);
        if ($provider->getName() == 'YouTube') {
          $javascript_data['ebtCoreBackgroundRemoteVideo']['mediaProvider'] = 'YouTube';
        }
      }
    }

    return $javascript_data;
  }
}
