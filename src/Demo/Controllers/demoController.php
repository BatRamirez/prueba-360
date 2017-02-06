<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Demo\Controllers;

use Base\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use Demo\Form\contactoForm;
use Demo\Model\Entity\Contacto;

/**
 * Description of demoController
 *
 * @author leonardo
 */
class demoController extends Controller
{
    public function indexAction(Request $request)
    {
        $contactoForm = $this->createForm(new contactoForm());
        return $this->renderView('index.html.twig', array(
            'contactoForm' => $contactoForm->createView()
        ));
    }
    
    public function saveContactAjaxAction(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $contacto = new Contacto();
            $form     = $this->createForm(new contactoForm(), $contacto);
            $form->submit($request);
            if($form->isValid())
            {
                $repo   = $this->getRepository('Demo\Model\Entity\Contacto');
                $result = $repo->createAndSendEmail($contacto, $this->container);
                
                if(!$result)
                    return $this->renderJson(array('msn' => 'ERROR'));
                
                $form = $this->createForm(new contactoForm());
                
                return $this->renderJson(array('msn' => 'OK', 'info' => array(
                    'partial' => $this->renderView('_contactoForm.html.twig', array('form' => $form->createView()))
                )));
            }
            
            return $this->renderJson(array('msn' => 'FORM_ERROR', 'info' => array(
                            'partial' => $this->renderView('_contactoForm.html.twig', array('form' => $form->createView()))
            )));
        }
        
        return $this->renderJson('Not found', 404);
    }
}
