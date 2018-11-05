<?php  // strict

namespace TrustedShopsRichSnippet\Providers;

use IO\Extensions\TwigIOExtension;
use IO\Extensions\TwigServiceProvider;
use IO\Services\ItemLoader\Contracts\ItemLoaderFactory;
use IO\Services\ItemLoader\Extensions\TwigLoaderPresets;
use IO\Services\ItemLoader\Factories\ItemLoaderFactoryES;
use IO\Services\NotificationService;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

/**
 * Class IOServiceProvider
 * @package IO\Providers
 */

 class TrustedShopsRichSnippetServiceProvider extends ServiceProvider
 {
   /**
    * Register the core functions
    */
    public function register()
    {
    }

    /**
     * boot twig extensions and services
     */
    public function boot(Twig $twig)
    {
    }
 }
