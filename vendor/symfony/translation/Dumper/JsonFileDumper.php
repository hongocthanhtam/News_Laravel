<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Dumper;

use Symfony\Component\Translation\MessageCatalogue;

/**
 * JsonFileDumper generates an json formatted string representation of a message catalogue.
 *
 * @author singles
 */
class JsonFileDumper extends FileDumper
{
    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue $messages, $domain, array $options = array())
    {
        if (isset($options['json_encoding'])) {
            $flags = $options['json_encoding'];
        } else {
<<<<<<< HEAD
            $flags = defined('JSON_PRETTY_PRINT') ? JSON_PRETTY_PRINT : 0;
=======
            $flags = JSON_PRETTY_PRINT;
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
        }

        return json_encode($messages->all($domain), $flags);
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'json';
    }
}
