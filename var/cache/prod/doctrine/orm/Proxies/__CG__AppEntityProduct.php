<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \App\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
  'Name' => NULL,
  'flavour' => NULL,
  'Product_slug' => NULL,
  'description' => NULL,
  'PostCategory' => NULL,
  'product_type' => NULL,
  'product_status' => NULL,
  'ProductThumbail' => NULL,
  'Price' => NULL,
  'qty' => NULL,
  'at1' => NULL,
  'at2' => NULL,
  'at3' => NULL,
  'at4' => NULL,
  'fat' => NULL,
  'Suger' => NULL,
  'at5' => NULL,
  'CreatedAt' => NULL,
  'UpdatedAt' => NULL,
  'managedBy' => NULL,
  'weight' => NULL,
  'isReturnable' => NULL,
  'isCustom' => NULL,
  'DeliveryType' => NULL,
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
  'Name' => NULL,
  'flavour' => NULL,
  'Product_slug' => NULL,
  'description' => NULL,
  'PostCategory' => NULL,
  'product_type' => NULL,
  'product_status' => NULL,
  'ProductThumbail' => NULL,
  'Price' => NULL,
  'qty' => NULL,
  'at1' => NULL,
  'at2' => NULL,
  'at3' => NULL,
  'at4' => NULL,
  'fat' => NULL,
  'Suger' => NULL,
  'at5' => NULL,
  'CreatedAt' => NULL,
  'UpdatedAt' => NULL,
  'managedBy' => NULL,
  'weight' => NULL,
  'isReturnable' => NULL,
  'isCustom' => NULL,
  'DeliveryType' => NULL,
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        unset($this->Name, $this->flavour, $this->Product_slug, $this->description, $this->PostCategory, $this->product_type, $this->product_status, $this->ProductThumbail, $this->Price, $this->qty, $this->at1, $this->at2, $this->at3, $this->at4, $this->fat, $this->Suger, $this->at5, $this->CreatedAt, $this->UpdatedAt, $this->managedBy, $this->weight, $this->isReturnable, $this->isCustom, $this->DeliveryType);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);

    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'Name', 'flavour', 'Product_slug', 'description', 'PostCategory', 'product_type', 'product_status', 'ProductThumbail', 'Price', 'qty', 'at1', 'at2', 'at3', 'at4', 'fat', 'Suger', 'at5', 'CreatedAt', 'UpdatedAt', 'managedBy', 'weight', 'isReturnable', 'isCustom', 'DeliveryType'];
        }

        return ['__isInitialized__', 'id'];
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

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->Name, $this->flavour, $this->Product_slug, $this->description, $this->PostCategory, $this->product_type, $this->product_status, $this->ProductThumbail, $this->Price, $this->qty, $this->at1, $this->at2, $this->at3, $this->at4, $this->fat, $this->Suger, $this->at5, $this->CreatedAt, $this->UpdatedAt, $this->managedBy, $this->weight, $this->isReturnable, $this->isCustom, $this->DeliveryType);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $Name): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$Name]);

        return parent::setName($Name);
    }

    /**
     * {@inheritDoc}
     */
    public function getFlavour(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFlavour', []);

        return parent::getFlavour();
    }

    /**
     * {@inheritDoc}
     */
    public function setFlavour(string $flavour): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFlavour', [$flavour]);

        return parent::setFlavour($flavour);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostCategory(): ?\App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostCategory', []);

        return parent::getPostCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostCategory(?\App\Entity\PostCategory $PostCategory): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostCategory', [$PostCategory]);

        return parent::setPostCategory($PostCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductThumbail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductThumbail', []);

        return parent::getProductThumbail();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductThumbail(?string $ProductThumbail): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductThumbail', [$ProductThumbail]);

        return parent::setProductThumbail($ProductThumbail);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(float $Price): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$Price]);

        return parent::setPrice($Price);
    }

    /**
     * {@inheritDoc}
     */
    public function getQty(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQty', []);

        return parent::getQty();
    }

    /**
     * {@inheritDoc}
     */
    public function setQty(?int $qty): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQty', [$qty]);

        return parent::setQty($qty);
    }

    /**
     * {@inheritDoc}
     */
    public function getAt1(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAt1', []);

        return parent::getAt1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAt1(?string $at1): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAt1', [$at1]);

        return parent::setAt1($at1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAt2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAt2', []);

        return parent::getAt2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAt2(?string $at2): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAt2', [$at2]);

        return parent::setAt2($at2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAt3(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAt3', []);

        return parent::getAt3();
    }

    /**
     * {@inheritDoc}
     */
    public function setAt3(?string $at3): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAt3', [$at3]);

        return parent::setAt3($at3);
    }

    /**
     * {@inheritDoc}
     */
    public function getAt4(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAt4', []);

        return parent::getAt4();
    }

    /**
     * {@inheritDoc}
     */
    public function setAt4(?string $at4): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAt4', [$at4]);

        return parent::setAt4($at4);
    }

    /**
     * {@inheritDoc}
     */
    public function getFat(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFat', []);

        return parent::getFat();
    }

    /**
     * {@inheritDoc}
     */
    public function setFat(?string $fat): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFat', [$fat]);

        return parent::setFat($fat);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuger(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuger', []);

        return parent::getSuger();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuger(?string $Suger): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuger', [$Suger]);

        return parent::setSuger($Suger);
    }

    /**
     * {@inheritDoc}
     */
    public function getAt5(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAt5', []);

        return parent::getAt5();
    }

    /**
     * {@inheritDoc}
     */
    public function setAt5(?string $at5): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAt5', [$at5]);

        return parent::setAt5($at5);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $CreatedAt): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$CreatedAt]);

        return parent::setCreatedAt($CreatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $UpdatedAt): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$UpdatedAt]);

        return parent::setUpdatedAt($UpdatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductType', []);

        return parent::getProductType();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductType(string $product_type): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductType', [$product_type]);

        return parent::setProductType($product_type);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductStatus', []);

        return parent::getProductStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductStatus(string $product_status): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductStatus', [$product_status]);

        return parent::setProductStatus($product_status);
    }

    /**
     * {@inheritDoc}
     */
    public function getManagedBy(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getManagedBy', []);

        return parent::getManagedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setManagedBy(?\App\Entity\User $managedBy): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManagedBy', [$managedBy]);

        return parent::setManagedBy($managedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductSlug', []);

        return parent::getProductSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductSlug(string $Product_slug): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductSlug', [$Product_slug]);

        return parent::setProductSlug($Product_slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', []);

        return parent::getWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight(string $weight): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', [$weight]);

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsReturnable(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsReturnable', []);

        return parent::getIsReturnable();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsReturnable(bool $isReturnable): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsReturnable', [$isReturnable]);

        return parent::setIsReturnable($isReturnable);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsCustom(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsCustom', []);

        return parent::getIsCustom();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsCustom(bool $isCustom): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsCustom', [$isCustom]);

        return parent::setIsCustom($isCustom);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryType', []);

        return parent::getDeliveryType();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryType(string $DeliveryType): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryType', [$DeliveryType]);

        return parent::setDeliveryType($DeliveryType);
    }

}