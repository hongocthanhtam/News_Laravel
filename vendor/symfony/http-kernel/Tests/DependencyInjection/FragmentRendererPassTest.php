<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
=======
use Symfony\Component\DependencyInjection\Argument\ServiceClosureArgument;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ServiceLocator;
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\DependencyInjection\FragmentRendererPass;
use Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface;

class FragmentRendererPassTest extends TestCase
{
    /**
     * Tests that content rendering not implementing FragmentRendererInterface
<<<<<<< HEAD
     * trigger an exception.
=======
     * triggers an exception.
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     *
     * @expectedException \InvalidArgumentException
     */
    public function testContentRendererWithoutInterface()
    {
<<<<<<< HEAD
        // one service, not implementing any interface
        $services = array(
            'my_content_renderer' => array(array('alias' => 'foo')),
        );

        $definition = $this->getMockBuilder('Symfony\Component\DependencyInjection\Definition')->getMock();

        $builder = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')->setMethods(array('hasDefinition', 'findTaggedServiceIds', 'getDefinition'))->getMock();
        $builder->expects($this->any())
            ->method('hasDefinition')
            ->will($this->returnValue(true));

        // We don't test kernel.fragment_renderer here
        $builder->expects($this->atLeastOnce())
            ->method('findTaggedServiceIds')
            ->will($this->returnValue($services));

        $builder->expects($this->atLeastOnce())
            ->method('getDefinition')
            ->will($this->returnValue($definition));

        $pass = new FragmentRendererPass();
        $pass->process($builder);
=======
        $builder = new ContainerBuilder();
        $fragmentHandlerDefinition = $builder->register('fragment.handler');
        $builder->register('my_content_renderer', 'Symfony\Component\DependencyInjection\Definition')
            ->addTag('kernel.fragment_renderer', array('alias' => 'foo'));

        $pass = new FragmentRendererPass();
        $pass->process($builder);

        $this->assertEquals(array(array('addRendererService', array('foo', 'my_content_renderer'))), $fragmentHandlerDefinition->getMethodCalls());
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    }

    public function testValidContentRenderer()
    {
<<<<<<< HEAD
        $services = array(
            'my_content_renderer' => array(array('alias' => 'foo')),
        );

        $renderer = new Definition('', array(null));

        $definition = $this->getMockBuilder('Symfony\Component\DependencyInjection\Definition')->getMock();
        $definition->expects($this->atLeastOnce())
            ->method('getClass')
            ->will($this->returnValue('Symfony\Component\HttpKernel\Tests\DependencyInjection\RendererService'));

        $builder = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')->setMethods(array('hasDefinition', 'findTaggedServiceIds', 'getDefinition', 'getReflectionClass'))->getMock();
        $builder->expects($this->any())
            ->method('hasDefinition')
            ->will($this->returnValue(true));

        // We don't test kernel.fragment_renderer here
        $builder->expects($this->atLeastOnce())
            ->method('findTaggedServiceIds')
            ->will($this->returnValue($services));

        $builder->expects($this->atLeastOnce())
            ->method('getDefinition')
            ->will($this->onConsecutiveCalls($renderer, $definition));

        $builder->expects($this->atLeastOnce())
            ->method('getReflectionClass')
            ->with('Symfony\Component\HttpKernel\Tests\DependencyInjection\RendererService')
            ->will($this->returnValue(new \ReflectionClass('Symfony\Component\HttpKernel\Tests\DependencyInjection\RendererService')));
=======
        $builder = new ContainerBuilder();
        $fragmentHandlerDefinition = $builder->register('fragment.handler')
            ->addArgument(null);
        $builder->register('my_content_renderer', 'Symfony\Component\HttpKernel\Tests\DependencyInjection\RendererService')
            ->addTag('kernel.fragment_renderer', array('alias' => 'foo'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        $pass = new FragmentRendererPass();
        $pass->process($builder);

<<<<<<< HEAD
        $this->assertInstanceOf(Reference::class, $renderer->getArgument(0));
=======
        $serviceLocatorDefinition = $builder->getDefinition((string) $fragmentHandlerDefinition->getArgument(0));
        $this->assertSame(ServiceLocator::class, $serviceLocatorDefinition->getClass());
        $this->assertEquals(array('foo' => new ServiceClosureArgument(new Reference('my_content_renderer'))), $serviceLocatorDefinition->getArgument(0));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    }
}

class RendererService implements FragmentRendererInterface
{
    public function render($uri, Request $request = null, array $options = array())
    {
    }

    public function getName()
    {
        return 'test';
    }
}
