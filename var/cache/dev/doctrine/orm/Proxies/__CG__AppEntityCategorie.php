<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Categorie extends \App\Entity\Categorie implements \Doctrine\ORM\Proxy\Proxy
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
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'NomDeCategorie', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'ordre', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'produit', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'situations', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'mouvements', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'valeurFaciale', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'prixDeVente', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'AnneeEmission', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'coteEmission', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'tpParPl'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'NomDeCategorie', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'ordre', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'produit', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'situations', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'mouvements', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'valeurFaciale', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'prixDeVente', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'AnneeEmission', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'coteEmission', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'tpParPl'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Categorie $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
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
    public function getNomDeCategorie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomDeCategorie', []);

        return parent::getNomDeCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomDeCategorie(string $NomDeCategorie): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomDeCategorie', [$NomDeCategorie]);

        return parent::setNomDeCategorie($NomDeCategorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdre(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdre', []);

        return parent::getOrdre();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdre(int $ordre): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdre', [$ordre]);

        return parent::setOrdre($ordre);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduit(): ?\App\Entity\Produits
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduit', []);

        return parent::getProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduit(?\App\Entity\Produits $produit): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduit', [$produit]);

        return parent::setProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function getSituations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSituations', []);

        return parent::getSituations();
    }

    /**
     * {@inheritDoc}
     */
    public function addSituation(\App\Entity\Situation $situation): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSituation', [$situation]);

        return parent::addSituation($situation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSituation(\App\Entity\Situation $situation): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSituation', [$situation]);

        return parent::removeSituation($situation);
    }

    /**
     * {@inheritDoc}
     */
    public function getMouvements(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMouvements', []);

        return parent::getMouvements();
    }

    /**
     * {@inheritDoc}
     */
    public function addMouvement(\App\Entity\Mouvement $mouvement): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMouvement', [$mouvement]);

        return parent::addMouvement($mouvement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMouvement(\App\Entity\Mouvement $mouvement): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMouvement', [$mouvement]);

        return parent::removeMouvement($mouvement);
    }

    /**
     * {@inheritDoc}
     */
    public function getValeurFaciale(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeurFaciale', []);

        return parent::getValeurFaciale();
    }

    /**
     * {@inheritDoc}
     */
    public function setValeurFaciale(?int $valeurFaciale): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeurFaciale', [$valeurFaciale]);

        return parent::setValeurFaciale($valeurFaciale);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixDeVente(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixDeVente', []);

        return parent::getPrixDeVente();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixDeVente(?float $prixDeVente): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixDeVente', [$prixDeVente]);

        return parent::setPrixDeVente($prixDeVente);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnneeEmission(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnneeEmission', []);

        return parent::getAnneeEmission();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnneeEmission(?string $AnneeEmission): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnneeEmission', [$AnneeEmission]);

        return parent::setAnneeEmission($AnneeEmission);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoteEmission(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoteEmission', []);

        return parent::getCoteEmission();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoteEmission(?string $coteEmission): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoteEmission', [$coteEmission]);

        return parent::setCoteEmission($coteEmission);
    }

    /**
     * {@inheritDoc}
     */
    public function getTpParPl(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTpParPl', []);

        return parent::getTpParPl();
    }

    /**
     * {@inheritDoc}
     */
    public function setTpParPl(int $tpParPl): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTpParPl', [$tpParPl]);

        return parent::setTpParPl($tpParPl);
    }

}