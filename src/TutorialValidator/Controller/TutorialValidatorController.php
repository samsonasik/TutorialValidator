<?php

namespace TutorialValidator\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TutorialValidatorController extends AbstractActionController
{
    public function indexAction()
    {
        $form = $this->getServiceLocator()->get('FormElementManager')->get('SampleForm');
        
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                echo 'Great!form is valid';
            }
        }
        
        $viewmodel = new ViewModel;
        $viewmodel->setVariable('form', $form);
        
        return $viewmodel;
    }
}
