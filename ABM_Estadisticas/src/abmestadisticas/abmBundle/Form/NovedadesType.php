<?php

namespace abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NovedadesType extends AbstractType
{

	private $url;
	
	public function __construct($url) {
		$this->url = $url;
	
	}
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->setAction($this->url)        
        ->add('noveId','hidden')         
        ->add('noveEditar','hidden',array('mapped' => false))
        ->add('noveDetalle','text',array(
        	
            'label' => 'Detalle: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => true))
        ->add('noveLink','text',array(
        	
            'label' => 'Link: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => true))
        ->add('noveDescarga','text',array(
        	
            'label' => 'Descarga: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'abmestadisticas\abmBundle\Entity\Novedades'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'novedades';
    }
}
