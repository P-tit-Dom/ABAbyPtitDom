<?php

namespace Drupal\ebt_basic_button\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\ebt_core\Plugin\Field\FieldWidget\EbtSettingsDefaultWidget;

/**
 * Plugin implementation of the 'ebt_settings_basic_button' widget.
 *
 * @FieldWidget(
 *   id = "ebt_settings_basic_button",
 *   label = @Translation("EBT Basic Button settings"),
 *   field_types = {
 *     "ebt_settings"
 *   }
 * )
 */
class EbtSettingsBasicButtonWidget extends EbtSettingsDefaultWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    $element['#attached']['library'][] = 'ebt_core/colorpicker';
    $element['#attached']['library'][] = 'ebt_basic_button/ebt_basic_button_form';
    $element['ebt_settings']['open_in_new_tab'] = [
      '#title' => $this->t('Open the link in a new tab'),
      '#type' => 'checkbox',
      '#default_value' => isset($items[$delta]->ebt_settings['open_in_new_tab']) ? $items[$delta]->ebt_settings['open_in_new_tab'] : NULL,
    ];

    $element['ebt_settings']['add_nofollow'] = [
      '#title' => $this->t('Add "nofollow" option to the link'),
      '#type' => 'checkbox',
      '#default_value' => isset($items[$delta]->ebt_settings['add_nofollow']) ? $items[$delta]->ebt_settings['add_nofollow'] : NULL,
    ];

    $element['ebt_settings']['title_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Title Color'),
      '#default_value' => isset($items[$delta]->ebt_settings['title_color']) ? $items[$delta]->ebt_settings['title_color'] : '#ffffff',
      '#attributes' => [
        'placeholder' => $this->t('Title Color'),
      ],
    ];

    $element['ebt_settings']['background_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Background Color'),
      '#default_value' => isset($items[$delta]->ebt_settings['background_color']) ? $items[$delta]->ebt_settings['background_color'] : '#0d77b5',
      '#attributes' => [
        'placeholder' => $this->t('Background Color'),
      ],
    ];

    $element['ebt_settings']['custom_hover_colors'] = [
      '#title' => $this->t('Custom hover colors'),
      '#type' => 'checkbox',
      '#default_value' => isset($items[$delta]->ebt_settings['custom_hover_colors']) ? $items[$delta]->ebt_settings['custom_hover_colors'] : NULL,
    ];

    $element['ebt_settings']['hover_title_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Hover Title Color'),
      '#default_value' => isset($items[$delta]->ebt_settings['hover_title_color']) ? $items[$delta]->ebt_settings['hover_title_color'] : '',
      '#attributes' => [
        'placeholder' => $this->t('Hover Title Color'),
      ],
      '#states' => array(
        'invisible' => array(
          ':input[name="field_ebt_settings[0][ebt_settings][custom_hover_colors]"]' => array('checked' => FALSE),
        ),
      ),
    ];

    $element['ebt_settings']['hover_background_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Hover Background Color'),
      '#default_value' => isset($items[$delta]->ebt_settings['hover_background_color']) ? $items[$delta]->ebt_settings['hover_background_color'] : '',
      '#attributes' => [
        'placeholder' => $this->t('Hover Background Color'),
      ],
      '#states' => array(
        'invisible' => array(
          ':input[name="field_ebt_settings[0][ebt_settings][custom_hover_colors]"]' => array('checked' => FALSE),
        ),
      ),
    ];

    $element['ebt_settings']['alignment'] = [
      '#title' => $this->t('Alignment'),
      '#type' => 'radios',
      '#options' => [
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right',
      ],
      '#default_value' => isset($items[$delta]->ebt_settings['alignment']) ? $items[$delta]->ebt_settings['alignment'] : 'left',
    ];

    $element['ebt_settings']['shape'] = [
      '#title' => $this->t('Shape'),
      '#type' => 'radios',
      '#options' => [
        'square' => 'Square',
        'round' => 'Round',
        'circle' => 'Circle',
      ],
      '#default_value' => isset($items[$delta]->ebt_settings['shape']) ? $items[$delta]->ebt_settings['shape'] : 'square',
    ];

    $element['ebt_settings']['size'] = [
      '#title' => $this->t('Size'),
      '#type' => 'radios',
      '#options' => [
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
      ],
      '#default_value' => isset($items[$delta]->ebt_settings['size']) ? $items[$delta]->ebt_settings['size'] : 'medium',
    ];

    $element['ebt_settings']['stetched'] = [
      '#title' => $this->t('Stretched'),
      '#type' => 'checkbox',
      '#default_value' => isset($items[$delta]->ebt_settings['stetched']) ? $items[$delta]->ebt_settings['stetched'] : NULL,
    ];

    $element['ebt_settings']['custom_class_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Custom class name'),
      '#default_value' => isset($items[$delta]->ebt_settings['custom_class_name']) ? $items[$delta]->ebt_settings['custom_class_name'] : '',
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
