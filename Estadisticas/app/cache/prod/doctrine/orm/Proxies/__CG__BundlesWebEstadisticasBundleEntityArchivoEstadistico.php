<?php

namespace Proxies\__CG__\Bundles\WebEstadisticasBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ArchivoEstadistico extends \Bundles\WebEstadisticasBundle\Entity\ArchivoEstadistico implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresId', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresAnio', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresCapitulo', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresJurisdiccion', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresTitulo', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresSubtitulo', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresLink', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresDescarga', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresDetalle', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresDescripcion', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresComentario', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresFecha');
        }

        return array('__isInitialized__', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresId', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresAnio', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresCapitulo', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresJurisdiccion', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresTitulo', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresSubtitulo', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresLink', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresDescarga', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresDetalle', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresDescripcion', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresComentario', '' . "\0" . 'Bundles\\WebEstadisticasBundle\\Entity\\ArchivoEstadistico' . "\0" . 'aresFecha');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ArchivoEstadistico $proxy) {
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
    public function setAresAnio($aresAnio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresAnio', array($aresAnio));

        return parent::setAresAnio($aresAnio);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresAnio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresAnio', array());

        return parent::getAresAnio();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresCapitulo($aresCapitulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresCapitulo', array($aresCapitulo));

        return parent::setAresCapitulo($aresCapitulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresCapitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresCapitulo', array());

        return parent::getAresCapitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresTitulo($aresTitulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresTitulo', array($aresTitulo));

        return parent::setAresTitulo($aresTitulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresTitulo', array());

        return parent::getAresTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresSubtitulo($aresSubtitulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresSubtitulo', array($aresSubtitulo));

        return parent::setAresSubtitulo($aresSubtitulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresSubtitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresSubtitulo', array());

        return parent::getAresSubtitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresLink($aresLink)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresLink', array($aresLink));

        return parent::setAresLink($aresLink);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresLink', array());

        return parent::getAresLink();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresDescarga($aresDescarga)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresDescarga', array($aresDescarga));

        return parent::setAresDescarga($aresDescarga);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresDescarga()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresDescarga', array());

        return parent::getAresDescarga();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresDetalle($aresDetalle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresDetalle', array($aresDetalle));

        return parent::setAresDetalle($aresDetalle);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresDetalle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresDetalle', array());

        return parent::getAresDetalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresDescripcion($aresDescripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresDescripcion', array($aresDescripcion));

        return parent::setAresDescripcion($aresDescripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresDescripcion', array());

        return parent::getAresDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresComentario($aresComentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresComentario', array($aresComentario));

        return parent::setAresComentario($aresComentario);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresComentario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresComentario', array());

        return parent::getAresComentario();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresJurisdiccion($aresJurisdiccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresJurisdiccion', array($aresJurisdiccion));

        return parent::setAresJurisdiccion($aresJurisdiccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresJurisdiccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresJurisdiccion', array());

        return parent::getAresJurisdiccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setAresFecha($aresFecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAresFecha', array($aresFecha));

        return parent::setAresFecha($aresFecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getAresFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresFecha', array());

        return parent::getAresFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function getAresId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getAresId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAresId', array());

        return parent::getAresId();
    }

}
