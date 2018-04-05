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
use Symfony\Component\Translation\Exception\InvalidArgumentException;
use Symfony\Component\Translation\Exception\RuntimeException;

/**
 * FileDumper is an implementation of DumperInterface that dump a message catalogue to file(s).
<<<<<<< HEAD
 * Performs backup of already existing files.
=======
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
 *
 * Options:
 * - path (mandatory): the directory where the files should be saved
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
abstract class FileDumper implements DumperInterface
{
    /**
     * A template for the relative paths to files.
     *
     * @var string
     */
    protected $relativePathTemplate = '%domain%.%locale%.%extension%';

    /**
<<<<<<< HEAD
     * Make file backup before the dump.
     *
     * @var bool
     */
    private $backup = true;

    /**
=======
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     * Sets the template for the relative paths to files.
     *
     * @param string $relativePathTemplate A template for the relative paths to files
     */
    public function setRelativePathTemplate($relativePathTemplate)
    {
        $this->relativePathTemplate = $relativePathTemplate;
    }

    /**
     * Sets backup flag.
     *
     * @param bool
     */
    public function setBackup($backup)
    {
<<<<<<< HEAD
        $this->backup = $backup;
=======
        if (false !== $backup) {
            throw new \LogicException('The backup feature is no longer supported.');
        }

        // the method is only present to not break BC
        // to be deprecated in 4.1
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    }

    /**
     * {@inheritdoc}
     */
    public function dump(MessageCatalogue $messages, $options = array())
    {
        if (!array_key_exists('path', $options)) {
            throw new InvalidArgumentException('The file dumper needs a path option.');
        }

        // save a file for each domain
        foreach ($messages->getDomains() as $domain) {
<<<<<<< HEAD
            // backup
            $fullpath = $options['path'].'/'.$this->getRelativePath($domain, $messages->getLocale());
            if (file_exists($fullpath)) {
                if ($this->backup) {
                    @trigger_error('Creating a backup while dumping a message catalogue is deprecated since Symfony 3.1 and will be removed in 4.0. Use TranslationWriter::disableBackup() to disable the backup.', E_USER_DEPRECATED);
                    copy($fullpath, $fullpath.'~');
                }
            } else {
=======
            $fullpath = $options['path'].'/'.$this->getRelativePath($domain, $messages->getLocale());
            if (!file_exists($fullpath)) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
                $directory = dirname($fullpath);
                if (!file_exists($directory) && !@mkdir($directory, 0777, true)) {
                    throw new RuntimeException(sprintf('Unable to create directory "%s".', $directory));
                }
            }
            // save file
            file_put_contents($fullpath, $this->formatCatalogue($messages, $domain, $options));
        }
    }

    /**
     * Transforms a domain of a message catalogue to its string representation.
     *
     * @param MessageCatalogue $messages
     * @param string           $domain
     * @param array            $options
     *
     * @return string representation
     */
    abstract public function formatCatalogue(MessageCatalogue $messages, $domain, array $options = array());

    /**
     * Gets the file extension of the dumper.
     *
     * @return string file extension
     */
    abstract protected function getExtension();

    /**
     * Gets the relative file path using the template.
<<<<<<< HEAD
     *
     * @param string $domain The domain
     * @param string $locale The locale
     *
     * @return string The relative file path
     */
    private function getRelativePath($domain, $locale)
=======
     */
    private function getRelativePath(string $domain, string $locale): string
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
    {
        return strtr($this->relativePathTemplate, array(
            '%domain%' => $domain,
            '%locale%' => $locale,
            '%extension%' => $this->getExtension(),
        ));
    }
}
