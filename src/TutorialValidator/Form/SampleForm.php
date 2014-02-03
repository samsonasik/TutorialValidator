<?php

namespace TutorialValidator\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;

class SampleForm extends Form implements InputFilterProviderInterface
{
    public function init()
    {
        $this->add(array(
            'name' => 'sampleinput',
            'type' => 'Text',
            'options' => array(
                'label' => 'Sample Input: ',
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            array(
                'name' => 'sampleinput',
                'required' => true,
                'validators' => array(
                    array('name' => 'Special'),
                ),
            ),
        );
    }
}
