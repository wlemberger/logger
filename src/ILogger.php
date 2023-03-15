<?php
namespace Wlemberger\Logger;

interface ILogger
{
    public function logEntry(string $line): void;
}