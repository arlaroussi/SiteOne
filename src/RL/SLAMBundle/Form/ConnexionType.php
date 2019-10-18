<?php

namespace RL\SLAMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ConnexionType extends AbstractType
{
        public function authentifAction()   {
              
            $form = $this->get('form.factory')->createBuilder(FormType::class)
            ->add('login', TextType::class, array('label'=>'Entrer votre login'))
            ->add('password',      PasswordType::class, array('label'=>'Entrer votre mot de passe'))
            ->add('save',      SubmitType::class, array('label'=>'Valider'))
            ->getForm();
       
    if ($query->isMethod('POST')) {
        $form->handleRequest($query);
    }
    
    if ( $form->isSubmitted() && $form->isValid())  {
        $data = $form->getData();
        $login = $data["login"];
        $password = $data["password"];
      }
    
     //return $this->render('RLSLAMBundle:Candidat:authentif.html.twig', array('form'=>$form->createView(),'login'=>$login,'password'=>$password));
}

}
