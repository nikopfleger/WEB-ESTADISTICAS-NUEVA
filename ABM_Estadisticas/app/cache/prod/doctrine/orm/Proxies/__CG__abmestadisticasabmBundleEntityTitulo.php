<?php

namespace Proxies\__CG__\abmestadisticas\abmBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Titulo extends \abmestadisticas\abmBundle\Entity\Titulo implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\Titulo' . "\0" . 'titu_id', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\Titulo' . "\0" . 'titu_detalle', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\Titulo' . "\0" . 'titu_capitulo', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\Titulo' . "\0" . 'titu_habilitado');
        }

        return array('__isInitialized__', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\Titulo' . "\0" . 'titu_id', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\Titulo' . "\0" . 'titu_detalle', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\Titulo' . "\0" . 'titu_capitulo', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\Titulo' . "\0" . 'titu_habilitado');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Titulo $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getTituId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTituId', array());

        return parent::getTituId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTituDetalle($tituDetalle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTituDetalle', array($tituDetalle));

        return parent::setTituDetalle($tituDetalle);
    }

    /**
     * {@inheritDoc}
     */
    public function getTituDetalle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTituDetalle', array());

        return parent::getTituDetalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTituId($tituId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTituId', array($tituId));

        return parent::setTituId($tituId);
    }

    /**
     * {@inheritDoc}
     */
    public function setTituCapitulo(\abmestadisticas\abmBundle\Entity\Capitulo $tituCapitulo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTituCapitulo', array($tituCapitulo));

        return parent::setTituCapitulo($tituCapitulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTituCapitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTituCapitulo', array());

        return parent::getTituCapitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setTituHabilitado($tituHabilitado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTituHabilitado', array($tituHabilitado));

        return parent::setTituHabilitado($tituHabilitado);
    }

    /**
     * {@inheritDoc}
     */
    public function getTituHabilitado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTituHabilitado', array());

        return parent::getTituHabilitado();
    }

}
