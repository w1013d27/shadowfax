<?php

namespace HuangYi\Shadowfax\Contracts;

interface ServerFactory
{
    /**
     * Set the server host.
     *
     * @param  string  $host
     * @return $this
     */
    public function setHost(string $host);

    /**
     * Set the server port.
     *
     * @param  int  $port
     * @return $this
     */
    public function setPort(int $port);

    /**
     * Set the server mode.
     *
     * @param  int  $mode
     * @return $this
     */
    public function setMode(int $mode);

    /**
     * Set the server settings.
     *
     * @param  array  $settings
     * @return $this
     */
    public function setSettings(array $settings);

    /**
     * Create a server instance.
     *
     * @return \Swoole\Server
     */
    public function create();
}