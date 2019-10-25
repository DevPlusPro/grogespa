<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use APP\Entity\Site;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class)
            ->add('dimension', TextType::class)
            ->add('type', ChoiceType::class)
            ->add('quartier', ChoiceType::class)
            ->add('agence_imobiliere', ChoiceType::class)
            ->add('published', ChoiceType::class)
            ->add('nbre_lot', IntegerType::class)
            ->add('nbre_ilot', IntegerType::class)
            ->add('mode_payements', ChoiceType::class)
            ->add('Enregistrer', SubmitType::class)
        ;
    }

     public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Site::class,
        ]);
    }
}