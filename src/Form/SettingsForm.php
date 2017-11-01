<?php

namespace Drupal\cloud_zoom\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfigFormBase;

/**
 * Configure site information settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['cloud_zoom.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'cloud_zoom_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('cloud_zoom.settings');


    return parent::buildForm($form, $form_state);
  }


  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $this->config('cloud_zoom.settings')
      ->set('foo', $form_state->getValue('foo'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
