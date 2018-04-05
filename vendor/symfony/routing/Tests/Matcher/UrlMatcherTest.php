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

use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;

class UrlMatcherTest extends TestCase
{
    public function testNoMethodSoAllowed()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo'));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertInternalType('array', $matcher->match('/foo'));
    }

    public function testMethodNotAllowed()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo', array(), array(), array(), '', array(), array('post')));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        try {
            $matcher->match('/foo');
            $this->fail();
        } catch (MethodNotAllowedException $e) {
            $this->assertEquals(array('POST'), $e->getAllowedMethods());
        }
    }

    public function testHeadAllowedWhenRequirementContainsGet()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo', array(), array(), array(), '', array(), array('get')));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext('', 'head'));
=======
        $matcher = $this->getUrlMatcher($coll, new RequestContext('', 'head'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertInternalType('array', $matcher->match('/foo'));
    }

    public function testMethodNotAllowedAggregatesAllowedMethods()
    {
        $coll = new RouteCollection();
        $coll->add('foo1', new Route('/foo', array(), array(), array(), '', array(), array('post')));
        $coll->add('foo2', new Route('/foo', array(), array(), array(), '', array(), array('put', 'delete')));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        try {
            $matcher->match('/foo');
            $this->fail();
        } catch (MethodNotAllowedException $e) {
            $this->assertEquals(array('POST', 'PUT', 'DELETE'), $e->getAllowedMethods());
        }
    }

    public function testMatch()
    {
        // test the patterns are matched and parameters are returned
        $collection = new RouteCollection();
        $collection->add('foo', new Route('/foo/{bar}'));
<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        try {
            $matcher->match('/no-match');
            $this->fail();
        } catch (ResourceNotFoundException $e) {
        }
        $this->assertEquals(array('_route' => 'foo', 'bar' => 'baz'), $matcher->match('/foo/baz'));

        // test that defaults are merged
        $collection = new RouteCollection();
        $collection->add('foo', new Route('/foo/{bar}', array('def' => 'test')));
<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_route' => 'foo', 'bar' => 'baz', 'def' => 'test'), $matcher->match('/foo/baz'));

        // test that route "method" is ignored if no method is given in the context
        $collection = new RouteCollection();
        $collection->add('foo', new Route('/foo', array(), array(), array(), '', array(), array('get', 'head')));
<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
        $this->assertInternalType('array', $matcher->match('/foo'));

        // route does not match with POST method context
        $matcher = new UrlMatcher($collection, new RequestContext('', 'post'));
=======
        $matcher = $this->getUrlMatcher($collection);
        $this->assertInternalType('array', $matcher->match('/foo'));

        // route does not match with POST method context
        $matcher = $this->getUrlMatcher($collection, new RequestContext('', 'post'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        try {
            $matcher->match('/foo');
            $this->fail();
        } catch (MethodNotAllowedException $e) {
        }

        // route does match with GET or HEAD method context
<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
        $this->assertInternalType('array', $matcher->match('/foo'));
        $matcher = new UrlMatcher($collection, new RequestContext('', 'head'));
=======
        $matcher = $this->getUrlMatcher($collection);
        $this->assertInternalType('array', $matcher->match('/foo'));
        $matcher = $this->getUrlMatcher($collection, new RequestContext('', 'head'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertInternalType('array', $matcher->match('/foo'));

        // route with an optional variable as the first segment
        $collection = new RouteCollection();
        $collection->add('bar', new Route('/{bar}/foo', array('bar' => 'bar'), array('bar' => 'foo|bar')));
<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_route' => 'bar', 'bar' => 'bar'), $matcher->match('/bar/foo'));
        $this->assertEquals(array('_route' => 'bar', 'bar' => 'foo'), $matcher->match('/foo/foo'));

        $collection = new RouteCollection();
        $collection->add('bar', new Route('/{bar}', array('bar' => 'bar'), array('bar' => 'foo|bar')));
<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_route' => 'bar', 'bar' => 'foo'), $matcher->match('/foo'));
        $this->assertEquals(array('_route' => 'bar', 'bar' => 'bar'), $matcher->match('/'));

        // route with only optional variables
        $collection = new RouteCollection();
        $collection->add('bar', new Route('/{foo}/{bar}', array('foo' => 'foo', 'bar' => 'bar'), array()));
<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_route' => 'bar', 'foo' => 'foo', 'bar' => 'bar'), $matcher->match('/'));
        $this->assertEquals(array('_route' => 'bar', 'foo' => 'a', 'bar' => 'bar'), $matcher->match('/a'));
        $this->assertEquals(array('_route' => 'bar', 'foo' => 'a', 'bar' => 'b'), $matcher->match('/a/b'));
    }

    public function testMatchWithPrefixes()
    {
        $collection = new RouteCollection();
        $collection->add('foo', new Route('/{foo}'));
        $collection->addPrefix('/b');
        $collection->addPrefix('/a');

<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_route' => 'foo', 'foo' => 'foo'), $matcher->match('/a/b/foo'));
    }

    public function testMatchWithDynamicPrefix()
    {
        $collection = new RouteCollection();
        $collection->add('foo', new Route('/{foo}'));
        $collection->addPrefix('/b');
        $collection->addPrefix('/{_locale}');

<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_locale' => 'fr', '_route' => 'foo', 'foo' => 'foo'), $matcher->match('/fr/b/foo'));
    }

    public function testMatchSpecialRouteName()
    {
        $collection = new RouteCollection();
        $collection->add('$péß^a|', new Route('/bar'));

<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
        $this->assertEquals(array('_route' => '$péß^a|'), $matcher->match('/bar'));
    }

=======
        $matcher = $this->getUrlMatcher($collection);
        $this->assertEquals(array('_route' => '$péß^a|'), $matcher->match('/bar'));
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\ResourceNotFoundException
     */
    public function testTrailingEncodedNewlineIsNotOverlooked()
    {
        $collection = new RouteCollection();
        $collection->add('foo', new Route('/foo'));

        $matcher = $this->getUrlMatcher($collection);
        $matcher->match('/foo%0a');
    }

>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    public function testMatchNonAlpha()
    {
        $collection = new RouteCollection();
        $chars = '!"$%éà &\'()*+,./:;<=>@ABCDEFGHIJKLMNOPQRSTUVWXYZ\\[]^_`abcdefghijklmnopqrstuvwxyz{|}~-';
        $collection->add('foo', new Route('/{foo}/bar', array(), array('foo' => '['.preg_quote($chars).']+'), array('utf8' => true)));

<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_route' => 'foo', 'foo' => $chars), $matcher->match('/'.rawurlencode($chars).'/bar'));
        $this->assertEquals(array('_route' => 'foo', 'foo' => $chars), $matcher->match('/'.strtr($chars, array('%' => '%25')).'/bar'));
    }

    public function testMatchWithDotMetacharacterInRequirements()
    {
        $collection = new RouteCollection();
        $collection->add('foo', new Route('/{foo}/bar', array(), array('foo' => '.+')));

<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_route' => 'foo', 'foo' => "\n"), $matcher->match('/'.urlencode("\n").'/bar'), 'linefeed character is matched');
    }

    public function testMatchOverriddenRoute()
    {
        $collection = new RouteCollection();
        $collection->add('foo', new Route('/foo'));

        $collection1 = new RouteCollection();
        $collection1->add('foo', new Route('/foo1'));

        $collection->addCollection($collection1);

<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        $this->assertEquals(array('_route' => 'foo'), $matcher->match('/foo1'));
        $this->{method_exists($this, $_ = 'expectException') ? $_ : 'setExpectedException'}('Symfony\Component\Routing\Exception\ResourceNotFoundException');
        $this->assertEquals(array(), $matcher->match('/foo'));
    }

    public function testMatchRegression()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo/{foo}'));
        $coll->add('bar', new Route('/foo/bar/{foo}'));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('foo' => 'bar', '_route' => 'bar'), $matcher->match('/foo/bar/bar'));

        $collection = new RouteCollection();
        $collection->add('foo', new Route('/{bar}'));
<<<<<<< HEAD
        $matcher = new UrlMatcher($collection, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($collection);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        try {
            $matcher->match('/');
            $this->fail();
        } catch (ResourceNotFoundException $e) {
        }
    }

    public function testDefaultRequirementForOptionalVariables()
    {
        $coll = new RouteCollection();
        $coll->add('test', new Route('/{page}.{_format}', array('page' => 'index', '_format' => 'html')));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('page' => 'my-page', '_format' => 'xml', '_route' => 'test'), $matcher->match('/my-page.xml'));
    }

    public function testMatchingIsEager()
    {
        $coll = new RouteCollection();
        $coll->add('test', new Route('/{foo}-{bar}-', array(), array('foo' => '.+', 'bar' => '.+')));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('foo' => 'text1-text2-text3', 'bar' => 'text4', '_route' => 'test'), $matcher->match('/text1-text2-text3-text4-'));
    }

    public function testAdjacentVariables()
    {
        $coll = new RouteCollection();
        $coll->add('test', new Route('/{w}{x}{y}{z}.{_format}', array('z' => 'default-z', '_format' => 'html'), array('y' => 'y|Y')));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        // 'w' eagerly matches as much as possible and the other variables match the remaining chars.
        // This also shows that the variables w-z must all exclude the separating char (the dot '.' in this case) by default requirement.
        // Otherwise they would also consume '.xml' and _format would never match as it's an optional variable.
        $this->assertEquals(array('w' => 'wwwww', 'x' => 'x', 'y' => 'Y', 'z' => 'Z', '_format' => 'xml', '_route' => 'test'), $matcher->match('/wwwwwxYZ.xml'));
        // As 'y' has custom requirement and can only be of value 'y|Y', it will leave  'ZZZ' to variable z.
        // So with carefully chosen requirements adjacent variables, can be useful.
        $this->assertEquals(array('w' => 'wwwww', 'x' => 'x', 'y' => 'y', 'z' => 'ZZZ', '_format' => 'html', '_route' => 'test'), $matcher->match('/wwwwwxyZZZ'));
        // z and _format are optional.
        $this->assertEquals(array('w' => 'wwwww', 'x' => 'x', 'y' => 'y', 'z' => 'default-z', '_format' => 'html', '_route' => 'test'), $matcher->match('/wwwwwxy'));

        $this->{method_exists($this, $_ = 'expectException') ? $_ : 'setExpectedException'}('Symfony\Component\Routing\Exception\ResourceNotFoundException');
        $matcher->match('/wxy.html');
    }

    public function testOptionalVariableWithNoRealSeparator()
    {
        $coll = new RouteCollection();
        $coll->add('test', new Route('/get{what}', array('what' => 'All')));
<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        $this->assertEquals(array('what' => 'All', '_route' => 'test'), $matcher->match('/get'));
        $this->assertEquals(array('what' => 'Sites', '_route' => 'test'), $matcher->match('/getSites'));

        // Usually the character in front of an optional parameter can be left out, e.g. with pattern '/get/{what}' just '/get' would match.
        // But here the 't' in 'get' is not a separating character, so it makes no sense to match without it.
        $this->{method_exists($this, $_ = 'expectException') ? $_ : 'setExpectedException'}('Symfony\Component\Routing\Exception\ResourceNotFoundException');
        $matcher->match('/ge');
    }

    public function testRequiredVariableWithNoRealSeparator()
    {
        $coll = new RouteCollection();
        $coll->add('test', new Route('/get{what}Suffix'));
<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        $this->assertEquals(array('what' => 'Sites', '_route' => 'test'), $matcher->match('/getSitesSuffix'));
    }

    public function testDefaultRequirementOfVariable()
    {
        $coll = new RouteCollection();
        $coll->add('test', new Route('/{page}.{_format}'));
<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        $this->assertEquals(array('page' => 'index', '_format' => 'mobile.html', '_route' => 'test'), $matcher->match('/index.mobile.html'));
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\ResourceNotFoundException
     */
    public function testDefaultRequirementOfVariableDisallowsSlash()
    {
        $coll = new RouteCollection();
        $coll->add('test', new Route('/{page}.{_format}'));
<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        $matcher->match('/index.sl/ash');
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\ResourceNotFoundException
     */
    public function testDefaultRequirementOfVariableDisallowsNextSeparator()
    {
        $coll = new RouteCollection();
        $coll->add('test', new Route('/{page}.{_format}', array(), array('_format' => 'html|xml')));
<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        $matcher->match('/do.t.html');
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\ResourceNotFoundException
     */
    public function testSchemeRequirement()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo', array(), array(), array(), '', array('https')));
<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher->match('/foo');
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\ResourceNotFoundException
     */
    public function testCondition()
    {
        $coll = new RouteCollection();
        $route = new Route('/foo');
        $route->setCondition('context.getMethod() == "POST"');
        $coll->add('foo', $route);
<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher->match('/foo');
    }

    public function testRequestCondition()
    {
        $coll = new RouteCollection();
        $route = new Route('/foo/{bar}');
        $route->setCondition('request.getBaseUrl() == "/sub/front.php" and request.getPathInfo() == "/foo/bar"');
        $coll->add('foo', $route);
<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext('/sub/front.php'));
=======
        $matcher = $this->getUrlMatcher($coll, new RequestContext('/sub/front.php'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('bar' => 'bar', '_route' => 'foo'), $matcher->match('/foo/bar'));
    }

    public function testDecodeOnce()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo/{foo}'));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('foo' => 'bar%23', '_route' => 'foo'), $matcher->match('/foo/bar%2523'));
    }

    public function testCannotRelyOnPrefix()
    {
        $coll = new RouteCollection();

        $subColl = new RouteCollection();
        $subColl->add('bar', new Route('/bar'));
        $subColl->addPrefix('/prefix');
        // overwrite the pattern, so the prefix is not valid anymore for this route in the collection
        $subColl->get('bar')->setPath('/new');

        $coll->addCollection($subColl);

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_route' => 'bar'), $matcher->match('/new'));
    }

    public function testWithHost()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo/{foo}', array(), array(), array(), '{locale}.example.com'));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext('', 'GET', 'en.example.com'));
=======
        $matcher = $this->getUrlMatcher($coll, new RequestContext('', 'GET', 'en.example.com'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('foo' => 'bar', '_route' => 'foo', 'locale' => 'en'), $matcher->match('/foo/bar'));
    }

    public function testWithHostOnRouteCollection()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo/{foo}'));
        $coll->add('bar', new Route('/bar/{foo}', array(), array(), array(), '{locale}.example.net'));
        $coll->setHost('{locale}.example.com');

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext('', 'GET', 'en.example.com'));
        $this->assertEquals(array('foo' => 'bar', '_route' => 'foo', 'locale' => 'en'), $matcher->match('/foo/bar'));

        $matcher = new UrlMatcher($coll, new RequestContext('', 'GET', 'en.example.com'));
=======
        $matcher = $this->getUrlMatcher($coll, new RequestContext('', 'GET', 'en.example.com'));
        $this->assertEquals(array('foo' => 'bar', '_route' => 'foo', 'locale' => 'en'), $matcher->match('/foo/bar'));

        $matcher = $this->getUrlMatcher($coll, new RequestContext('', 'GET', 'en.example.com'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('foo' => 'bar', '_route' => 'bar', 'locale' => 'en'), $matcher->match('/bar/bar'));
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\ResourceNotFoundException
     */
    public function testWithOutHostHostDoesNotMatch()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/foo/{foo}', array(), array(), array(), '{locale}.example.com'));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext('', 'GET', 'example.com'));
=======
        $matcher = $this->getUrlMatcher($coll, new RequestContext('', 'GET', 'example.com'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher->match('/foo/bar');
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\ResourceNotFoundException
     */
    public function testPathIsCaseSensitive()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/locale', array(), array('locale' => 'EN|FR|DE')));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
=======
        $matcher = $this->getUrlMatcher($coll);
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $matcher->match('/en');
    }

    public function testHostIsCaseInsensitive()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/', array(), array('locale' => 'EN|FR|DE'), array(), '{locale}.example.com'));

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext('', 'GET', 'en.example.com'));
=======
        $matcher = $this->getUrlMatcher($coll, new RequestContext('', 'GET', 'en.example.com'));
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        $this->assertEquals(array('_route' => 'foo', 'locale' => 'en'), $matcher->match('/'));
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\NoConfigurationException
     */
    public function testNoConfiguration()
    {
        $coll = new RouteCollection();

<<<<<<< HEAD
        $matcher = new UrlMatcher($coll, new RequestContext());
        $matcher->match('/');
    }
=======
        $matcher = $this->getUrlMatcher($coll);
        $matcher->match('/');
    }

    public function testNestedCollections()
    {
        $coll = new RouteCollection();

        $subColl = new RouteCollection();
        $subColl->add('a', new Route('/a'));
        $subColl->add('b', new Route('/b'));
        $subColl->add('c', new Route('/c'));
        $subColl->addPrefix('/p');
        $coll->addCollection($subColl);

        $coll->add('baz', new Route('/{baz}'));

        $subColl = new RouteCollection();
        $subColl->add('buz', new Route('/buz'));
        $subColl->addPrefix('/prefix');
        $coll->addCollection($subColl);

        $matcher = $this->getUrlMatcher($coll);
        $this->assertEquals(array('_route' => 'a'), $matcher->match('/p/a'));
        $this->assertEquals(array('_route' => 'baz', 'baz' => 'p'), $matcher->match('/p'));
        $this->assertEquals(array('_route' => 'buz'), $matcher->match('/prefix/buz'));
    }

    /**
     * @expectedException \Symfony\Component\Routing\Exception\ResourceNotFoundException
     */
    public function testSchemeAndMethodMismatch()
    {
        $coll = new RouteCollection();
        $coll->add('foo', new Route('/', array(), array(), array(), null, array('https'), array('POST')));

        $matcher = $this->getUrlMatcher($coll);
        $matcher->match('/');
    }

    protected function getUrlMatcher(RouteCollection $routes, RequestContext $context = null)
    {
        return new UrlMatcher($routes, $context ?: new RequestContext());
    }
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
}
