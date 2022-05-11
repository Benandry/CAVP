<?php

namespace ContainerLJsmxlW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder28526 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera2d32 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa3f24 = [
        
    ];

    public function getConnection()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getConnection', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getMetadataFactory', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getExpressionBuilder', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'beginTransaction', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getCache', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getCache();
    }

    public function transactional($func)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'transactional', array('func' => $func), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'wrapInTransaction', array('func' => $func), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'commit', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->commit();
    }

    public function rollback()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'rollback', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getClassMetadata', array('className' => $className), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'createQuery', array('dql' => $dql), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'createNamedQuery', array('name' => $name), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'createQueryBuilder', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'flush', array('entity' => $entity), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'clear', array('entityName' => $entityName), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->clear($entityName);
    }

    public function close()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'close', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->close();
    }

    public function persist($entity)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'persist', array('entity' => $entity), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'remove', array('entity' => $entity), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'refresh', array('entity' => $entity), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'detach', array('entity' => $entity), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'merge', array('entity' => $entity), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getRepository', array('entityName' => $entityName), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'contains', array('entity' => $entity), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getEventManager', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getConfiguration', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'isOpen', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getUnitOfWork', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getProxyFactory', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'initializeObject', array('obj' => $obj), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'getFilters', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'isFiltersStateClean', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'hasFilters', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return $this->valueHolder28526->hasFilters();
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

        $instance->initializera2d32 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder28526) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder28526 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder28526->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, '__get', ['name' => $name], $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        if (isset(self::$publicPropertiesa3f24[$name])) {
            return $this->valueHolder28526->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28526;

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

        $targetObject = $this->valueHolder28526;
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
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28526;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder28526;
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
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, '__isset', array('name' => $name), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28526;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder28526;
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
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, '__unset', array('name' => $name), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28526;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder28526;
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
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, '__clone', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        $this->valueHolder28526 = clone $this->valueHolder28526;
    }

    public function __sleep()
    {
        $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, '__sleep', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;

        return array('valueHolder28526');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2d32 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2d32;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera2d32 && ($this->initializera2d32->__invoke($valueHolder28526, $this, 'initializeProxy', array(), $this->initializera2d32) || 1) && $this->valueHolder28526 = $valueHolder28526;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder28526;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder28526;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
