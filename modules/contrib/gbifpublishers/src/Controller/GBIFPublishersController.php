<?php

namespace Drupal\gbifpublishers\Controller;

use Drupal\Core\Url;
// Change following https://www.drupal.org/node/2457593
// See https://www.drupal.org/node/2549395 for deprecate methods information
use Drupal\Component\Utility\Html;
use Drupal\Core\Render\Element;

/**
 * Controller routines for GBIF Publisher pages.
 */
class GBIFPublishersController {

    /**
     * Prepare the publisher data to be dispaying on one page
     * the publisher data are on a file named by the uuid code of the publisher
     * * This callback is mapped to the path 'gbifpublishers/display
     * @param $organisation_key     the uuid code of the publisher on the GBIF network
     * @return mixed                html displaying the GBIF data on one country
     */
    public function display($publisher_key){

        //Path of the module
        $module_handler = \Drupal::service('module_handler');
        $module_path = $module_handler->getModule('gbifpublishers')->getPath();

        //Gettings the data from the file
        $infos_organisation_json = file_get_contents($module_path . '/data/' . $publisher_key . '.json');
        $infos_organisation = json_decode($infos_organisation_json, true);

        //Initialing variables
        $element['#publisher_datasets']  = array();

        $element['#publisher_key']          = Html::escape("" . $publisher_key);
        $element['#publisher_title']        = Html::escape("" . $infos_organisation['organisation_title']);
        $element['#publisher_description']  = Html::escape("" . $infos_organisation['organisation_description']);

        $organisation_datasets = $infos_organisation['organisation_datasets'];

        foreach ($organisation_datasets as $current_dataset) {
            $dataset = array();
            $dataset['dataset_key']     = Html::escape("" . $current_dataset['dataset_key']);
            $dataset['dataset_title']   = Html::escape("" . $current_dataset['dataset_title']);
            array_push($element['#publisher_datasets'], $dataset);
        }

        $element['#publisher_homepage']     = Html::escape("" . $infos_organisation['organisation_homepage'][0]);
        $element['#publisher_GBIF_page']    = Html::escape("" . "https://www.gbif.org/publisher/".$publisher_key);

        //CSS
        $element['#attached']['library'][] = 'gbifpublishers/gbifpublishers';

        // Theme function.
        $element['#theme'] = 'gbifpublisherspage';

        return $element;
    }
}