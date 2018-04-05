<?php

namespace League\Flysystem\Adapter;

class Ftpd extends Ftp
{
    /**
     * @inheritdoc
     */
    public function getMetadata($path)
    {
        if ($path === '') {
            return ['type' => 'dir', 'path' => ''];
        }

<<<<<<< HEAD
        if (! ($object = ftp_raw($this->getConnection(), 'STAT ' . $path)) || count($object) < 3) {
=======
        if ( ! ($object = ftp_raw($this->getConnection(), 'STAT ' . $path)) || count($object) < 3) {
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
            return false;
        }

        if (substr($object[1], 0, 5) === "ftpd:") {
            return false;
        }

        return $this->normalizeObject($object[1], '');
    }

    /**
     * @inheritdoc
     */
    protected function listDirectoryContents($directory, $recursive = true)
    {
        $listing = ftp_rawlist($this->getConnection(), $directory, $recursive);

        if ($listing === false || ( ! empty($listing) && substr($listing[0], 0, 5) === "ftpd:")) {
            return [];
        }

        return $this->normalizeListing($listing, $directory);
    }
}
