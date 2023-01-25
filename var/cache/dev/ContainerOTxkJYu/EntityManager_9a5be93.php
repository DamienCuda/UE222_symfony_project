<?php

namespace ContainerOTxkJYu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9f826 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6f766 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd922e = [
        
    ];

    public function getConnection()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getConnection', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getMetadataFactory', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getExpressionBuilder', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'beginTransaction', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getCache', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'transactional', array('func' => $func), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'commit', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->commit();
    }

    public function rollback()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'rollback', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getClassMetadata', array('className' => $className), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'createQuery', array('dql' => $dql), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'createNamedQuery', array('name' => $name), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'createQueryBuilder', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'flush', array('entity' => $entity), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'clear', array('entityName' => $entityName), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->clear($entityName);
    }

    public function close()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'close', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->close();
    }

    public function persist($entity)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'persist', array('entity' => $entity), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'remove', array('entity' => $entity), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'detach', array('entity' => $entity), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'merge', array('entity' => $entity), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'contains', array('entity' => $entity), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getEventManager', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getConfiguration', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'isOpen', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getUnitOfWork', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getProxyFactory', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'initializeObject', array('obj' => $obj), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'getFilters', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'isFiltersStateClean', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'hasFilters', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return $this->valueHolder9f826->hasFilters();
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

        $instance->initializer6f766 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder9f826) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9f826 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9f826->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, '__get', ['name' => $name], $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        if (isset(self::$publicPropertiesd922e[$name])) {
            return $this->valueHolder9f826->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f826;

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

        $targetObject = $this->valueHolder9f826;
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
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f826;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9f826;
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
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, '__isset', array('name' => $name), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f826;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9f826;
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
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, '__unset', array('name' => $name), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f826;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9f826;
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
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, '__clone', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        $this->valueHolder9f826 = clone $this->valueHolder9f826;
    }

    public function __sleep()
    {
        $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, '__sleep', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;

        return array('valueHolder9f826');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6f766 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6f766;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6f766 && ($this->initializer6f766->__invoke($valueHolder9f826, $this, 'initializeProxy', array(), $this->initializer6f766) || 1) && $this->valueHolder9f826 = $valueHolder9f826;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9f826;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9f826;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
