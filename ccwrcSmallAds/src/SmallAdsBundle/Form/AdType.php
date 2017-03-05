<?php

namespace SmallAdsBundle\Form;

use SmallAdsBundle\Entity\Ad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\Form\Extension\Core\Type\TextareaType;
//use Symfony\Component\Form\Extension\Core\Type\EmailType;
//use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use \DateTime;

class AdType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add("title", "text", ["label" => "Podaj tytuł: "])
                ->add("description", "textarea", ["label" => "Dodaj opis: "])
                ->add("category", EntityType::class, [
                    "class" => "SmallAdsBundle:Category", "choice_label" => "name",
                    "label" => "Wybierz kategorię: "])
                ->add("photoPath", "file", ["label" => "Wgraj foto (max. 1280x1024px)",
                    "data_class" => null,
                    "required" => false])
                ->add("endDate", "choice", [
                    "choices" => [
                        "3 dni" => new dateTime(date("Y-m-d H:i:s", time() + 3600 * 24 * 3)),
                        "4 dni" => new dateTime(date("Y-m-d H:i:s", time() + 3600 * 24 * 4)),
                        "5 dni" => new dateTime(date("Y-m-d H:i:s", time() + 3600 * 24 * 5)),
                        "6 dni" => new dateTime(date("Y-m-d H:i:s", time() + 3600 * 24 * 6)),
                        "tydzień" => new dateTime(date("Y-m-d H:i:s", time() + 3600 * 24 * 7))
                    ],
                    "choices_as_values" => true, "label" => "Czas trwania: "]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'SmallAdsBundle\Entity\Ad',
        ));
    }
    
    

}