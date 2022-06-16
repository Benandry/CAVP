<?php

namespace ContainerSuRm8wr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder22445 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf0189 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties82bec = [
        
    ];

    public function getConnection()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getConnection', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getMetadataFactory', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getExpressionBuilder', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'beginTransaction', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getCache', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'transactional', array('func' => $func), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'commit', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->commit();
    }

    public function rollback()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'rollback', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getClassMetadata', array('className' => $className), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'createQuery', array('dql' => $dql), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'createNamedQuery', array('name' => $name), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'createQueryBuilder', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'flush', array('entity' => $entity), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'clear', array('entityName' => $entityName), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->clear($entityName);
    }

    public function close()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'close', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->close();
    }

    public function persist($entity)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'persist', array('entity' => $entity), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'remove', array('entity' => $entity), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'refresh', array('entity' => $entity), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'detach', array('entity' => $entity), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'merge', array('entity' => $entity), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'contains', array('entity' => $entity), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getEventManager', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getConfiguration', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'isOpen', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getUnitOfWork', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getProxyFactory', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'initializeObject', array('obj' => $obj), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'getFilters', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'isFiltersStateClean', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'hasFilters', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return $this->valueHolder22445->hasFilters();
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

        $instance->initializerf0189 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder22445) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder22445 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder22445->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, '__get', ['name' => $name], $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        if (isset(self::$publicProperties82bec[$name])) {
            return $this->valueHolder22445->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder22445;

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

        $targetObject = $this->valueHolder22445;
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
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder22445;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder22445;
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
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, '__isset', array('name' => $name), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder22445;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder22445;
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
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, '__unset', array('name' => $name), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder22445;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder22445;
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
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, '__clone', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        $this->valueHolder22445 = clone $this->valueHolder22445;
    }

    public function __sleep()
    {
        $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, '__sleep', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;

        return array('valueHolder22445');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf0189 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf0189;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf0189 && ($this->initializerf0189->__invoke($valueHolder22445, $this, 'initializeProxy', array(), $this->initializerf0189) || 1) && $this->valueHolder22445 = $valueHolder22445;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder22445;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder22445;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
