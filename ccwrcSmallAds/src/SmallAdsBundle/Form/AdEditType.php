<?php

namespace SmallAdsBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \DateTime;

class AdEditType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add("title", "text", ["label" => "Edytuj tytuł: "])
                ->add("description", "textarea", ["label" => "Edytuj opis: "])
                ->add("category", EntityType::class, [
                    "class" => "SmallAdsBundle:Category", "choice_label" => "name",
                    "label" => "Zmień kategorię: "])
                ->add("photoPath", "file", ["label" => "Wgraj inne zdjęcie: ",
                    "data_class" => null,
                    "required" => false]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'SmallAdsBundle\Entity\Ad',
        ));
    }

}
