<?php

namespace abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CapituloType extends AbstractType
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
            ->add('capi_id','integer', array(
        	'label' => 'Id: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'attr' => array('min' => 0)
        ))
            ->add('capi_detalle','text',array(
            	'label' => 'Detalle: ',
            	'label_attr' => array('class' => 'col-sm-2 control-label bold')
            ))
            ->add('capi_id_original', 'hidden', array('mapped' => false))
            ->add('capi_editar','hidden',array('mapped' => false)
            );
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'abmestadisticas\abmBundle\Entity\Capitulo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'capitulo';
    }
}
