<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Demo\Model\Entity;

use Base\Model\Entity\Repository;

/**
 * Description of ContactoRepository
 *
 * @author leonardo
 */
class ContactoRepository extends Repository
{

    public function createAndSendEmail($object, $container)
    {
        $contacto = parent::save($object);

//        if ($contacto)
//            $this->enviarCorreoNuevoContacto($contacto, $container);

        return $contacto;
    }

    public function enviarCorreoNuevoContacto(Contacto $contacto, $container)
    {
        $message = \Swift_Message::newInstance()
                ->setSubject('New Demo Contact')
                ->setFrom(array($contacto->__get('correo')))
                ->setTo(array('ivannia.alvarado@lumenup.com', 'jordan.loaiza@lumenup.com'))
                ->setBcc(array('jordan.loaiza@lumenup.com', 'leonardo.monge@lumenup.com'))
                ->setBody($container['twig']->render('_correoContacto.html.twig', array('contacto' => $contacto)), 'text/html');
        
        try {
            $container['mailer']->send($message);   
        } catch (\Exception $exc) {
            
        }
    }

}
