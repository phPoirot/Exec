<?php
namespace Poirot\Exec\Interfaces;

use Poirot\Std\Interfaces\ipOptionsProvider;
use Poirot\Exec\Interfaces\Process\iExecProcess;
use Poirot\Std\Interfaces\Struct\iEntityData;

interface ipExec extends ipOptionsProvider
{
    /**
     * The initial absolute working dir for the commands
     *
     * @param string $cwd
     *
     * @return $this
     */
    function setCwd($cwd);

    /**
     * Path To CWD of execution commands.
     *
     * @return string
     */
    function getCwd();

    /**
     * Pipe Descriptor
     *
     * @return iExecDescriptor
     */
    function descriptor();

    /**
     * Default Environment Variables
     *
     * - An Entity with the environment variables for the command
     *   that will be runAn array with the environment variables
     *   for the command that will be run
     *
     * @return iEntityData
     */
    function env();

    /**
     * Execute a command
     *
     * @param string      $cmd
     * @param null|string $cwd
     *
     * @return iExecProcess
     */
    function exec($cmd, $cwd = null);
}
