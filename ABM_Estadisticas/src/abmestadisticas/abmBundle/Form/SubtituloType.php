<?php

namespace abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SubtituloType extends AbstractType
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
            ->add('subt_detalle','text',array(
        		'label' => 'Detalle: ',
        		'label_attr' => array('class' => 'col-sm-2 control-label bold')
        ))
       		->add('subt_habilitado', 'choice', array(
        		'choices' => array("1" => " Si","0" => " No"),
        		'multiple' => false,
        		'expanded' => true,
        		'label' => "Habilitado: ",
        		'label_attr' => array('class' => 'col-sm-2 control-label bold'),
        		// 				'attr' => array('name' => 'inlineRadioOptions')
        ))
        ->add('subt_titulo','choice', array(
        		'choices'   => $this->choices,
        		'multiple'  => false,
        		'expanded' => false,
        		'label' => "Titúlo: ",
        		'label_attr' => array('class' => 'col-sm-2 control-label bold'),
        		'mapped' => false
        ))
        ->add('subt_editar','hidden',array('mapped' => false))
        	->add('subt_id','hidden')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'abmestadisticas\abmBundle\Entity\Subtitulo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'subtitulo';
    }
}
