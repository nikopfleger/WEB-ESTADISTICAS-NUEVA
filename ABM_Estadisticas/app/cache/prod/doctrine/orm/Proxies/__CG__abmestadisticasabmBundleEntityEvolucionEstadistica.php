<?php

namespace Proxies\__CG__\abmestadisticas\abmBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EvolucionEstadistica extends \abmestadisticas\abmBundle\Entity\EvolucionEstadistica implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\EvolucionEstadistica' . "\0" . 'evesId', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\EvolucionEstadistica' . "\0" . 'evesDetalle', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\EvolucionEstadistica' . "\0" . 'evesLink', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\EvolucionEstadistica' . "\0" . 'evesPeriodo');
        }

        return array('__isInitialized__', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\EvolucionEstadistica' . "\0" . 'evesId', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\EvolucionEstadistica' . "\0" . 'evesDetalle', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\EvolucionEstadistica' . "\0" . 'evesLink', '' . "\0" . 'abmestadisticas\\abmBundle\\Entity\\EvolucionEstadistica' . "\0" . 'evesPeriodo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EvolucionEstadistica $proxy) {
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
    public function getEvesId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getEvesId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvesId', array());

        return parent::getEvesId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvesId($evesId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvesId', array($evesId));

        return parent::setEvesId($evesId);
    }

    /**
     * {@inheritDoc}
     */
    public function setEvesDetalle($evesDetalle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvesDetalle', array($evesDetalle));

        return parent::setEvesDetalle($evesDetalle);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvesDetalle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvesDetalle', array());

        return parent::getEvesDetalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvesLink($evesLink)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvesLink', array($evesLink));

        return parent::setEvesLink($evesLink);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvesLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvesLink', array());

        return parent::getEvesLink();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvesPeriodo($evesPeriodo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvesPeriodo', array($evesPeriodo));

        return parent::setEvesPeriodo($evesPeriodo);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvesPeriodo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvesPeriodo', array());

        return parent::getEvesPeriodo();
    }

}
