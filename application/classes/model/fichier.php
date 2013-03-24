<?php

/**
 * id, type, contenu (si écrit en Markdown), creation, modification.
 * 
 * Dépendament du type, contenu peut contenir :
 * Un sha1 pointant la somme de contrôle du fichier (FICHIER),
 * Un url pointant un document Google sur Google Docs,
 * Du Markdown à afficher.
 * 
 */
class Model_Fichier extends ORM {

    const MARKDOWN = "MARKDOWN",
            GOOGLE_DOCUMENT = "GOOGLE_DOCUMENT",
            FICHIER = "FICHIER";
    
    protected $_has_many = array(
        "document" => array("through" => "document_fichier")
        
    );

    public function filters() {
        return array(
            "contenu" => array(
                array("HTML::chars")
            ),
            "modification" => array(
                array("date", array(Date::$timestamp_format))
            ),
        );
    }

}

?>
