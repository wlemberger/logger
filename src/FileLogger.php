<?php

namespace Wlemberger\Logger;

class FileLogger implements ILogger
{

    private $handle = null;
    public function __construct(string $filename)
    {
        $this->handle = fopen($filename, 'a');
    }
    public function logEntry(string $line): void
    {
        fwrite($this->handle, $line . "\n");
    }

    public function __destruct()
    {
       fclose($this->handle);
    }
}