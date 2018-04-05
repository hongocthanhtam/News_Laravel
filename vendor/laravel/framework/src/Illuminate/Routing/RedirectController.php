<?php

namespace Illuminate\Routing;

use Illuminate\Http\RedirectResponse;

class RedirectController extends Controller
{
    /**
     * Invoke the controller method.
     *
<<<<<<< HEAD
     * @param  string  $destination
     * @param  int  $status
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke($destination, $status = 301)
    {
=======
     * @param  array  $args
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(...$args)
    {
        list($destination, $status) = array_slice($args, -2);

>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        return new RedirectResponse($destination, $status);
    }
}
