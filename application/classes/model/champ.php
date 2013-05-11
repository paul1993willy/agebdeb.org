<?php

/**
 * Description of champ
 *
 * @package agebdeb.org
 * @category Models
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Model_Champ extends ORM {

    protected $_has_many = array(
        'regles' => array('through' => 'champs_regles')
    );

    /**
     * Fait le rendu du champ de formulaire.
     * 
     * @param variant $value
     * @param array $attributes
     * @return string
     */
    public function render($value = NULL, array $attributes = NULL) {

        $attributes['type'] = $this->type;
        $attributes['placeholder'] = $this->placeholder;

        return Form::input($this->name, $value, $attributes);
    }

    public function rules() {

        $rules = array(
            $this->name => array()
        );

        foreach ($this->regles as $regle) {
            $champ_regle = ORM::factory('champ_regle', array('champ_id' => $this, 'regle_id' => $regle));
            $rules[$this->name][] = array($regle->callback, Arr::merge(array(':value', json_decode($champ_regle->parametres))));
        }
    }

}

?>
