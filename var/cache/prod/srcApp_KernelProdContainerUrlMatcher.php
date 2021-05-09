<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
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
                    .'|/c(?'
                        .'|heckout/(?'
                            .'|([^/]++)(*:31)'
                            .'|resultado/([^/]++)(*:56)'
                        .')'
                        .'|liente/([^/]++)(?'
                            .'|(*:82)'
                            .'|/edit(?'
                                .'|(*:97)'
                                .'|/dados\\-(?'
                                    .'|medico(*:121)'
                                    .'|veiculo(*:136)'
                                .')'
                            .')'
                        .')'
                        .'|omprar/([^/]++)(?'
                            .'|(*:165)'
                            .'|/(?'
                                .'|resumo(*:183)'
                                .'|pagamento(*:200)'
                            .')'
                            .'|(?:/([^/]++))?(*:223)'
                        .')'
                    .')'
                    .'|/admin/expedicao/(?'
                        .'|([^/]++)(?'
                            .'|(*:264)'
                            .'|/editar(*:279)'
                            .'|(*:287)'
                        .')'
                        .'|deletar\\-imagem/([^/]++)(*:320)'
                    .')'
                    .'|/expedicao/([^/]++)(*:348)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            31 => [[['_route' => 'checkout_index', '_controller' => 'App\\Controller\\CheckoutController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            56 => [[['_route' => 'checkout_resultado', '_controller' => 'App\\Controller\\CheckoutController::resultado'], ['id'], ['GET' => 0], null, false, true, null]],
            82 => [[['_route' => 'cliente_show', '_controller' => 'App\\Controller\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            97 => [[['_route' => 'cliente_edit', '_controller' => 'App\\Controller\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            121 => [[['_route' => 'cliente_edit_dados_medico', '_controller' => 'App\\Controller\\ClienteController::editDadosMedico'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            136 => [[['_route' => 'cliente_edit_dados_veiculo', '_controller' => 'App\\Controller\\ClienteController::editDadosVeiculo'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            165 => [[['_route' => 'evento_show_site', '_controller' => 'App\\Controller\\SiteController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
            183 => [[['_route' => 'evento_showresumo_site', '_controller' => 'App\\Controller\\SiteController::showresumo'], ['slug'], ['GET' => 0], null, false, false, null]],
            200 => [[['_route' => 'evento_showpagamento_site', '_controller' => 'App\\Controller\\SiteController::showpagamento'], ['slug'], ['GET' => 0], null, false, false, null]],
            223 => [[['_route' => 'comprar', 'situacao' => 0, '_controller' => 'App\\Controller\\SiteController::comprar'], ['evento', 'situacao'], null, null, false, true, null]],
            264 => [[['_route' => 'evento_show', '_controller' => 'App\\Controller\\EventoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            279 => [[['_route' => 'evento_edit', '_controller' => 'App\\Controller\\EventoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            287 => [[['_route' => 'evento_delete', '_controller' => 'App\\Controller\\EventoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            320 => [[['_route' => 'evento_imagem_delete', '_controller' => 'App\\Controller\\EventoController::deleteImagem'], ['id'], ['DELETE' => 0], null, false, true, null]],
            348 => [[['_route' => 'evento_listagem', '_controller' => 'App\\Controller\\SiteController::listagem'], ['slug'], ['GET' => 0], null, false, true, null]],
        ];
    }
}
