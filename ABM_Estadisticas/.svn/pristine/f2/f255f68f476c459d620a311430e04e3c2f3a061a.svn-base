<?php

namespace abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TituloType extends AbstractType
{
	
	private $url;
	
	
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
        $builder->setAction($this->url)
            ->add('titu_detalle','text',array(
        		'label' => 'Detalle: ',
        		'label_attr' => array('class' => 'col-sm-2 control-label bold')
        ))
        	->add('titu_id','hidden')
        	->add('titu_habilitado', 'choice', array(
        			'choices' => array("1" => " Si","0" => " No"),
        			'multiple' => false,
        			'expanded' => true,
        			'label' => "Habilitado: ",
        			'label_attr' => array('class' => 'col-sm-2 control-label bold'),
        			// 				'attr' => array('name' => 'inlineRadioOptions')
        	))
        	->add('titu_capitulo','choice', array(
				'choices'   => $this->choices,
				'multiple'  => false,
				'expanded' => false,
				'label' => "Capítulo: ",
				'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            	'mapped' => false
			))
        	->add('titu_editar','hidden',array('mapped' => false));
        ;
    
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'abmestadisticas\abmBundle\Entity\Titulo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'titulo';
    }
}
