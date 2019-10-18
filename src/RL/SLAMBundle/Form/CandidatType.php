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

use RL\SLAMBundle\Entity;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array('label' => 'Votre nom','required' => true))
                ->add('prenom',TextType::class, array('label' => 'Votre prénom','required' => true))
                ->add('age', NumberType::class, array('label' => 'Votre age','required' => true))
                ->add('adresse',TextType::class, array('label' => 'Votre adresse','required' => true))
                ->add('specialite', EntityType::class, array('class'=> 'RLSLAMBundle:Specialite', 'choice_label' => 'libelle'))
                ->add('enregistrer', SubmitType::class)
                ->add('annuler', ResetType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RL\SLAMBundle\Entity\Candidat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'rl_slambundle_candidat';
    }


}
