<?php

namespace ContainerUxLAWa6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6e64a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer47644 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0cd4c = [
        
    ];

    public function getConnection()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getConnection', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getMetadataFactory', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getExpressionBuilder', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'beginTransaction', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getCache', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'transactional', array('func' => $func), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'commit', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->commit();
    }

    public function rollback()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'rollback', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getClassMetadata', array('className' => $className), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'createQuery', array('dql' => $dql), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'createNamedQuery', array('name' => $name), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'createQueryBuilder', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'flush', array('entity' => $entity), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'clear', array('entityName' => $entityName), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->clear($entityName);
    }

    public function close()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'close', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->close();
    }

    public function persist($entity)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'persist', array('entity' => $entity), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'remove', array('entity' => $entity), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'refresh', array('entity' => $entity), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'detach', array('entity' => $entity), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'merge', array('entity' => $entity), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'contains', array('entity' => $entity), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getEventManager', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getConfiguration', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'isOpen', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getUnitOfWork', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getProxyFactory', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'initializeObject', array('obj' => $obj), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'getFilters', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'isFiltersStateClean', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'hasFilters', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return $this->valueHolder6e64a->hasFilters();
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

        $instance->initializer47644 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6e64a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6e64a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6e64a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, '__get', ['name' => $name], $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        if (isset(self::$publicProperties0cd4c[$name])) {
            return $this->valueHolder6e64a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e64a;

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

        $targetObject = $this->valueHolder6e64a;
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
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e64a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6e64a;
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
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, '__isset', array('name' => $name), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e64a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6e64a;
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
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, '__unset', array('name' => $name), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e64a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6e64a;
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
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, '__clone', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        $this->valueHolder6e64a = clone $this->valueHolder6e64a;
    }

    public function __sleep()
    {
        $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, '__sleep', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;

        return array('valueHolder6e64a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer47644 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer47644;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer47644 && ($this->initializer47644->__invoke($valueHolder6e64a, $this, 'initializeProxy', array(), $this->initializer47644) || 1) && $this->valueHolder6e64a = $valueHolder6e64a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6e64a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6e64a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
