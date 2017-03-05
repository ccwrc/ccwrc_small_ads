<?php

namespace SmallAdsBundle\Form;

use SmallAdsBundle\Entity\Ad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class AdType extends AbstractType {
    
//    public function buildForm(FormBuilderInterface $builder, array $options)
//    {
//        $builder
//            ->add('title')
//            ->add('summary', TextareaType::class)
//            ->add('content', TextareaType::class)
//            ->add('authorEmail', EmailType::class)
//            ->add('publishedAt', DateTimeType::class)
//        ;
//    }
//
//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => Post::class,
//        ));
//    }
}