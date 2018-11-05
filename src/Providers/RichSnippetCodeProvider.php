<?php

namespace TrustedShopsRichSnippet\Providers;

use IO\Services\CustomerService;
use IO\Services\OrderService;
use Plenty\Modules\Basket\Contracts\BasketRepositoryContract;
use Plenty\Modules\Basket\Models\Basket;
use Plenty\Modules\Frontend\Services\AccountService;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class RichSnippetCodeProvider
{
  public function call(Twig $twig)
  {
    return $twig->render('TrustedShopsRichSnippet::RichSnippetCode');
  }
}
