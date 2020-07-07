<?php

namespace Drupal\simplenews_content_selection\Form;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormStateInterface;

class SimplenewsContentSelectionAdminForm extends FormBase implements FormInterface, ContainerInjectionInterface {

  /**
   * {@inheritDoc}
   */
  public function getFormId() {
    return 'simplenews_content_selection_admin_form';
  }

  /**
   * {@inheritDoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    //
  }

  /**
   * {@inheritDoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    //
  }

  /**
   * {@inheritDoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    //
  }

}
