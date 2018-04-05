<?php

namespace League\Flysystem;

class File extends Handler
{
    /**
     * Check whether the file exists.
     *
     * @return bool
     */
    public function exists()
    {
        return $this->filesystem->has($this->path);
    }

    /**
     * Read the file.
     *
<<<<<<< HEAD
     * @return string file contents
=======
     * @return string|false file contents
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    public function read()
    {
        return $this->filesystem->read($this->path);
    }

    /**
     * Read the file as a stream.
     *
<<<<<<< HEAD
     * @return resource file stream
=======
     * @return resource|false file stream
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    public function readStream()
    {
        return $this->filesystem->readStream($this->path);
    }

    /**
     * Write the new file.
     *
     * @param string $content
     *
     * @return bool success boolean
     */
    public function write($content)
    {
        return $this->filesystem->write($this->path, $content);
    }

    /**
     * Write the new file using a stream.
     *
     * @param resource $resource
     *
     * @return bool success boolean
     */
    public function writeStream($resource)
    {
        return $this->filesystem->writeStream($this->path, $resource);
    }

    /**
     * Update the file contents.
     *
     * @param string $content
     *
     * @return bool success boolean
     */
    public function update($content)
    {
        return $this->filesystem->update($this->path, $content);
    }

    /**
     * Update the file contents with a stream.
     *
     * @param resource $resource
     *
     * @return bool success boolean
     */
    public function updateStream($resource)
    {
        return $this->filesystem->updateStream($this->path, $resource);
    }

    /**
     * Create the file or update if exists.
     *
     * @param string $content
     *
     * @return bool success boolean
     */
    public function put($content)
    {
        return $this->filesystem->put($this->path, $content);
    }

    /**
     * Create the file or update if exists using a stream.
     *
     * @param resource $resource
     *
     * @return bool success boolean
     */
    public function putStream($resource)
    {
        return $this->filesystem->putStream($this->path, $resource);
    }

    /**
     * Rename the file.
     *
     * @param string $newpath
     *
     * @return bool success boolean
     */
    public function rename($newpath)
    {
        if ($this->filesystem->rename($this->path, $newpath)) {
            $this->path = $newpath;

            return true;
        }

        return false;
    }

    /**
     * Copy the file.
     *
     * @param string $newpath
     *
     * @return File|false new file or false
     */
    public function copy($newpath)
    {
        if ($this->filesystem->copy($this->path, $newpath)) {
            return new File($this->filesystem, $newpath);
        }

        return false;
    }

    /**
     * Get the file's timestamp.
     *
<<<<<<< HEAD
     * @return int unix timestamp
=======
     * @return string|false The timestamp or false on failure.
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    public function getTimestamp()
    {
        return $this->filesystem->getTimestamp($this->path);
    }

    /**
     * Get the file's mimetype.
     *
<<<<<<< HEAD
     * @return string mimetime
=======
     * @return string|false The file mime-type or false on failure.
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    public function getMimetype()
    {
        return $this->filesystem->getMimetype($this->path);
    }

    /**
     * Get the file's visibility.
     *
<<<<<<< HEAD
     * @return string visibility
=======
     * @return string|false The visibility (public|private) or false on failure.
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    public function getVisibility()
    {
        return $this->filesystem->getVisibility($this->path);
    }

    /**
     * Get the file's metadata.
     *
<<<<<<< HEAD
     * @return array
=======
     * @return array|false The file metadata or false on failure.
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    public function getMetadata()
    {
        return $this->filesystem->getMetadata($this->path);
    }

    /**
     * Get the file size.
     *
<<<<<<< HEAD
     * @return int file size
=======
     * @return int|false The file size or false on failure.
>>>>>>> eceea602dbabbbcf9d111bb13e5cb759a42b177a
     */
    public function getSize()
    {
        return $this->filesystem->getSize($this->path);
    }

    /**
     * Delete the file.
     *
     * @return bool success boolean
     */
    public function delete()
    {
        return $this->filesystem->delete($this->path);
    }
}
