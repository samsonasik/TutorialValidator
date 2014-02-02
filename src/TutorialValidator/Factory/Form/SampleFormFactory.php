<?php

namespace TutorialValidator\Factory\Form;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use TutorialValidator\Form\SampleForm;

class SampleFormFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $service = $serviceLocator->getServiceLocator();
        $form = new SampleForm($service->get('ValidatorManager'));
        
        return $form;
    }
}

