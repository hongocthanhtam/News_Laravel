<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Tests\Matcher;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
=======
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;

<<<<<<< HEAD
class RedirectableUrlMatcherTest extends TestCase
{
    public function testRedirectWhenNoSlash()
=======
class RedirectableUrlMatcherTest extends UrlMatcherTest
{
    public function testMissingTrailingSlash()
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo/'));

<<<<<<< HEAD
        $matcher = $this->getMockForAbstractClass('Symfony\Component\Routing\Matcher\RedirectableUrlMatcher', array($coll, new RequestContext()));
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher->expects($this->once())->method('redirect')->will($this->returnValue(array()));
        $matcher->match('/foo');
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\ResourceNotFoundException
     */
    public function testRedirectWhenNoSlashForNonSafeMethod()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo/'));

        $context = new RequestContext();
        $context->setMethod('POST');
<<<<<<< HEAD
        $matcher = $this->getMockForAbstractClass('Symfony\Component\Routing\Matcher\RedirectableUrlMatcher', array($coll, $context));
=======
        $matcher = $this->getUrlMatcher($coll, $context);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher->match('/foo');
    }

    public function testSchemeRedirectRedirectsToFirstScheme()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo', array(), array(), array(), '', array('FTP', 'HTTPS')));

<<<<<<< HEAD
        $matcher = $this->getMockForAbstractClass('Symfony\Component\Routing\Matcher\RedirectableUrlMatcher', array($coll, new RequestContext()));
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher
            ->expects($this->once())
            ->method('redirect')
            ->with('/foo', 'foo', 'ftp')
            ->will($this->returnValue(array('_route' => 'foo')))
        ;
        $matcher->match('/foo');
    }

<<<<<<< HEAD
    public function testNoSchemaRedirectIfOnOfMultipleSchemesMatches()
=======
    public function testNoSchemaRedirectIfOneOfMultipleSchemesMatches()
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo', array(), array(), array(), '', array('https', 'http')));

<<<<<<< HEAD
        $matcher = $this->getMockForAbstractClass('Symfony\Component\Routing\Matcher\RedirectableUrlMatcher', array($coll, new RequestContext()));
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher
            ->expects($this->never())
            ->method('redirect');
        $matcher->match('/foo');
    }

    public function testSchemeRedirectWithParams()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo/{bar}', array(), array(), array(), '', array('https')));

<<<<<<< HEAD
        $matcher = $this->getMockForAbstractClass('Symfony\Component\Routing\Matcher\RedirectableUrlMatcher', array($coll, new RequestContext()));
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher
            ->expects($this->once())
            ->method('redirect')
            ->with('/foo/baz', 'foo', 'https')
            ->will($this->returnValue(array('redirect' => 'value')))
        ;
        $this->assertEquals(array('_route' => 'foo', 'bar' => 'baz', 'redirect' => 'value'), $matcher->match('/foo/baz'));
    }

    public function testSlashRedirectWithParams()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo/{bar}/'));

<<<<<<< HEAD
        $matcher = $this->getMockForAbstractClass('Symfony\Component\Routing\Matcher\RedirectableUrlMatcher', array($coll, new RequestContext()));
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher
            ->expects($this->once())
            ->method('redirect')
            ->with('/foo/baz/', 'foo', null)
            ->will($this->returnValue(array('redirect' => 'value')))
        ;
        $this->assertEquals(array('_route' => 'foo', 'bar' => 'baz', 'redirect' => 'value'), $matcher->match('/foo/baz'));
    }

    public function testRedirectPreservesUrlEncoding()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo:bar/'));

<<<<<<< HEAD
        $matcher = $this->getMockForAbstractClass('Symfony\Component\Routing\Matcher\RedirectableUrlMatcher', array($coll, new RequestContext()));
        $matcher->expects($this->once())->method('redirect')->with('/foo%3Abar/')->willReturn(array());
        $matcher->match('/foo%3Abar');
    }
=======
        $matcher = $this->getUrlMatcher($coll);
        $matcher->expects($this->once())->method('redirect')->with('/foo%3Abar/')->willReturn(array());
        $matcher->match('/foo%3Abar');
    }

    public function testSchemeRequirement()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo', array(), array(), array(), '', array('https')));
        $matcher = $this->getUrlMatcher($coll, new RequestContext());
        $matcher->expects($this->once())->method('redirect')->with('/foo', 'foo', 'https')->willReturn(array());
        $this->assertSame(array('_route' => 'foo'), $matcher->match('/foo'));
    }

    protected function getUrlMatcher(RouteCollection $routes, RequestContext $context = null)
    {
        return $this->getMockForAbstractClass('Symfony\Component\Routing\Matcher\RedirectableUrlMatcher', array($routes, $context ?: new RequestContext()));
    }
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
}
