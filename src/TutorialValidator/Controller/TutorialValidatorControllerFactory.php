<?php

namespace TutorialValidator\Controller;

class TutorialValidatorControllerFactory
{
    public function __invoke($container)
    {
        return new TutorialValidatorController(
            $container->get('FormElementManager')->get('TutorialValidator\Form\SampleForm')
        );
    }
}
