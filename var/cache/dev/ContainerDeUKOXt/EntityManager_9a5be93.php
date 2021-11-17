<?php

namespace ContainerDeUKOXt;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder538af = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer79786 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties940a4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getConnection', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getMetadataFactory', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getExpressionBuilder', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'beginTransaction', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getCache', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getCache();
    }

    public function transactional($func)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'transactional', array('func' => $func), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'wrapInTransaction', array('func' => $func), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'commit', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->commit();
    }

    public function rollback()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'rollback', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getClassMetadata', array('className' => $className), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'createQuery', array('dql' => $dql), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'createNamedQuery', array('name' => $name), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'createQueryBuilder', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'flush', array('entity' => $entity), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'clear', array('entityName' => $entityName), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->clear($entityName);
    }

    public function close()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'close', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->close();
    }

    public function persist($entity)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'persist', array('entity' => $entity), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'remove', array('entity' => $entity), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'refresh', array('entity' => $entity), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'detach', array('entity' => $entity), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'merge', array('entity' => $entity), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getRepository', array('entityName' => $entityName), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'contains', array('entity' => $entity), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getEventManager', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getConfiguration', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'isOpen', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getUnitOfWork', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getProxyFactory', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'initializeObject', array('obj' => $obj), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'getFilters', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'isFiltersStateClean', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'hasFilters', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return $this->valueHolder538af->hasFilters();
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

        $instance->initializer79786 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder538af) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder538af = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder538af->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, '__get', ['name' => $name], $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        if (isset(self::$publicProperties940a4[$name])) {
            return $this->valueHolder538af->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder538af;

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

        $targetObject = $this->valueHolder538af;
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
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder538af;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder538af;
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
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, '__isset', array('name' => $name), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder538af;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder538af;
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
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, '__unset', array('name' => $name), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder538af;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder538af;
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
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, '__clone', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        $this->valueHolder538af = clone $this->valueHolder538af;
    }

    public function __sleep()
    {
        $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, '__sleep', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;

        return array('valueHolder538af');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer79786 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer79786;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer79786 && ($this->initializer79786->__invoke($valueHolder538af, $this, 'initializeProxy', array(), $this->initializer79786) || 1) && $this->valueHolder538af = $valueHolder538af;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder538af;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder538af;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
