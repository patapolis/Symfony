<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\CommandeProduit;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class comproType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
   
        $builder->add('produit',ChoiceType::class, [
     'choices' => $options["produits"],
    'choice_label' => function($produit, $key, $index) {
     
        return ($produit->getName());
    },
    ])
        ->add('nmbProduit');
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CommandeProduit',
        ))
        ->setRequired(array(
            'produits'
        ));
    }
}