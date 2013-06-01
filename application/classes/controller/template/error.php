<?php

/**
 * @package agebdeb.org
 * @category Controllers
 */
class Controller_Template_Error extends Controller_Template_AGEBdeB {

    public function before() {

        parent::before();

        $this->title = 'error.' . (int) $this->request->action() . '.title';

        if ($description = urldecode($this->request->param('description'))) {
            $this->description = $description;
        }
    }

}

?>
