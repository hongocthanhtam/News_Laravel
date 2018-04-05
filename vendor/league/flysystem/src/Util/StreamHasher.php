<?php

namespace League\Flysystem\Util;

class StreamHasher
{
    /**
     * @var string
     */
    private $algo;

    /**
     * StreamHasher constructor.
     *
     * @param string $algo
     */
    public function __construct($algo)
    {
        $this->algo = $algo;
    }

    /**
<<<<<<< HEAD
     * @param $resource
=======
     * @param resource $resource
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     *
     * @return string
     */
    public function hash($resource)
    {
        rewind($resource);
        $context = hash_init($this->algo);
        hash_update_stream($context, $resource);
        fclose($resource);

        return hash_final($context);
    }
}
