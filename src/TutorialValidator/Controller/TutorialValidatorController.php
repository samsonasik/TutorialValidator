<?php

namespace TutorialValidator\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TutorialValidatorController extends AbstractActionController
{
    private $form;

    public function __construct(\TutorialValidator\Form\SampleForm $form)
    {
        $this->form = $form;
    }

    public function indexAction()
    {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $this->form->setData($request->getPost());
            if ($this->form->isValid()) {
                echo 'Great!form is valid';
            }
        }

        $viewmodel = new ViewModel;
        $viewmodel->setVariable('form', $this->form);

        return $viewmodel;
    }
}
