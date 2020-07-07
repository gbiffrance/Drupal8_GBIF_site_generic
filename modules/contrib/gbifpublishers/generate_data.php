<?php

    /*
     * This code is planned to be executed at the root of the GBIF Publishers module folder
     * Also, there should be a subfolder named "data"
     */

    //Variables
    $uuid_code  = "da44cd31-5901-4687-a106-6d1c7734ee3a";
    $url_API_GBIF = "https://api.gbif.org/v1/";

    //Gettings the list of all organisation of the node
    echo "This script will generate data files (1 for each endorsed organization)  \n\n";

    $curl_node_organisations	= curl_init();
    curl_setopt_array($curl_node_organisations, [
        CURLOPT_RETURNTRANSFER	=> true,
        CURLOPT_URL				=> $url_API_GBIF.'node/'.$uuid_code.'/organization?limit=100',
    ]);

    if (!curl_exec($curl_node_organisations)) {
        die('Error: ' . curl_error($curl_node_organisations).' - Code: '.curl_errno($curl_node_organisations));
    } else {
        $node_organisations_json = curl_exec($curl_node_organisations);
        curl_close($curl_node_organisations);
    }

    echo "Data API fetch\n";

    //Extract informations
    $node_organisations_object	= json_decode($node_organisations_json);

    //Getting and saving information for each organisation
    foreach($node_organisations_object->results as $organisation){

        //Getting all the datasets from the current organisation
        $curl_organisations_datasets	= curl_init();
        curl_setopt_array($curl_organisations_datasets, [
            CURLOPT_RETURNTRANSFER	=> true,
            CURLOPT_URL				=> $url_API_GBIF.'organization/'.$organisation->key.'/publishedDataset',
        ]);

        if (!curl_exec($curl_organisations_datasets)) {
            die('Error: ' . curl_error($curl_organisations_datasets).' - Code: '.curl_errno($curl_organisations_datasets));
        } else {
            $organisations_datasets_json = curl_exec($curl_organisations_datasets);
            curl_close($curl_organisations_datasets);
        }

        $organisations_datasets_object	= json_decode($organisations_datasets_json);

        $datasets_array = array();

        foreach($organisations_datasets_object->results as $dataset){
            $dataset_array = array(
                'dataset_key'          => $dataset->key,
                'dataset_title'        => $dataset->title,
                'dataset_endpoints'    => $dataset->endpoints[0]->url
            );
            $datasets_array[] = $dataset_array;
        }

        //Save of all informations
        $infos_organisation = array(
            'organisation_key'          => $organisation->key,
            'organisation_title'        => $organisation->title,
            'organisation_description'  => $organisation->description,
            'organisation_homepage'     => $organisation->homepage,
            'organisation_datasets'     => $datasets_array
        );

        file_put_contents('data/' . $organisation->key . '.json', json_encode($infos_organisation));
    }

    echo "Data files generated\n";
?>