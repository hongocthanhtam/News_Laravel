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
use Symfony\Component\Translation\DependencyInjection\TranslationExtractorPass;

class TranslationExtractorPassTest extends TestCase
{
    public function testProcess()
    {
<<<<<<< HEAD
        $definition = $this->getMockBuilder('Symfony\Component\DependencyInjection\Definition')->disableOriginalConstructor()->getMock();
        $container = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')->disableOriginalConstructor()->getMock();

        $container->expects($this->once())
            ->method('hasDefinition')
            ->with('translation.extractor')
            ->will($this->returnValue(true));

        $container->expects($this->once())
            ->method('getDefinition')
            ->with('translation.extractor')
            ->will($this->returnValue($definition));

        $valueTaggedServiceIdsFound = array(
            'foo.id' => array(
                array('alias' => 'bar.alias'),
            ),
        );
        $container->expects($this->once())
            ->method('findTaggedServiceIds')
            ->with('translation.extractor', true)
            ->will($this->returnValue($valueTaggedServiceIdsFound));

        $definition->expects($this->once())->method('addMethodCall')->with('addExtractor', array('bar.alias', new Reference('foo.id')));

        $translationDumperPass = new TranslationExtractorPass();
        $translationDumperPass->process($container);
=======
        $container = new ContainerBuilder();
        $extractorDefinition = $container->register('translation.extractor');
        $container->register('foo.id')
            ->addTag('translation.extractor', array('alias' => 'bar.alias'));

        $translationDumperPass = new TranslationExtractorPass();
        $translationDumperPass->process($container);

        $this->assertEquals(array(array('addExtractor', array('bar.alias', new Reference('foo.id')))), $extractorDefinition->getMethodCalls());
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    }

    public function testProcessNoDefinitionFound()
    {
<<<<<<< HEAD
        $container = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')->disableOriginalConstructor()->getMock();

        $container->expects($this->once())
            ->method('hasDefinition')
            ->with('translation.extractor')
            ->will($this->returnValue(false));

        $container->expects($this->never())->method('getDefinition');
        $container->expects($this->never())->method('findTaggedServiceIds');

        $translationDumperPass = new TranslationExtractorPass();
        $translationDumperPass->process($container);
=======
        $container = new ContainerBuilder();

        $definitionsBefore = count($container->getDefinitions());
        $aliasesBefore = count($container->getAliases());

        $translationDumperPass = new TranslationExtractorPass();
        $translationDumperPass->process($container);

        // the container is untouched (i.e. no new definitions or aliases)
        $this->assertCount($definitionsBefore, $container->getDefinitions());
        $this->assertCount($aliasesBefore, $container->getAliases());
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\RuntimeException
     * @expectedExceptionMessage The alias for the tag "translation.extractor" of service "foo.id" must be set.
     */
    public function testProcessMissingAlias()
    {
        $definition = $this->getMockBuilder('Symfony\Component\DependencyInjection\Definition')->disableOriginalConstructor()->getMock();
<<<<<<< HEAD
        $container = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')->disableOriginalConstructor()->getMock();

        $container->expects($this->once())
            ->method('hasDefinition')
            ->with('translation.extractor')
            ->will($this->returnValue(true));

        $container->expects($this->once())
            ->method('getDefinition')
            ->with('translation.extractor')
            ->will($this->returnValue($definition));

        $valueTaggedServiceIdsFound = array(
            'foo.id' => array(),
        );
        $container->expects($this->once())
            ->method('findTaggedServiceIds')
            ->with('translation.extractor', true)
            ->will($this->returnValue($valueTaggedServiceIdsFound));
=======
        $container = new ContainerBuilder();
        $container->register('translation.extractor');
        $container->register('foo.id')
            ->addTag('translation.extractor', array());
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        $definition->expects($this->never())->method('addMethodCall');

        $translationDumperPass = new TranslationExtractorPass();
        $translationDumperPass->process($container);
    }
}
