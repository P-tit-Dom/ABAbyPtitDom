<?php

/**
 * @file
 * Contains \Drupal\ebt_core\Plugin\Field\FieldWidget\EbtSettingsDefaultWidget.
 */

namespace Drupal\ebt_core\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'ebt_settings_default' widget.
 *
 * @FieldWidget(
 *   id = "ebt_settings_default",
 *   label = @Translation("EBT default block settings"),
 *   field_types = {
 *     "ebt_settings"
 *   }
 * )
 */
class EbtSettingsDefaultWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element['#attached']['library'][] = 'ebt_core/colorpicker';
    $moduleHandler = \Drupal::service('module_handler');
    if ($moduleHandler->moduleExists('field_group')) {
      $element['#attached']['library'][] = 'field_group/element.horizontal_tabs';
    }
    $element['#attached']['library'][] = 'ebt_core/ebt_settings';

    $element['ebt_settings'] = [
      '#type' => 'details',
      '#title' => 'Block settings',
      '#open' => TRUE,
    ];

    $element['ebt_settings']['pass_options_to_javascript'] = [
      '#type' => 'hidden',
      '#value' => FALSE,
    ];

    $element['ebt_settings']['design_options'] = [
      '#type' => 'details',
      '#title' => 'Design options',
      '#open' => FALSE,
    ];

    $element['ebt_settings']['design_options']['box1'] = [
      '#type' => 'container',
      '#attributes' => array(
        'class' => 'design-options__margin-box',
      ),
    ];

    $element['ebt_settings']['design_options']['box1']['label'] = [
      '#type' => 'html_tag',
      '#tag' => 'label',
      '#value' => $this->t('Margin'),
    ];

    $element['ebt_settings']['design_options']['box1']['margin_top'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Top'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['margin_top']) ? $items[$delta]->ebt_settings['design_options']['box1']['margin_top'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['margin_right'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Right'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['margin_right']) ? $items[$delta]->ebt_settings['design_options']['box1']['margin_right'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['margin_bottom'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Bottom'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['margin_bottom']) ? $items[$delta]->ebt_settings['design_options']['box1']['margin_bottom'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['margin_left'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Left'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['margin_left']) ? $items[$delta]->ebt_settings['design_options']['box1']['margin_left'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['box2'] = [
      '#type' => 'container',
      '#attributes' => array(
        'class' => 'design-options__border-box',
      ),
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['label'] = [
      '#type' => 'html_tag',
      '#tag' => 'label',
      '#value' => $this->t('Border'),
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['border_top'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Top'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['box2']['border_top']) ? $items[$delta]->ebt_settings['design_options']['box1']['box2']['border_top'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['border_right'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Right'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['box2']['border_right']) ? $items[$delta]->ebt_settings['design_options']['box1']['box2']['border_right'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['border_bottom'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Bottom'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['box2']['border_bottom']) ? $items[$delta]->ebt_settings['design_options']['box1']['box2']['border_bottom'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['border_left'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Left'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['box2']['border_left']) ? $items[$delta]->ebt_settings['design_options']['box1']['box2']['border_left'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['box3'] = [
      '#type' => 'container',
      '#attributes' => array(
        'class' => 'design-options__padding-box',
      ),
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['box3']['label'] = [
      '#type' => 'html_tag',
      '#tag' => 'label',
      '#value' => $this->t('Padding'),
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['box3']['padding_top'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Top'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['box2']['box3']['padding_top']) ? $items[$delta]->ebt_settings['design_options']['box1']['box2']['box3']['padding_top'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['box3']['padding_right'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Right'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['box2']['box3']['padding_right']) ? $items[$delta]->ebt_settings['design_options']['box1']['box2']['box3']['padding_right'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['box3']['padding_bottom'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Bottom'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['box2']['box3']['padding_bottom']) ? $items[$delta]->ebt_settings['design_options']['box1']['box2']['box3']['padding_bottom'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['box3']['padding_left'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Left'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['box1']['box2']['box3']['padding_left']) ? $items[$delta]->ebt_settings['design_options']['box1']['box2']['box3']['padding_left'] : '',
      '#attributes' => [
        'placeholder' => '-',
      ],
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['box3']['box4'] = [
      '#type' => 'container',
      '#attributes' => array(
        'class' => 'design-options__logo-box',
      ),
    ];

    $element['ebt_settings']['design_options']['box1']['box2']['box3']['box4']['label'] = [
      '#type' => 'html_tag',
      '#tag' => 'label',
      '#value' => $this->t('EBT'),
    ];

    $element['ebt_settings']['design_options']['other_settings']['border_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Border Color'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['other_settings']['border_color']) ? $items[$delta]->ebt_settings['design_options']['other_settings']['border_color'] : '',
      '#attributes' => [
        'placeholder' => $this->t('Select Color'),
      ],
    ];

    $element['ebt_settings']['design_options']['other_settings']['border_style'] = [
      '#type' => 'select',
      '#title' => $this->t('Border Style'),
      '#options' => [
        'solid' => $this->t('Solid'),
        'dashed' => $this->t('Dashed'),
        'dotted' => $this->t('Dotted'),
        'none' => $this->t('None'),
        'hidden' => $this->t('Hidden'),
        'initial' => $this->t('Initial'),
        'inherit' => $this->t('Inherit'),
        'double' => $this->t('Double'),
        'groove' => $this->t('Groove'),
        'ridge' => $this->t('Ridge'),
        'inset' => $this->t('Inset'),
        'outset' => $this->t('Outset'),
      ],
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['other_settings']['border_style']) ? $items[$delta]->ebt_settings['design_options']['other_settings']['border_style'] : '',
    ];

    $element['ebt_settings']['design_options']['other_settings']['border_radius'] = [
      '#type' => 'select',
      '#title' => $this->t('Border Radius'),
      '#options' => [
        'none' => $this->t('None'),
        '1px' => '1px',
        '2px' => '2px',
        '3px' => '3px',
        '4px' => '4px',
        '5px' => '5px',
        '10px' => '10px',
        '15px' => '15px',
        '20px' => '20px',
        '25px' => '25px',
        '30px' => '30px',
        '35px' => '35px',
      ],
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['other_settings']['border_style']) ? $items[$delta]->ebt_settings['design_options']['other_settings']['border_style'] : 'none',
    ];

    $element['ebt_settings']['design_options']['other_settings']['background_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Background Color'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['other_settings']['background_color']) ? $items[$delta]->ebt_settings['design_options']['other_settings']['background_color'] : '',
      '#attributes' => [
        'placeholder' => $this->t('Select Color'),
      ],
    ];

    $element['ebt_settings']['design_options']['other_settings']['background_media'] = [
      '#type' => 'media_library',
      '#allowed_bundles' => ['image', 'remote_video'],
      '#title' => t('Background Image/Video'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['other_settings']['background_media']) ? $items[$delta]->ebt_settings['design_options']['other_settings']['background_media'] : NULL,
      '#description' => t('Upload your image, video or Youtube video.'),
    ];

    $element['ebt_settings']['design_options']['other_settings']['background_image_style'] = [
      '#type' => 'select',
      '#title' => $this->t('Background Image Style'),
      '#options' => [
        'default' => $this->t('No repeat'),
        'parallax' => $this->t('Parallax'),
        'cover' => $this->t('Cover'),
        'contain' => $this->t('Contain'),
        'repeat' => $this->t('Repeat'),
      ],
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['other_settings']['background_image_style']) ? $items[$delta]->ebt_settings['design_options']['other_settings']['background_image_style'] : 'default',
    ];

    $element['ebt_settings']['design_options']['other_settings']['edge_to_edge'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Edge to Edge'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['other_settings']['edge_to_edge']) ? $items[$delta]->ebt_settings['design_options']['other_settings']['edge_to_edge'] : 0,
    ];

    $element['ebt_settings']['design_options']['other_settings']['container_width'] = [
      '#type' => 'select',
      '#title' => $this->t('Container Max Width'),
      '#options' => [
        'auto' => $this->t('Auto (100%)'),
        'xxsmall' => $this->t('xxSmall'),
        'xsmall' => $this->t('xSmall'),
        'small' => $this->t('Small'),
        'default' => $this->t('Default'),
        'large' => $this->t('Large'),
        'xlarge' => $this->t('xLarge'),
        'xxlarge' => $this->t('xxLarge'),
//        'custom' => $this->t('Set custom max width'),
        // @todo Add Custom Width field and show it when custom value is selected.
      ],
      '#description' => $this->t('See EBT Core configuration form to set Container Width and other default values.'),
      '#default_value' => isset($items[$delta]->ebt_settings['design_options']['other_settings']['container_width']) ? $items[$delta]->ebt_settings['design_options']['other_settings']['container_width'] : 'auto',
    ];

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function massageFormValues(array $values, array $form, FormStateInterface $form_state) {
    foreach ($values as &$value) {
      $value += ['ebt_settings' => []];
    }
    return $values;
  }

}
