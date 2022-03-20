<?php

namespace Container1DjnS8N;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc21ab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer93ab2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa1a10 = [
        
    ];

    public function getConnection()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getConnection', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getMetadataFactory', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getExpressionBuilder', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'beginTransaction', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getCache', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getCache();
    }

    public function transactional($func)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'transactional', array('func' => $func), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'wrapInTransaction', array('func' => $func), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'commit', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->commit();
    }

    public function rollback()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'rollback', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getClassMetadata', array('className' => $className), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'createQuery', array('dql' => $dql), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'createNamedQuery', array('name' => $name), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'createQueryBuilder', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'flush', array('entity' => $entity), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'clear', array('entityName' => $entityName), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->clear($entityName);
    }

    public function close()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'close', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->close();
    }

    public function persist($entity)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'persist', array('entity' => $entity), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'remove', array('entity' => $entity), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'refresh', array('entity' => $entity), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'detach', array('entity' => $entity), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'merge', array('entity' => $entity), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getRepository', array('entityName' => $entityName), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'contains', array('entity' => $entity), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getEventManager', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getConfiguration', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'isOpen', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getUnitOfWork', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getProxyFactory', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'initializeObject', array('obj' => $obj), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'getFilters', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'isFiltersStateClean', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'hasFilters', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return $this->valueHolderc21ab->hasFilters();
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

        $instance->initializer93ab2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc21ab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc21ab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc21ab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, '__get', ['name' => $name], $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        if (isset(self::$publicPropertiesa1a10[$name])) {
            return $this->valueHolderc21ab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc21ab;

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

        $targetObject = $this->valueHolderc21ab;
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
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc21ab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc21ab;
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
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, '__isset', array('name' => $name), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc21ab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc21ab;
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
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, '__unset', array('name' => $name), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc21ab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc21ab;
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
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, '__clone', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        $this->valueHolderc21ab = clone $this->valueHolderc21ab;
    }

    public function __sleep()
    {
        $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, '__sleep', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;

        return array('valueHolderc21ab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer93ab2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer93ab2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer93ab2 && ($this->initializer93ab2->__invoke($valueHolderc21ab, $this, 'initializeProxy', array(), $this->initializer93ab2) || 1) && $this->valueHolderc21ab = $valueHolderc21ab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc21ab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc21ab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
