<?php

namespace ContainerXG3A5Dw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9e113 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3bd9f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties487e6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getConnection', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getMetadataFactory', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getExpressionBuilder', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'beginTransaction', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getCache', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'transactional', array('func' => $func), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->transactional($func);
    }

    public function commit()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'commit', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->commit();
    }

    public function rollback()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'rollback', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getClassMetadata', array('className' => $className), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'createQuery', array('dql' => $dql), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'createNamedQuery', array('name' => $name), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'createQueryBuilder', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'flush', array('entity' => $entity), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'clear', array('entityName' => $entityName), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->clear($entityName);
    }

    public function close()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'close', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->close();
    }

    public function persist($entity)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'persist', array('entity' => $entity), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'remove', array('entity' => $entity), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'refresh', array('entity' => $entity), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'detach', array('entity' => $entity), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'merge', array('entity' => $entity), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'contains', array('entity' => $entity), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getEventManager', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getConfiguration', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'isOpen', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getUnitOfWork', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getProxyFactory', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'initializeObject', array('obj' => $obj), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'getFilters', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'isFiltersStateClean', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'hasFilters', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return $this->valueHolder9e113->hasFilters();
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

        $instance->initializer3bd9f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9e113) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9e113 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9e113->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, '__get', ['name' => $name], $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        if (isset(self::$publicProperties487e6[$name])) {
            return $this->valueHolder9e113->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e113;

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

        $targetObject = $this->valueHolder9e113;
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
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e113;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9e113;
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
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, '__isset', array('name' => $name), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e113;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9e113;
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
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, '__unset', array('name' => $name), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e113;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9e113;
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
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, '__clone', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        $this->valueHolder9e113 = clone $this->valueHolder9e113;
    }

    public function __sleep()
    {
        $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, '__sleep', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;

        return array('valueHolder9e113');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3bd9f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3bd9f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3bd9f && ($this->initializer3bd9f->__invoke($valueHolder9e113, $this, 'initializeProxy', array(), $this->initializer3bd9f) || 1) && $this->valueHolder9e113 = $valueHolder9e113;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9e113;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9e113;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
