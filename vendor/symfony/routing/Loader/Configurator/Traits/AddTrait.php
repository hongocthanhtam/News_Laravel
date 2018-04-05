<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Loader\Configurator\Traits;

use Symfony\Component\Routing\Loader\Configurator\RouteConfigurator;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

trait AddTrait
{
    /**
     * @var RouteCollection
     */
    private $collection;

    private $name = '';

    /**
     * Adds a route.
     *
     * @param string $name
     * @param string $path
     *
     * @return RouteConfigurator
     */
    final public function add($name, $path)
    {
<<<<<<< HEAD
        $this->collection->add($this->name.$name, $route = new Route($path));

        return new RouteConfigurator($this->collection, $route);
=======
        $parentConfigurator = $this instanceof RouteConfigurator ? $this->parentConfigurator : null;
        $this->collection->add($this->name.$name, $route = new Route($path));

        return new RouteConfigurator($this->collection, $route, '', $parentConfigurator);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    }

    /**
     * Adds a route.
     *
     * @param string $name
     * @param string $path
     *
     * @return RouteConfigurator
     */
    final public function __invoke($name, $path)
    {
        return $this->add($name, $path);
    }
}
