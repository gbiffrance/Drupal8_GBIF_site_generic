<?php

namespace Drupal\gbifpublishers\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class GBIFPublishersForm extends ConfigFormBase {

    /**
     * {@inheritdoc}
     */
    public function getFormId() {
        return 'gbifpublishers_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        // Form constructor.
        $form = parent::buildForm($form, $form_state);
        // Default settings.
        $config = $this->config('gbifpublishers.settings');

        // Page title field.
        $form['uuid_code'] = [
            '#type' => 'textfield',
            '#title' => $this->t('UUID GBIF Code of the country'),
            '#default_value' => $config->get('gbifpublishers.uuid_code'),
            '#description' => $this->t('Write the GBIF UUID code of the country'),
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state) {

    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        $config = $this->config('gbifpublishers.settings');
        $config->set('gbifpublishers.uuid_code', $form_state->getValue('uuid_code'));
        $config->save();
        return parent::submitForm($form, $form_state);
    }

    /**
     * {@inheritdoc}
     */
    protected function getEditableConfigNames() {
        return [
            'gbifpublishers.settings',
        ];
    }

}