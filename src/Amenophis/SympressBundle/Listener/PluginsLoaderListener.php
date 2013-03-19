<?php

namespace Amenophis\SympressBundle\Listener;

use Symfony\Component\HttpKernel\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Event\KernelEvent;
use Symfony\Component\Finder\Finder;

class PluginsLoaderListener
{
    private $dir;

    private $plugins = array();

    public function __construct($web_dir)
    {
        $this->dir = $web_dir.'/../web/plugins';
    }

    public function onKernelRequest(KernelEvent $event)
    {
        $finder = new Finder();
        $finder->directories()->in($this->dir);

        foreach ($finder as $dir) {
            if(true)
            {
                $this->plugins[] = $dir;
            }
        }
    }
}