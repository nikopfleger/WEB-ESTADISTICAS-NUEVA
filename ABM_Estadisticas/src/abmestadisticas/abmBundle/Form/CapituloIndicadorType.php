<?php

namespace abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CapituloIndicadorType extends AbstractType
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
            ->add('cainDetalle','text',array(
        	'label' => 'Detalle: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => true
        ))
        	->add('cainId','hidden')
        	->add('cainEditar','hidden',array('mapped' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'abmestadisticas\abmBundle\Entity\CapituloIndicador'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'capituloindicador';
    }
}
