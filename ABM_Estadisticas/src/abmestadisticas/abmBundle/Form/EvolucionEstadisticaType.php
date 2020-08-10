<?php

namespace abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvolucionEstadisticaType extends AbstractType
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
            ->add('evesDetalle','text',array(
        	
            'label' => 'Detalle: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => true))
            ->add('evesLink','text',array(
        	
            'label' => 'Link: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => true))
            ->add('evesPeriodo','choice', array(
				'choices'   => $this->choices,
				'multiple'  => false,
				'expanded' => false,
				'label' => "Periodo: ",
				'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            	'mapped' => false
			))
			->add('evesId','hidden')
			->add('evesEditar','hidden',array('mapped' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'abmestadisticas\abmBundle\Entity\EvolucionEstadistica'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'evolucionestadistica';
    }
}
