<?php

namespace ContainerVSVNix3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4a0eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer16e9c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties73827 = [
        
    ];

    public function getConnection()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getConnection', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getMetadataFactory', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getExpressionBuilder', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'beginTransaction', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getCache', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'transactional', array('func' => $func), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'commit', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->commit();
    }

    public function rollback()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'rollback', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getClassMetadata', array('className' => $className), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'createQuery', array('dql' => $dql), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'createNamedQuery', array('name' => $name), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'createQueryBuilder', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'flush', array('entity' => $entity), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'clear', array('entityName' => $entityName), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->clear($entityName);
    }

    public function close()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'close', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->close();
    }

    public function persist($entity)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'persist', array('entity' => $entity), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'remove', array('entity' => $entity), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'refresh', array('entity' => $entity), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'detach', array('entity' => $entity), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'merge', array('entity' => $entity), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'contains', array('entity' => $entity), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getEventManager', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getConfiguration', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'isOpen', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getUnitOfWork', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getProxyFactory', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'initializeObject', array('obj' => $obj), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'getFilters', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'isFiltersStateClean', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'hasFilters', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return $this->valueHolder4a0eb->hasFilters();
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

        $instance->initializer16e9c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4a0eb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4a0eb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4a0eb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, '__get', ['name' => $name], $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        if (isset(self::$publicProperties73827[$name])) {
            return $this->valueHolder4a0eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a0eb;

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

        $targetObject = $this->valueHolder4a0eb;
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
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a0eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a0eb;
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
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, '__isset', array('name' => $name), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a0eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4a0eb;
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
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, '__unset', array('name' => $name), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a0eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4a0eb;
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
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, '__clone', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        $this->valueHolder4a0eb = clone $this->valueHolder4a0eb;
    }

    public function __sleep()
    {
        $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, '__sleep', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;

        return array('valueHolder4a0eb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16e9c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16e9c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer16e9c && ($this->initializer16e9c->__invoke($valueHolder4a0eb, $this, 'initializeProxy', array(), $this->initializer16e9c) || 1) && $this->valueHolder4a0eb = $valueHolder4a0eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a0eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a0eb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
