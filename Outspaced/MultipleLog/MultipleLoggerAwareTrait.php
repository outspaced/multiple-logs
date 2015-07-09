<?php

namespace Outspaced\MultipleLog;

use Psr\Log\LoggerInterface;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait MultipleLoggerAwareTrait
{
    /**
     * Array of logger instances (all must implement LoggerInterface).
     *
     * @var array
     */
    protected $loggers;

    /**
     * Adds a logger.
     *
     * @param  LoggerInterface $logger
     * @return self
     */
    public function addLogger(LoggerInterface $logger)
    {
        $this->loggers[] = $logger;

        return $this;
    }

    /**
     * Removes a logger if present
     *
     * @param  LoggerInterface $logger
     * @return self
     */
    public function removeLogger(LoggerInterface $logger)
    {
        $key = array_search($logger, $this->loggers);

        // Remove key and reindex
        if ($key !== false) {
            unset($this->loggers[$key]);
            $this->loggers = array_values($this->loggers);
        }

        return $this;
    }
}
