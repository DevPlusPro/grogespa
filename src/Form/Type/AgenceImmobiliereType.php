<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use APP\Entity\AgenceImmobiliere;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgenceImmobiliereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('tel', TextType::class)
            ->add('adresse', TextType::class)
            ->add('email', EmailType::class)
            ->add('site_web', TextType::class)
            ->add('facebook', TextType::class)
            ->add('whatsapp', TextType::class)
            ->add('Enregistrer', SubmitType::class)
        ;
        ;
    }

     public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AgenceImmobiliere::class,
        ]);
    }
}