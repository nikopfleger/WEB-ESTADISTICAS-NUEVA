<?php

namespace abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JurisdiccionType extends AbstractType
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
          
            ->add('juriDetalle','text',array(
            	'label' => 'Detalle: ',
            	'label_attr' => array('class' => 'col-sm-3 control-label bold')
            ))
            ->add('juriCapitulo','choice',array(
            	'choices' => $this->choices,
				'multiple' => false,
            	'expanded' => false,
            	'label' => "Capítulo: ",
            	'label_attr' => array('class' => 'col-sm-3 control-label bold'),
            	'mapped' => false
            ))
            ->add('juriId','hidden')
            ->add('juriEditar','hidden',array('mapped' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'abmestadisticas\abmBundle\Entity\Jurisdiccion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jurisdiccion';
    }
}