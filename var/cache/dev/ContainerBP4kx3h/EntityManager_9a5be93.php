<?php

namespace ContainerBP4kx3h;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7be02 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer84a1e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties29d37 = [
        
    ];

    public function getConnection()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getConnection', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getMetadataFactory', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getExpressionBuilder', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'beginTransaction', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getCache', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getCache();
    }

    public function transactional($func)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'transactional', array('func' => $func), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'wrapInTransaction', array('func' => $func), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'commit', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->commit();
    }

    public function rollback()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'rollback', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getClassMetadata', array('className' => $className), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'createQuery', array('dql' => $dql), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'createNamedQuery', array('name' => $name), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'createQueryBuilder', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'flush', array('entity' => $entity), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'clear', array('entityName' => $entityName), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->clear($entityName);
    }

    public function close()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'close', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->close();
    }

    public function persist($entity)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'persist', array('entity' => $entity), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'remove', array('entity' => $entity), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'refresh', array('entity' => $entity), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'detach', array('entity' => $entity), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'merge', array('entity' => $entity), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getRepository', array('entityName' => $entityName), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'contains', array('entity' => $entity), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getEventManager', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getConfiguration', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'isOpen', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getUnitOfWork', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getProxyFactory', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'initializeObject', array('obj' => $obj), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'getFilters', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'isFiltersStateClean', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'hasFilters', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return $this->valueHolder7be02->hasFilters();
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

        $instance->initializer84a1e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7be02) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7be02 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7be02->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, '__get', ['name' => $name], $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        if (isset(self::$publicProperties29d37[$name])) {
            return $this->valueHolder7be02->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7be02;

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

        $targetObject = $this->valueHolder7be02;
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
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7be02;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7be02;
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
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, '__isset', array('name' => $name), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7be02;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7be02;
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
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, '__unset', array('name' => $name), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7be02;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7be02;
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
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, '__clone', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        $this->valueHolder7be02 = clone $this->valueHolder7be02;
    }

    public function __sleep()
    {
        $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, '__sleep', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;

        return array('valueHolder7be02');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer84a1e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer84a1e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer84a1e && ($this->initializer84a1e->__invoke($valueHolder7be02, $this, 'initializeProxy', array(), $this->initializer84a1e) || 1) && $this->valueHolder7be02 = $valueHolder7be02;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7be02;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7be02;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
