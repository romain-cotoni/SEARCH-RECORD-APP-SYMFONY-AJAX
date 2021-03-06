<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Session extends \App\Entity\Session implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'identifiant', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'date_debut', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'date_fin', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'nb_jours', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'responsable', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'site_session', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'code_postal', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'candidats', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'entreprise_id', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'jury_id', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'titre_id', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'jour_id'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'identifiant', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'date_debut', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'date_fin', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'nb_jours', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'responsable', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'site_session', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'code_postal', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'candidats', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'entreprise_id', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'jury_id', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'titre_id', '' . "\0" . 'App\\Entity\\Session' . "\0" . 'jour_id'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Session $proxy) {
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
    public function __toString()
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
    public function getIdentifiant(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifiant', []);

        return parent::getIdentifiant();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdentifiant(string $identifiant): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentifiant', [$identifiant]);

        return parent::setIdentifiant($identifiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', []);

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut(?\DateTimeInterface $date_debut): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', [$date_debut]);

        return parent::setDateDebut($date_debut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFin(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFin', []);

        return parent::getDateFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFin(?\DateTimeInterface $date_fin): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFin', [$date_fin]);

        return parent::setDateFin($date_fin);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbJours(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbJours', []);

        return parent::getNbJours();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbJours(?int $nb_jours): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbJours', [$nb_jours]);

        return parent::setNbJours($nb_jours);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponsable(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsable', []);

        return parent::getResponsable();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponsable(?string $responsable): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponsable', [$responsable]);

        return parent::setResponsable($responsable);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone(?string $telephone): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteSession(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteSession', []);

        return parent::getSiteSession();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteSession(?string $site_session): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteSession', [$site_session]);

        return parent::setSiteSession($site_session);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(?string $adresse): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal(?string $code_postal): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$code_postal]);

        return parent::setCodePostal($code_postal);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(?string $ville): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getCandidats(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCandidats', []);

        return parent::getCandidats();
    }

    /**
     * {@inheritDoc}
     */
    public function addCandidat(\App\Entity\Candidat $candidat): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCandidat', [$candidat]);

        return parent::addCandidat($candidat);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCandidat(\App\Entity\Candidat $candidat): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCandidat', [$candidat]);

        return parent::removeCandidat($candidat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntrepriseId(): ?\App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntrepriseId', []);

        return parent::getEntrepriseId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntrepriseId(?\App\Entity\Entreprise $entreprise_id): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntrepriseId', [$entreprise_id]);

        return parent::setEntrepriseId($entreprise_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getJuryId(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJuryId', []);

        return parent::getJuryId();
    }

    /**
     * {@inheritDoc}
     */
    public function addJuryId(\App\Entity\Jury $juryId): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJuryId', [$juryId]);

        return parent::addJuryId($juryId);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJuryId(\App\Entity\Jury $juryId): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJuryId', [$juryId]);

        return parent::removeJuryId($juryId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitreId(): ?\App\Entity\Titre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreId', []);

        return parent::getTitreId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitreId(?\App\Entity\Titre $titre_id): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreId', [$titre_id]);

        return parent::setTitreId($titre_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getJourId(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJourId', []);

        return parent::getJourId();
    }

    /**
     * {@inheritDoc}
     */
    public function addJourId(\App\Entity\Jour $jourId): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJourId', [$jourId]);

        return parent::addJourId($jourId);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJourId(\App\Entity\Jour $jourId): \App\Entity\Session
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJourId', [$jourId]);

        return parent::removeJourId($jourId);
    }

}
