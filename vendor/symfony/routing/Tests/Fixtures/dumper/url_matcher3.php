<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcher extends Symfony\Component\Routing\Matcher\UrlMatcher
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
        if (0 === strpos($pathinfo, '/rootprefix')) {
            // static
            if ('/rootprefix/test' === $pathinfo) {
                return array('_route' => 'static');
            }

            // dynamic
<<<<<<< HEAD
            if (preg_match('#^/rootprefix/(?P<var>[^/]++)$#s', $pathinfo, $matches)) {
=======
            if (preg_match('#^/rootprefix/(?P<var>[^/]++)$#sD', $pathinfo, $matches)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dynamic')), array ());
            }

        }

        // with-condition
        if ('/with-condition' === $pathinfo && ($context->getMethod() == "GET")) {
            return array('_route' => 'with-condition');
        }

<<<<<<< HEAD
=======
        if ('/' === $pathinfo) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
