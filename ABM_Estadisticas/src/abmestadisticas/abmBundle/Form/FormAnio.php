<?php

namespace  abmestadisticas\abmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormAnio extends AbstractType
{
	private $data;
	private $url;
	
	
	public function __construct($data,$url) {
		$this->data = $data;
		$this->url = $url;
	}
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		

		//SELECT 1 //CHECKBOX 2 //RADIO
		
		$builder
		->setAction($this->url)
		->add('anioId', 'choice', array(
				'choices'   => $this->data,
				'preferred_choices' => array(0),
				'multiple'  => false,
				'expanded' => false,
				'label' => "Año: ",
				'label_attr' => array('class' => 'col-sm-4 control-label bold')
		))				
		->add('anioHabilitado', 'choice', array(
				'choices' => array("1" => " Si","0" => " No"),
				'multiple' => false,
				'expanded' => true,
				'label' => "Habilitado: ",
				'label_attr' => array('class' => 'col-sm-4 control-label bold'),
				'required' => true,
// 				'attr' => array('name' => 'inlineRadioOptions')
		))
		->add('anioOpciones', 'choice', array(
				'choices' => array('dupanio' => "Duplicar ultimo año"),
				'multiple' => true, //multiples selecciones
				'expanded' => true, //no select
				'mapped' => false, //si no esta en la clase
				'label' => 'Opciones avanzadas: ',
				'label_attr' => array('class' => 'col-sm-4 control-label bold'),
				
		));


	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => 'abmestadisticas\abmBundle\Entity\Anio',
		));
	}

	public function getName()
	{
		return 'anio';
	}
}