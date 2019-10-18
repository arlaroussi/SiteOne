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

class UserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', TextType::class, array('label' => 'Votre email','required' => true))
                ->add('username',TextType::class, array('label' => 'Votre prénom','required' => true))
                ->add('age', NumberType::class, array('label' => 'Votre age','required' => true))
                ->add('adresse',TextType::class, array('label' => 'Votre adresse','required' => true))
                ->add('enregistrer', SubmitType::class)
                ->add('annuler', ResetType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RL\SLAMBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'rl_slambundle_user';
    }


}
