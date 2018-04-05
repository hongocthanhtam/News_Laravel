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

=======
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        if (0 === strpos($pathinfo, '/a')) {
            // a_first
            if ('/a/11' === $pathinfo) {
                return array('_route' => 'a_first');
            }

            // a_second
            if ('/a/22' === $pathinfo) {
                return array('_route' => 'a_second');
            }

            // a_third
            if ('/a/333' === $pathinfo) {
                return array('_route' => 'a_third');
            }

        }

        // a_wildcard
<<<<<<< HEAD
        if (preg_match('#^/(?P<param>[^/]++)$#s', $pathinfo, $matches)) {
=======
        if (preg_match('#^/(?P<param>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'a_wildcard')), array ());
        }

        if (0 === strpos($pathinfo, '/a')) {
            // a_fourth
            if ('/a/44' === $trimmedPathinfo) {
                $ret = array('_route' => 'a_fourth');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_a_fourth;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'a_fourth'));
                }

                return $ret;
            }
<<<<<<< HEAD
=======
            not_a_fourth:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

            // a_fifth
            if ('/a/55' === $trimmedPathinfo) {
                $ret = array('_route' => 'a_fifth');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_a_fifth;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'a_fifth'));
                }

                return $ret;
            }
<<<<<<< HEAD
=======
            not_a_fifth:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

            // a_sixth
            if ('/a/66' === $trimmedPathinfo) {
                $ret = array('_route' => 'a_sixth');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_a_sixth;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'a_sixth'));
                }

                return $ret;
            }
<<<<<<< HEAD
=======
            not_a_sixth:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        }

        // nested_wildcard
<<<<<<< HEAD
        if (0 === strpos($pathinfo, '/nested') && preg_match('#^/nested/(?P<param>[^/]++)$#s', $pathinfo, $matches)) {
=======
        if (0 === strpos($pathinfo, '/nested') && preg_match('#^/nested/(?P<param>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nested_wildcard')), array ());
        }

        if (0 === strpos($pathinfo, '/nested/group')) {
            // nested_a
            if ('/nested/group/a' === $trimmedPathinfo) {
                $ret = array('_route' => 'nested_a');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_nested_a;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'nested_a'));
                }

                return $ret;
            }
<<<<<<< HEAD
=======
            not_nested_a:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

            // nested_b
            if ('/nested/group/b' === $trimmedPathinfo) {
                $ret = array('_route' => 'nested_b');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_nested_b;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'nested_b'));
                }

                return $ret;
            }
<<<<<<< HEAD
=======
            not_nested_b:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

            // nested_c
            if ('/nested/group/c' === $trimmedPathinfo) {
                $ret = array('_route' => 'nested_c');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_nested_c;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'nested_c'));
                }

                return $ret;
            }
<<<<<<< HEAD
=======
            not_nested_c:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        }

        elseif (0 === strpos($pathinfo, '/slashed/group')) {
            // slashed_a
            if ('/slashed/group' === $trimmedPathinfo) {
                $ret = array('_route' => 'slashed_a');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_slashed_a;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'slashed_a'));
                }

                return $ret;
            }
<<<<<<< HEAD
=======
            not_slashed_a:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

            // slashed_b
            if ('/slashed/group/b' === $trimmedPathinfo) {
                $ret = array('_route' => 'slashed_b');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_slashed_b;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'slashed_b'));
                }

                return $ret;
            }
<<<<<<< HEAD
=======
            not_slashed_b:
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

            // slashed_c
            if ('/slashed/group/c' === $trimmedPathinfo) {
                $ret = array('_route' => 'slashed_c');
<<<<<<< HEAD
                if (substr($pathinfo, -1) !== '/') {
=======
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_slashed_c;
                } else {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'slashed_c'));
                }

                return $ret;
            }
<<<<<<< HEAD

=======
            not_slashed_c:

        }

        if ('/' === $pathinfo) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
