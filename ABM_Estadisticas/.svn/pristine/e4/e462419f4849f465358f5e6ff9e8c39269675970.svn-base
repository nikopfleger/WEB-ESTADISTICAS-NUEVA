<?php

namespace abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArchivoEstadisticoType extends AbstractType
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
            ->add('aresLink','text',array(
        	'label' => 'Link: ',
            'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            'required' => false
        ))
            ->add('aresDescarga','text',array(
            	'label' => 'Descarga: ',
            	'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            	'required' => false
            		
            ))
            ->add('aresDetalle','text',array(
            	'label' => 'Detalle: ',
            	'label_attr' => array('class' => 'col-sm-2 control-label bold')
            ))
            ->add('aresDescripcion','textarea',array(
            	'label' => 'Descripción: ',
            	'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            	'required' => false
            ))
            ->add('aresComentario','textarea',array(
            	'label' => 'Comentario: ',
            	'label_attr' => array('class' => 'col-sm-2 control-label bold'),
            		'required' => false
            ))
            ->add('aresAnio','choice', array(
				'choices'   => $this->choices['anio'],
				'multiple'  => false,
				'expanded' => false,
				'label' => "Año: ",
				'label_attr' => array('class' => 'col-sm-4 control-label bold'),
            	'mapped' => false
			))
            ->add('aresCapitulo','choice', array(
				'choices'   => $this->choices['capitulo'],
				'multiple'  => false,
				'expanded' => false,
				'label' => "Capítulo: ",
				'label_attr' => array('class' => 'col-sm-4 control-label bold'),
            	'mapped' => false
			))
            ->add('aresTitulo','choice', array(
				'choices'   => $this->choices['titulo'],
				'multiple'  => false,
				'expanded' => false,
				'label' => "Título: ",
				'label_attr' => array('class' => 'col-sm-4 control-label bold'),
            	'mapped' => false
			))
            ->add('aresSubtitulo','choice', array(
				'choices'   => $this->choices['subtitulo'],
				'multiple'  => false,
				'expanded' => false,
				'label' => "Subítulo: ",
				'label_attr' => array('class' => 'col-sm-4 control-label bold'),
            	'mapped' => false
			))
			->add('aresId', 'hidden')
			->add('aresEditar','hidden',array('mapped' => false));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'abmestadisticas\abmBundle\Entity\ArchivoEstadistico'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ares';
    }
}
