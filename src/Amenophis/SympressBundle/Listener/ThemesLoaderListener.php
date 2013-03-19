<?php

namespace Amenophis\SympressBundle\Listener;

use Symfony\Component\HttpKernel\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Event\KernelEvent;
use Symfony\Component\Finder\Finder;

class ThemesLoaderListener
{
    private $dir;

    private $themes = array();

    public function __construct($web_dir)
    {
        $this->dir = $web_dir.'/../web/themes';
    }

    public function onKernelRequest(KernelEvent $event)
    {
        $finder = new Finder();
        $finder->directories()->in($this->dir);

        foreach ($finder as $dir) {
            if(true)
            {
                $this->themes[] = $dir;
            }
        }
    }
}