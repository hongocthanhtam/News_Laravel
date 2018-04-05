<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

class MethodNotFoundException extends DoubleException
{
    /**
<<<<<<< HEAD
     * @var string
=======
     * @var string|object
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    private $classname;

    /**
     * @var string
     */
    private $methodName;

    /**
     * @var array
     */
    private $arguments;

    /**
     * @param string $message
<<<<<<< HEAD
     * @param string $classname
=======
     * @param string|object $classname
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     * @param string $methodName
     * @param null|Argument\ArgumentsWildcard|array $arguments
     */
    public function __construct($message, $classname, $methodName, $arguments = null)
    {
        parent::__construct($message);

        $this->classname  = $classname;
        $this->methodName = $methodName;
        $this->arguments = $arguments;
    }

    public function getClassname()
    {
        return $this->classname;
    }

    public function getMethodName()
    {
        return $this->methodName;
    }

    public function getArguments()
    {
        return $this->arguments;
    }
}
