<?php

namespace DoctrineORMModule\Proxy\__CG__\Product\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \Product\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'attributes', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'productId', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'productNumber', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'datasheet', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'thumbnail', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'specifications', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'relatedProducts', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'category', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'relatedToProducts', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'productVariations', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'variationToProducts');
        }

        return array('__isInitialized__', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'attributes', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'productId', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'productNumber', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'datasheet', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'thumbnail', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'specifications', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'relatedProducts', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'category', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'relatedToProducts', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'productVariations', '' . "\0" . 'Product\\Entity\\Product' . "\0" . 'variationToProducts');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
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
    public function setAttributes($attributes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributes', array($attributes));

        return parent::setAttributes($attributes);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributes', array());

        return parent::getAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function addAttributes($attributes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAttributes', array($attributes));

        return parent::addAttributes($attributes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAttributes($attributes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAttributes', array($attributes));

        return parent::removeAttributes($attributes);
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatasheet($datasheet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatasheet', array($datasheet));

        return parent::setDatasheet($datasheet);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatasheet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatasheet', array());

        return parent::getDatasheet();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductId($productId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductId', array($productId));

        return parent::setProductId($productId);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getProductId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductId', array());

        return parent::getProductId();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductNumber($productNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductNumber', array($productNumber));

        return parent::setProductNumber($productNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductNumber', array());

        return parent::getProductNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductVariations($productVariations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductVariations', array($productVariations));

        return parent::addProductVariations($productVariations);
    }

    /**
     * {@inheritDoc}
     */
    public function clearProductVariations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearProductVariations', array());

        return parent::clearProductVariations();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductVariations($productVariations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductVariations', array($productVariations));

        return parent::setProductVariations($productVariations);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductVariations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductVariations', array());

        return parent::getProductVariations();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array());

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function addRelatedProducts($relatedProducts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRelatedProducts', array($relatedProducts));

        return parent::addRelatedProducts($relatedProducts);
    }

    /**
     * {@inheritDoc}
     */
    public function clearRelatedProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearRelatedProducts', array());

        return parent::clearRelatedProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelatedProducts($relatedProducts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelatedProducts', array($relatedProducts));

        return parent::setRelatedProducts($relatedProducts);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedProducts', array());

        return parent::getRelatedProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelatedToProducts($relatedToProducts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelatedToProducts', array($relatedToProducts));

        return parent::setRelatedToProducts($relatedToProducts);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelatedToProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelatedToProducts', array());

        return parent::getRelatedToProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecifications($specifications)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecifications', array($specifications));

        return parent::setSpecifications($specifications);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecifications($useDefault = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecifications', array($useDefault));

        return parent::getSpecifications($useDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function setThumbnail($thumbnail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThumbnail', array($thumbnail));

        return parent::setThumbnail($thumbnail);
    }

    /**
     * {@inheritDoc}
     */
    public function getThumbnail($useDefault = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumbnail', array($useDefault));

        return parent::getThumbnail($useDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function setVariationToProducts($variationToProducts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariationToProducts', array($variationToProducts));

        return parent::setVariationToProducts($variationToProducts);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariationToProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariationToProducts', array());

        return parent::getVariationToProducts();
    }

}
