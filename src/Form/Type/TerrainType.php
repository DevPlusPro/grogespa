<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use APP\Entity\Terrain;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TerrainType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('num_lot', IntegerType::class)
            ->add('num_ilot', IntegerType::class)
            ->add('dimension', TextType::class)
            ->add('cout', IntegerType::class)
            ->add('site', ChoiceType::class)
            ->add('Enregistrer', SubmitType::class)
        ;
    }

     public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Terrain::class,
        ]);
    }
}