<?php

/**
 * Description of document
 *
 * @author guillaume
 */
class Controller_Document extends Controller_Template_AGEBdeB {

    /**
     *
     * @var Model_Document
     */
    protected $document;

    public function before() {
        $this->document = ORM::factory("document");
    }

    public function action_index() {
        $this->content->document = $this->document;
    }

}

?>
