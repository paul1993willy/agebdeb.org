<?php

/**
 * Définit un document ou une archive.
 */
class Model_Document extends ORM {

    protected $_has_one = array(
        "categorie" => array(),
    );
    protected $_has_many = array(
        "fichiers" => array("through" => "document_fichier")
    );

}

?>
