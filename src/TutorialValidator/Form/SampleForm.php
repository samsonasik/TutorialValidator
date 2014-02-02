<?php

namespace TutorialValidator\Form;

use Zend\Form\Form;
use Zend\Validator\ValidatorChain;
use Zend\Validator\ValidatorPluginManager;

class SampleForm extends Form
{
    protected $validatorManager;
    
    public function __construct(ValidatorPluginManager $validatorManager)
    {
        parent::__construct();
        $this->validatorManager = $validatorManager;

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
        
        $this->setInputFilter($this->createInputValidation());
    }
    
    public function createInputValidation()
    {
        $inputFilter = $this->getInputFilter();
        
        $validatorChain = new ValidatorChain();
        $validatorChain->setPluginManager($this->validatorManager);

        $inputFilter->getFactory()
             ->setDefaultValidatorChain($validatorChain);
        
        $inputFilter->add(array(
            'name'     => 'sampleinput',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Special'
                )
            ),
        ));
        
        return $inputFilter;
    }
}
