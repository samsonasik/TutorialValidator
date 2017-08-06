<?php

namespace TutorialValidator;

use Zend\ServiceManager\Factory\InvokableFactory;

return array(

    'validators' => array(
        'factories' => array(
            Validator\Special::class => InvokableFactory::class,
        ),
    ),

    'service_manager' => array(
        //other service registration here...
        'abstract_factories' => array(
            'Zend\Form\FormAbstractServiceFactory',
        ),
        //other service registration here...
    ),

    /*'forms' => array(
        'SampleForm' => array(
            'hydrator' => 'ObjectProperty',
            'type'     => 'Zend\Form\Form',
            'elements' => array(
                array(
                    'spec' => array(
                        'type' => 'Text',
                        'name' => 'sampleinput',
                        'options' => array(
                            'label' => 'Sample Input:',
                        )
                    ),
                ),
                array(
                    'spec' => array(
                        'type' => 'Submit',
                        'name' => 'submit',
                        'attributes' => array(
                            'value' => 'Go',
                        )
                    ),
                ),
            ),
            'input_filter' => array(
                'sampleinput' => array(
                    'required'   => true,
                    'validators' => array(
                        array(
                            'name' => 'Special',
                        ),
                    ),
                ),
            ),
        ),
    ),*/

    'form_elements' => array(
        'factories' => array(
            'TutorialValidator\Form\SampleForm' => InvokableFactory::class,
        ),
    ),

    'controllers' => array(
         'factories' => array(
            Controller\TutorialValidatorController::class => Controller\TutorialValidatorControllerFactory::class,
         ),
     ),

    'router' => array(
        'routes' => array(
            'tutorialvalidator' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/tutorialvalidator[/:action]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'TutorialValidator\Controller\TutorialValidatorController',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'tutorialvalidator' => __DIR__ . '/../view',
        ),
    ),
);
