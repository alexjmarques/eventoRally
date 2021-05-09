<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\AdminSecurityController::login'], null, null, null, false, false, null]],
            '/admin/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\AdminSecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
            '/checkout/gerar/sessao' => [[['_route' => 'checkout_gerar_sessao', '_controller' => 'App\\Controller\\CheckoutController::generateSession'], null, ['POST' => 0], null, false, false, null]],
            '/checkout/notification/retorno' => [[['_route' => 'checkout_notification', '_controller' => 'App\\Controller\\CheckoutController::notification'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
            '/cliente' => [[['_route' => 'cliente_index', '_controller' => 'App\\Controller\\ClienteController::index'], null, ['GET' => 0], null, true, false, null]],
            '/cliente/new' => [[['_route' => 'cliente_new', '_controller' => 'App\\Controller\\ClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login' => [[['_route' => 'cliente_login', '_controller' => 'App\\Controller\\ClienteSecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'cliente_logout', '_controller' => 'App\\Controller\\ClienteSecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
            '/admin/expedicao' => [[['_route' => 'evento_index', '_controller' => 'App\\Controller\\EventoController::index'], null, ['GET' => 0], null, true, false, null]],
            '/admin/expedicao/novo' => [[['_route' => 'evento_new', '_controller' => 'App\\Controller\\EventoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/' => [[['_route' => 'site', '_controller' => 'App\\Controller\\SiteController::index'], null, ['GET' => 0], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/c(?'
                        .'|heckout/(?'
                            .'|([^/]++)(*:193)'
                            .'|resultado/([^/]++)(*:219)'
                        .')'
                        .'|liente/([^/]++)(?'
                            .'|(*:246)'
                            .'|/edit(?'
                                .'|(*:262)'
                                .'|/dados\\-(?'
                                    .'|medico(*:287)'
                                    .'|veiculo(*:302)'
                                .')'
                            .')'
                        .')'
                        .'|omprar/([^/]++)(?'
                            .'|(*:331)'
                            .'|/(?'
                                .'|resumo(*:349)'
                                .'|pagamento(*:366)'
                            .')'
                            .'|(?:/([^/]++))?(*:389)'
                        .')'
                    .')'
                    .'|/admin/expedicao/(?'
                        .'|([^/]++)(?'
                            .'|(*:430)'
                            .'|/editar(*:445)'
                            .'|(*:453)'
                        .')'
                        .'|deletar\\-imagem/([^/]++)(*:486)'
                    .')'
                    .'|/expedicao/([^/]++)(*:514)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            193 => [[['_route' => 'checkout_index', '_controller' => 'App\\Controller\\CheckoutController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            219 => [[['_route' => 'checkout_resultado', '_controller' => 'App\\Controller\\CheckoutController::resultado'], ['id'], ['GET' => 0], null, false, true, null]],
            246 => [[['_route' => 'cliente_show', '_controller' => 'App\\Controller\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            262 => [[['_route' => 'cliente_edit', '_controller' => 'App\\Controller\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            287 => [[['_route' => 'cliente_edit_dados_medico', '_controller' => 'App\\Controller\\ClienteController::editDadosMedico'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            302 => [[['_route' => 'cliente_edit_dados_veiculo', '_controller' => 'App\\Controller\\ClienteController::editDadosVeiculo'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            331 => [[['_route' => 'evento_show_site', '_controller' => 'App\\Controller\\SiteController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
            349 => [[['_route' => 'evento_showresumo_site', '_controller' => 'App\\Controller\\SiteController::showresumo'], ['slug'], ['GET' => 0], null, false, false, null]],
            366 => [[['_route' => 'evento_showpagamento_site', '_controller' => 'App\\Controller\\SiteController::showpagamento'], ['slug'], ['GET' => 0], null, false, false, null]],
            389 => [[['_route' => 'comprar', 'situacao' => 0, '_controller' => 'App\\Controller\\SiteController::comprar'], ['evento', 'situacao'], null, null, false, true, null]],
            430 => [[['_route' => 'evento_show', '_controller' => 'App\\Controller\\EventoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            445 => [[['_route' => 'evento_edit', '_controller' => 'App\\Controller\\EventoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            453 => [[['_route' => 'evento_delete', '_controller' => 'App\\Controller\\EventoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            486 => [[['_route' => 'evento_imagem_delete', '_controller' => 'App\\Controller\\EventoController::deleteImagem'], ['id'], ['DELETE' => 0], null, false, true, null]],
            514 => [[['_route' => 'evento_listagem', '_controller' => 'App\\Controller\\SiteController::listagem'], ['slug'], ['GET' => 0], null, false, true, null]],
        ];
    }
}
