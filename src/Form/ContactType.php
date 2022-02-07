<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\Departements;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Nom', 'attr' => ['placeholder' => 'Merci de saisir votre nom']])
            ->add('surname', TextType::class, ['label' => 'Prenom', 'attr' => ['placeholder' => 'Merci de saisir votre prénom']])
            ->add('mail', EmailType::class, ['label' => 'Email', 'attr' => ['placeholder' => 'Merci de saisir votre adresse Email']])
            ->add('message', TextareaType::class, [
                'attr' => ['cols' => '5', 'rows' => '5']
            ])
            ->add('departements', EntityType::class, [
                'class' => Departements::class,
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => false,
                'required' => true
            ])

            ->add(
                'Envoyer',
                SubmitType::class,
                ['label' => 'Envoyer', 'attr' => ['style' => 'margin-top:10px']]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
