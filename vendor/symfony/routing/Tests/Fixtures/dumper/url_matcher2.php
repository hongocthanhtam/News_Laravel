<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcher extends Symfony\Component\Routing\Tests\Fixtures\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
<<<<<<< HEAD
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();
=======
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

<<<<<<< HEAD

        if (0 === strpos($pathinfo, '/foo')) {
            // foo
            if (preg_match('#^/foo/(?P<bar>baz|symfony)$#s', $pathinfo, $matches)) {
=======
        if (0 === strpos($pathinfo, '/foo')) {
            // foo
            if (preg_match('#^/foo/(?P<bar>baz|symfony)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'foo')), array (  'def' => 'test',));
            }

            // foofoo
            if ('/foofoo' === $pathinfo) {
                return array (  'def' => 'test',  '_route' => 'foofoo',);
            }

        }

        elseif (0 === strpos($pathinfo, '/bar')) {
            // bar
<<<<<<< HEAD
            if (preg_match('#^/bar/(?P<foo>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_bar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bar')), array ());
=======
            if (preg_match('#^/bar/(?P<foo>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'bar')), array ());
                if (!in_array($canonicalMethod, array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bar;
                }

                return $ret;
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            }
            not_bar:

            // barhead
<<<<<<< HEAD
            if (0 === strpos($pathinfo, '/barhead') && preg_match('#^/barhead/(?P<foo>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_barhead;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'barhead')), array ());
=======
            if (0 === strpos($pathinfo, '/barhead') && preg_match('#^/barhead/(?P<foo>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'barhead')), array ());
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_barhead;
                }

                return $ret;
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            }
            not_barhead:

        }

        elseif (0 === strpos($pathinfo, '/test')) {
            if (0 === strpos($pathinfo, '/test/baz')) {
                // baz
                if ('/test/baz' === $pathinfo) {
                    return array('_route' => 'baz');
                }

                // baz2
                if ('/test/baz.html' === $pathinfo) {
                    return array('_route' => 'baz2');
                }

                // baz3
                if ('/test/baz3' === $trimmedPathinfo) {
                    $ret = array('_route' => 'baz3');
<<<<<<< HEAD
                    if (substr($pathinfo, -1) !== '/') {
=======
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_baz3;
                    } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'baz3'));
                    }

                    return $ret;
                }
<<<<<<< HEAD
=======
                not_baz3:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

            }

            // baz4
<<<<<<< HEAD
            if (preg_match('#^/test/(?P<foo>[^/]++)/?$#s', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'baz4')), array ());
                if (substr($pathinfo, -1) !== '/') {
=======
            if (preg_match('#^/test/(?P<foo>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'baz4')), array ());
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_baz4;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'baz4'));
                }

                return $ret;
            }
<<<<<<< HEAD

            // baz5
            if (preg_match('#^/test/(?P<foo>[^/]++)/$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_baz5;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'baz5')), array ());
=======
            not_baz4:

            // baz5
            if (preg_match('#^/test/(?P<foo>[^/]++)/$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'baz5')), array ());
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_baz5;
                }

                return $ret;
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            }
            not_baz5:

            // baz.baz6
<<<<<<< HEAD
            if (preg_match('#^/test/(?P<foo>[^/]++)/$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_bazbaz6;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'baz.baz6')), array ());
=======
            if (preg_match('#^/test/(?P<foo>[^/]++)/$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'baz.baz6')), array ());
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_bazbaz6;
                }

                return $ret;
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            }
            not_bazbaz6:

        }

        // quoter
<<<<<<< HEAD
        if (preg_match('#^/(?P<quoter>[\']+)$#s', $pathinfo, $matches)) {
=======
        if (preg_match('#^/(?P<quoter>[\']+)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'quoter')), array ());
        }

        // space
        if ('/spa ce' === $pathinfo) {
            return array('_route' => 'space');
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/a/b\'b')) {
                // foo1
<<<<<<< HEAD
                if (preg_match('#^/a/b\'b/(?P<foo>[^/]++)$#s', $pathinfo, $matches)) {
=======
                if (preg_match('#^/a/b\'b/(?P<foo>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'foo1')), array ());
                }

                // bar1
<<<<<<< HEAD
                if (preg_match('#^/a/b\'b/(?P<bar>[^/]++)$#s', $pathinfo, $matches)) {
=======
                if (preg_match('#^/a/b\'b/(?P<bar>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bar1')), array ());
                }

            }

            // overridden
<<<<<<< HEAD
            if (preg_match('#^/a/(?P<var>.*)$#s', $pathinfo, $matches)) {
=======
            if (preg_match('#^/a/(?P<var>.*)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'overridden')), array ());
            }

            if (0 === strpos($pathinfo, '/a/b\'b')) {
                // foo2
<<<<<<< HEAD
                if (preg_match('#^/a/b\'b/(?P<foo1>[^/]++)$#s', $pathinfo, $matches)) {
=======
                if (preg_match('#^/a/b\'b/(?P<foo1>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'foo2')), array ());
                }

                // bar2
<<<<<<< HEAD
                if (preg_match('#^/a/b\'b/(?P<bar1>[^/]++)$#s', $pathinfo, $matches)) {
=======
                if (preg_match('#^/a/b\'b/(?P<bar1>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bar2')), array ());
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/multi')) {
            // helloWorld
<<<<<<< HEAD
            if (0 === strpos($pathinfo, '/multi/hello') && preg_match('#^/multi/hello(?:/(?P<who>[^/]++))?$#s', $pathinfo, $matches)) {
=======
            if (0 === strpos($pathinfo, '/multi/hello') && preg_match('#^/multi/hello(?:/(?P<who>[^/]++))?$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'helloWorld')), array (  'who' => 'World!',));
            }

            // hey
            if ('/multi/hey' === $trimmedPathinfo) {
                $ret = array('_route' => 'hey');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_hey;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'hey'));
                }

                return $ret;
            }
<<<<<<< HEAD
=======
            not_hey:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

            // overridden2
            if ('/multi/new' === $pathinfo) {
                return array('_route' => 'overridden2');
            }

        }

        // foo3
<<<<<<< HEAD
        if (preg_match('#^/(?P<_locale>[^/]++)/b/(?P<foo>[^/]++)$#s', $pathinfo, $matches)) {
=======
        if (preg_match('#^/(?P<_locale>[^/]++)/b/(?P<foo>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'foo3')), array ());
        }

        // bar3
<<<<<<< HEAD
        if (preg_match('#^/(?P<_locale>[^/]++)/b/(?P<bar>[^/]++)$#s', $pathinfo, $matches)) {
=======
        if (preg_match('#^/(?P<_locale>[^/]++)/b/(?P<bar>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bar3')), array ());
        }

        if (0 === strpos($pathinfo, '/aba')) {
            // ababa
            if ('/ababa' === $pathinfo) {
                return array('_route' => 'ababa');
            }

            // foo4
<<<<<<< HEAD
            if (preg_match('#^/aba/(?P<foo>[^/]++)$#s', $pathinfo, $matches)) {
=======
            if (preg_match('#^/aba/(?P<foo>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'foo4')), array ());
            }

        }

        $host = $context->getHost();

<<<<<<< HEAD
        if (preg_match('#^a\\.example\\.com$#si', $host, $hostMatches)) {
=======
        if (preg_match('#^a\\.example\\.com$#sDi', $host, $hostMatches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            // route1
            if ('/route1' === $pathinfo) {
                return array('_route' => 'route1');
            }

            // route2
            if ('/c2/route2' === $pathinfo) {
                return array('_route' => 'route2');
            }

        }

<<<<<<< HEAD
        if (preg_match('#^b\\.example\\.com$#si', $host, $hostMatches)) {
=======
        if (preg_match('#^b\\.example\\.com$#sDi', $host, $hostMatches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            // route3
            if ('/c2/route3' === $pathinfo) {
                return array('_route' => 'route3');
            }

        }

<<<<<<< HEAD
        if (preg_match('#^a\\.example\\.com$#si', $host, $hostMatches)) {
=======
        if (preg_match('#^a\\.example\\.com$#sDi', $host, $hostMatches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            // route4
            if ('/route4' === $pathinfo) {
                return array('_route' => 'route4');
            }

        }

<<<<<<< HEAD
        if (preg_match('#^c\\.example\\.com$#si', $host, $hostMatches)) {
=======
        if (preg_match('#^c\\.example\\.com$#sDi', $host, $hostMatches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            // route5
            if ('/route5' === $pathinfo) {
                return array('_route' => 'route5');
            }

        }

        // route6
        if ('/route6' === $pathinfo) {
            return array('_route' => 'route6');
        }

<<<<<<< HEAD
        if (preg_match('#^(?P<var1>[^\\.]++)\\.example\\.com$#si', $host, $hostMatches)) {
=======
        if (preg_match('#^(?P<var1>[^\\.]++)\\.example\\.com$#sDi', $host, $hostMatches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            if (0 === strpos($pathinfo, '/route1')) {
                // route11
                if ('/route11' === $pathinfo) {
                    return $this->mergeDefaults(array_replace($hostMatches, array('_route' => 'route11')), array ());
                }

                // route12
                if ('/route12' === $pathinfo) {
                    return $this->mergeDefaults(array_replace($hostMatches, array('_route' => 'route12')), array (  'var1' => 'val',));
                }

                // route13
<<<<<<< HEAD
                if (0 === strpos($pathinfo, '/route13') && preg_match('#^/route13/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
=======
                if (0 === strpos($pathinfo, '/route13') && preg_match('#^/route13/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return $this->mergeDefaults(array_replace($hostMatches, $matches, array('_route' => 'route13')), array ());
                }

                // route14
<<<<<<< HEAD
                if (0 === strpos($pathinfo, '/route14') && preg_match('#^/route14/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
=======
                if (0 === strpos($pathinfo, '/route14') && preg_match('#^/route14/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return $this->mergeDefaults(array_replace($hostMatches, $matches, array('_route' => 'route14')), array (  'var1' => 'val',));
                }

            }

        }

<<<<<<< HEAD
        if (preg_match('#^c\\.example\\.com$#si', $host, $hostMatches)) {
            // route15
            if (0 === strpos($pathinfo, '/route15') && preg_match('#^/route15/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
=======
        if (preg_match('#^c\\.example\\.com$#sDi', $host, $hostMatches)) {
            // route15
            if (0 === strpos($pathinfo, '/route15') && preg_match('#^/route15/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'route15')), array ());
            }

        }

        // route16
<<<<<<< HEAD
        if (0 === strpos($pathinfo, '/route16') && preg_match('#^/route16/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
=======
        if (0 === strpos($pathinfo, '/route16') && preg_match('#^/route16/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'route16')), array (  'var1' => 'val',));
        }

        // route17
        if ('/route17' === $pathinfo) {
            return array('_route' => 'route17');
        }

        // a
        if ('/a/a...' === $pathinfo) {
            return array('_route' => 'a');
        }

        if (0 === strpos($pathinfo, '/a/b')) {
            // b
<<<<<<< HEAD
            if (preg_match('#^/a/b/(?P<var>[^/]++)$#s', $pathinfo, $matches)) {
=======
            if (preg_match('#^/a/b/(?P<var>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'b')), array ());
            }

            // c
<<<<<<< HEAD
            if (0 === strpos($pathinfo, '/a/b/c') && preg_match('#^/a/b/c/(?P<var>[^/]++)$#s', $pathinfo, $matches)) {
=======
            if (0 === strpos($pathinfo, '/a/b/c') && preg_match('#^/a/b/c/(?P<var>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'c')), array ());
            }

        }

        // secure
        if ('/secure' === $pathinfo) {
            $ret = array('_route' => 'secure');
            $requiredSchemes = array (  'https' => 0,);
<<<<<<< HEAD
            if (!isset($requiredSchemes[$scheme])) {
=======
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_secure;
                }

>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return array_replace($ret, $this->redirect($rawPathinfo, 'secure', key($requiredSchemes)));
            }

            return $ret;
        }
<<<<<<< HEAD
=======
        not_secure:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        // nonsecure
        if ('/nonsecure' === $pathinfo) {
            $ret = array('_route' => 'nonsecure');
            $requiredSchemes = array (  'http' => 0,);
<<<<<<< HEAD
            if (!isset($requiredSchemes[$scheme])) {
=======
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_nonsecure;
                }

>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return array_replace($ret, $this->redirect($rawPathinfo, 'nonsecure', key($requiredSchemes)));
            }

            return $ret;
        }
<<<<<<< HEAD
=======
        not_nonsecure:

        if ('/' === $pathinfo) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
