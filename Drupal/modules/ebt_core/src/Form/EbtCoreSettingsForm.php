<?php

namespace Drupal\ebt_core\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Extra Block Types settings for this site.
 */
class EbtCoreSettingsForm extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'ebt_core.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ebt_core_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);

    $form['ebt_core_primary_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Primary Color'),
      '#default_value' => $config->get('ebt_core_primary_color'),
      '#description' => $this->t('HEX color, for example #ff0000.')
    ];

    $form['ebt_core_primary_button_text_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Primary Button Text color'),
      '#default_value' => $config->get('ebt_core_primary_button_text_color'),
      '#description' => $this->t('HEX color, for example #ffffff.')
    ];

    $form['ebt_core_secondary_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Secondary Color'),
      '#default_value' => $config->get('ebt_core_primary_color'),
      '#description' => $this->t('HEX color, for example #0000ff.')
    ];

    $form['ebt_core_secondary_button_text_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Secondary Button Text color'),
      '#default_value' => $config->get('ebt_core_secondary_button_text_color'),
      '#description' => $this->t('HEX color, for example #ffffff.')
    ];

    $form['ebt_core_mobile_breakpoint'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mobile breakpoint'),
      '#default_value' => $config->get('ebt_core_mobile_breakpoint'),
    ];

    $form['ebt_core_tablet_breakpoint'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Tablet breakpoint'),
      '#default_value' => $config->get('ebt_core_tablet_breakpoint'),
    ];

    $form['ebt_core_desktop_breakpoint'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Desktop breakpoint'),
      '#default_value' => $config->get('ebt_core_desktop_breakpoint'),
    ];

    $form['ebt_core_xxsmall_width'] = [
      '#type' => 'textfield',
      '#title' => $this->t('xxSmall width'),
      '#default_value' => $config->get('ebt_core_xxsmall_width'),
    ];

    $form['ebt_core_xsmall_width'] = [
      '#type' => 'textfield',
      '#title' => $this->t('xSmall width'),
      '#default_value' => $config->get('ebt_core_xsmall_width'),
    ];

    $form['ebt_core_small_width'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Small width'),
      '#default_value' => $config->get('ebt_core_small_width'),
    ];

    $form['ebt_core_default_width'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default width'),
      '#default_value' => $config->get('ebt_core_default_width'),
    ];

    $form['ebt_core_large_width'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Large width'),
      '#default_value' => $config->get('ebt_core_large_width'),
    ];

    $form['ebt_core_xlarge_width'] = [
      '#type' => 'textfield',
      '#title' => $this->t('xLarge width'),
      '#default_value' => $config->get('ebt_core_xlarge_width'),
    ];

    $form['ebt_core_xxlarge_width'] = [
      '#type' => 'textfield',
      '#title' => $this->t('xxLarge width'),
      '#default_value' => $config->get('ebt_core_xxlarge_width'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->configFactory->getEditable(static::SETTINGS)
      ->set('ebt_core_mobile_breakpoint', $form_state->getValue('ebt_core_mobile_breakpoint'))
      ->set('ebt_core_tablet_breakpoint', $form_state->getValue('ebt_core_tablet_breakpoint'))
      ->set('ebt_core_desktop_breakpoint', $form_state->getValue('ebt_core_desktop_breakpoint'))
      ->set('ebt_core_xsmall_width', $form_state->getValue('ebt_core_xsmall_width'))
      ->set('ebt_core_small_width', $form_state->getValue('ebt_core_small_width'))
      ->set('ebt_core_default_width', $form_state->getValue('ebt_core_default_width'))
      ->set('ebt_core_large_width', $form_state->getValue('ebt_core_large_width'))
      ->set('ebt_core_xlarge_width', $form_state->getValue('ebt_core_xlarge_width'))
      ->set('ebt_core_xxlarge_width', $form_state->getValue('ebt_core_xxlarge_width'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
