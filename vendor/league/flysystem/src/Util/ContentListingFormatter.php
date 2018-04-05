<?php

namespace League\Flysystem\Util;

use League\Flysystem\Util;

/**
 * @internal
 */
class ContentListingFormatter
{
    /**
     * @var string
     */
    private $directory;
    /**
     * @var bool
     */
    private $recursive;

    /**
     * @param string $directory
     * @param bool   $recursive
     */
    public function __construct($directory, $recursive)
    {
        $this->directory = $directory;
        $this->recursive = $recursive;
    }

    /**
     * Format contents listing.
     *
     * @param array $listing
     *
     * @return array
     */
    public function formatListing(array $listing)
    {
        $listing = array_values(
            array_map(
                [$this, 'addPathInfo'],
                array_filter($listing, [$this, 'isEntryOutOfScope'])
            )
        );

        return $this->sortListing($listing);
    }

    private function addPathInfo(array $entry)
    {
        return $entry + Util::pathinfo($entry['path']);
    }

    /**
     * Determine if the entry is out of scope.
     *
     * @param array $entry
     *
     * @return bool
     */
    private function isEntryOutOfScope(array $entry)
    {
        if (empty($entry['path']) && $entry['path'] !== '0') {
            return false;
        }

        if ($this->recursive) {
            return $this->residesInDirectory($entry);
        }

        return $this->isDirectChild($entry);
    }

    /**
     * Check if the entry resides within the parent directory.
     *
<<<<<<< HEAD
     * @param $entry
=======
     * @param array $entry
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     *
     * @return bool
     */
    private function residesInDirectory(array $entry)
    {
        if ($this->directory === '') {
            return true;
        }

        return strpos($entry['path'], $this->directory . '/') === 0;
    }

    /**
     * Check if the entry is a direct child of the directory.
     *
<<<<<<< HEAD
     * @param $entry
=======
     * @param array $entry
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     *
     * @return bool
     */
    private function isDirectChild(array $entry)
    {
        return Util::dirname($entry['path']) === $this->directory;
    }

    /**
     * @param array $listing
     *
     * @return array
     */
    private function sortListing(array $listing)
    {
<<<<<<< HEAD
        usort(
            $listing,
            function ($a, $b) {
                return strcasecmp($a['path'], $b['path']);
            }
        );
=======
        usort($listing, function ($a, $b) {
            return strcasecmp($a['path'], $b['path']);
        });
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a

        return $listing;
    }
}
