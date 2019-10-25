<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use APP\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('sexe', TextType::class)
            ->add('date_naissance', DateType::class)
            ->add('lieu_naissance', TextType::class)
            ->add('profession', TextType::class)
            ->add('type_piece_id', TextType::class)
            ->add('num_piece', TextType::class)
            ->add('tel', TextType::class)
            ->add('email', EmailType::class)
            ->add('adresse', TextType::class)
            ->add('login', TextType::class)
            ->add('password', PasswordType::class)
            ->add('Enregistrer', SubmitType::class)
        ;
    }

     public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}