<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
=======
use Symfony\Component\DependencyInjection\ContainerBuilder;
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\Translation\DependencyInjection\TranslationDumperPass;

class TranslationDumperPassTest extends TestCase
{
    public function testProcess()
    {
<<<<<<< HEAD
        $definition = $this->getMockBuilder('Symfony\Component\DependencyInjection\Definition')->disableOriginalConstructor()->getMock();
        $container = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')->disableOriginalConstructor()->getMock();

        $container->expects($this->once())
            ->method('hasDefinition')
            ->with('translation.writer')
            ->will($this->returnValue(true));

        $container->expects($this->once())
            ->method('getDefinition')
            ->with('translation.writer')
            ->will($this->returnValue($definition));

        $valueTaggedServiceIdsFound = array(
            'foo.id' => array(
                array('alias' => 'bar.alias'),
            ),
        );
        $container->expects($this->once())
            ->method('findTaggedServiceIds')
            ->with('translation.dumper', true)
            ->will($this->returnValue($valueTaggedServiceIdsFound));

        $definition->expects($this->once())->method('addMethodCall')->with('addDumper', array('bar.alias', new Reference('foo.id')));

        $translationDumperPass = new TranslationDumperPass();
        $translationDumperPass->process($container);
=======
        $container = new ContainerBuilder();
        $writerDefinition = $container->register('translation.writer');
        $container->register('foo.id')
            ->addTag('translation.dumper', array('alias' => 'bar.alias'));

        $translationDumperPass = new TranslationDumperPass();
        $translationDumperPass->process($container);

        $this->assertEquals(array(array('addDumper', array('bar.alias', new Reference('foo.id')))), $writerDefinition->getMethodCalls());
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    }

    public function testProcessNoDefinitionFound()
    {
<<<<<<< HEAD
        $container = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')->disableOriginalConstructor()->getMock();

        $container->expects($this->once())
            ->method('hasDefinition')
            ->with('translation.writer')
            ->will($this->returnValue(false));

        $container->expects($this->never())->method('getDefinition');
        $container->expects($this->never())->method('findTaggedServiceIds');

        $translationDumperPass = new TranslationDumperPass();
        $translationDumperPass->process($container);
=======
        $container = new ContainerBuilder();

        $definitionsBefore = count($container->getDefinitions());
        $aliasesBefore = count($container->getAliases());

        $translationDumperPass = new TranslationDumperPass();
        $translationDumperPass->process($container);

        // the container is untouched (i.e. no new definitions or aliases)
        $this->assertCount($definitionsBefore, $container->getDefinitions());
        $this->assertCount($aliasesBefore, $container->getAliases());
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    }
}
