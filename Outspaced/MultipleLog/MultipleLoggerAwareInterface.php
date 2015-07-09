<?php

namespace Outspaced\MultipleLog;

/**
 * Describes a logger-aware instance.
 */
interface MultipleLoggerAwareInterface
{
    /**
     * Adds a logger instance the to an array property on the object.
     *
     * @param LoggerInterface $logger
     */
    public function addLogger(LoggerInterface $logger);

    /**
     * Removes the passed logger instance if set
     *
     * @param LoggerInterface $logger
     */
    public function removeLogger(LoggerInterface $logger);
}
