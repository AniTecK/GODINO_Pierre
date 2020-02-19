<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType as TypeIntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TypeTextType::class, [
                'attr' => ['placeholder' => 'Titre du livre']
            ])
            ->add('couverture', TypeTextType::class, [
                'attr' => ['placeholder' => "Entrez l'URL de la couverture du livre"]
            ])
            ->add('auteur', TypeTextType::class, [
                'attr' => ['placeholder' => "Entrez l'Auteur du livre"]
            ])
            ->add('prix', TypeIntegerType::class, [
                'attr' => ['placeholder' => 'Entrez le prix du livre']
            ])
            ->add('genre', TypeTextType::class, [
                'attr' => ['placeholder' => 'Entrez le genre du livre']
            ])
            ->add('resume', TypeTextType::class, [
                'attr' => ['placeholder' => 'Entrez un bref résumé du livre']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
