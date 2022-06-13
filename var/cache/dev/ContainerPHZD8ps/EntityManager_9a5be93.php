<?php

namespace ContainerPHZD8ps;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd5eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer34e1c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf49ae = [
        
    ];

    public function getConnection()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getConnection', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getMetadataFactory', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getExpressionBuilder', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'beginTransaction', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getCache', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'transactional', array('func' => $func), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'commit', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->commit();
    }

    public function rollback()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'rollback', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getClassMetadata', array('className' => $className), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'createQuery', array('dql' => $dql), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'createNamedQuery', array('name' => $name), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'createQueryBuilder', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'flush', array('entity' => $entity), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'clear', array('entityName' => $entityName), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->clear($entityName);
    }

    public function close()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'close', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->close();
    }

    public function persist($entity)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'persist', array('entity' => $entity), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'remove', array('entity' => $entity), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'refresh', array('entity' => $entity), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'detach', array('entity' => $entity), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'merge', array('entity' => $entity), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'contains', array('entity' => $entity), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getEventManager', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getConfiguration', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'isOpen', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getUnitOfWork', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getProxyFactory', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'initializeObject', array('obj' => $obj), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'getFilters', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'isFiltersStateClean', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'hasFilters', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return $this->valueHolderfd5eb->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer34e1c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfd5eb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfd5eb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfd5eb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, '__get', ['name' => $name], $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        if (isset(self::$publicPropertiesf49ae[$name])) {
            return $this->valueHolderfd5eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd5eb;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd5eb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd5eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd5eb;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, '__isset', array('name' => $name), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd5eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd5eb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, '__unset', array('name' => $name), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd5eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd5eb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, '__clone', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        $this->valueHolderfd5eb = clone $this->valueHolderfd5eb;
    }

    public function __sleep()
    {
        $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, '__sleep', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;

        return array('valueHolderfd5eb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer34e1c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer34e1c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer34e1c && ($this->initializer34e1c->__invoke($valueHolderfd5eb, $this, 'initializeProxy', array(), $this->initializer34e1c) || 1) && $this->valueHolderfd5eb = $valueHolderfd5eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd5eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd5eb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
