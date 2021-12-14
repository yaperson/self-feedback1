<?php

namespace App\Form;

use App\Entity\Classes;
use App\Entity\Student;
use App\Repository\ClassesRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class StudentType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('note_repas', RadioType::class, [
            'attr' => ['value' => '1',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'note_repas'],

            'attr' => ['value' => '2',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'note_repas'],

            'attr' => ['value' => '3',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'note_repas'],

            'attr' => ['value' => '4',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'note_repas'],

            'attr' => ['value' => '5',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'note_repas'],
        ]);
        $builder->add('note_valeur_environnement', RadioType::class, [
            'attr' => ['value' => '1',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'note_valeur_environnement'],

            'attr' => ['value' => '2',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'note_valeur_environnement'],

            'attr' => ['value' => '3',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'note_valeur_environnement'],

            'attr' => ['value' => '4',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'notenote_valeur_environnement_repas'],

            'attr' => ['value' => '5',
                'class' => 'radio_inputs',
                'type' => 'radio',
                'name' => 'note_valeur_environnement'],
        ]);
        $builder->add('note_commentaire', TextareaType::class, [
            'attr' => [
                'rows' => '10',
                'cols' => '40',
                'name' => 'note_commentaire'],
        ]);

        $builder->add('classe', EntityType::class, [
            // looks for choices from this entity
            'class' => Classes::class,
        
            // uses the User.username property as the visible option string
            'choice_label' => 'classe_libelle',
        
            // used to render a select box, check boxes or radios
            // 'multiple' => true,
            // 'expanded' => true,
        ]);

        $builder->add('submit', SubmitType::class, [
            'attr' => ['class' => 'login_inputs'],
            'attr' => ['id' => 'btn5'],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
