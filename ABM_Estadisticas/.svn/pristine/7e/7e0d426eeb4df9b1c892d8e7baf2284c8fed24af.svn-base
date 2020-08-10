<?php

namespace abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IndicadorType extends AbstractType
{
	
	private $url;
	private $choices;
	
	public function __construct($url,$choices) {
		$this->url = $url;
		$this->choices = $choices;
	
	}
	
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
      		->setAction($this->url)
      		
        	->add('indiId','hidden')
        	
        	->add('indiEditar','hidden',array('mapped' => false))
        	
            ->add('indiDetalle','text',array(
        	
            'label' => 'Detalle: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => true))
            
            ->add('indiLink','text',array(
        	
            		'label' => 'Link: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => true))
            
            ->add('indiDescarga','text',array(
        	
            'label' => 'Descarga: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => false))
            
            ->add('indiCapitulo','choice', array(
				'choices'   => $this->choices['capitulo'],
				'multiple'  => false,
				'expanded' => false,
				'label' => "Capítulo: ",
				'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            	'mapped' => false
			))
            ->add('indiAnio','choice', array(
				'choices'   => $this->choices['anio'],
				'multiple'  => false,
				'expanded' => false,
				'label' => "Año: ",
				'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            	'mapped' => false
			))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'abmestadisticas\abmBundle\Entity\Indicador'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'indicador';
    }
}
