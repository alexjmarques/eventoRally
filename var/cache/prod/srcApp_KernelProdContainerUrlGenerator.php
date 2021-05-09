<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'admin_login' => [[], ['_controller' => 'App\\Controller\\AdminSecurityController::login'], [], [['text', '/admin/login']], [], []],
        'admin_logout' => [[], ['_controller' => 'App\\Controller\\AdminSecurityController::logout'], [], [['text', '/admin/logout']], [], []],
        'checkout_index' => [['id'], ['_controller' => 'App\\Controller\\CheckoutController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/checkout']], [], []],
        'checkout_resultado' => [['id'], ['_controller' => 'App\\Controller\\CheckoutController::resultado'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/checkout/resultado']], [], []],
        'checkout_gerar_sessao' => [[], ['_controller' => 'App\\Controller\\CheckoutController::generateSession'], [], [['text', '/checkout/gerar/sessao']], [], []],
        'checkout_notification' => [[], ['_controller' => 'App\\Controller\\CheckoutController::notification'], [], [['text', '/checkout/notification/retorno']], [], []],
        'cliente_index' => [[], ['_controller' => 'App\\Controller\\ClienteController::index'], [], [['text', '/cliente/']], [], []],
        'cliente_new' => [[], ['_controller' => 'App\\Controller\\ClienteController::new'], [], [['text', '/cliente/new']], [], []],
        'cliente_show' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], []],
        'cliente_edit' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], []],
        'cliente_edit_dados_medico' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::editDadosMedico'], [], [['text', '/edit/dados-medico'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], []],
        'cliente_edit_dados_veiculo' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::editDadosVeiculo'], [], [['text', '/edit/dados-veiculo'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], []],
        'cliente_login' => [[], ['_controller' => 'App\\Controller\\ClienteSecurityController::login'], [], [['text', '/login']], [], []],
        'cliente_logout' => [[], ['_controller' => 'App\\Controller\\ClienteSecurityController::logout'], [], [['text', '/logout']], [], []],
        'evento_index' => [[], ['_controller' => 'App\\Controller\\EventoController::index'], [], [['text', '/admin/expedicao/']], [], []],
        'evento_new' => [[], ['_controller' => 'App\\Controller\\EventoController::new'], [], [['text', '/admin/expedicao/novo']], [], []],
        'evento_show' => [['id'], ['_controller' => 'App\\Controller\\EventoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/expedicao']], [], []],
        'evento_edit' => [['id'], ['_controller' => 'App\\Controller\\EventoController::edit'], [], [['text', '/editar'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/expedicao']], [], []],
        'evento_delete' => [['id'], ['_controller' => 'App\\Controller\\EventoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/expedicao']], [], []],
        'evento_imagem_delete' => [['id'], ['_controller' => 'App\\Controller\\EventoController::deleteImagem'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/expedicao/deletar-imagem']], [], []],
        'site' => [[], ['_controller' => 'App\\Controller\\SiteController::index'], [], [['text', '/']], [], []],
        'evento_listagem' => [['slug'], ['_controller' => 'App\\Controller\\SiteController::listagem'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/expedicao']], [], []],
        'evento_show_site' => [['slug'], ['_controller' => 'App\\Controller\\SiteController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/comprar']], [], []],
        'evento_showresumo_site' => [['slug'], ['_controller' => 'App\\Controller\\SiteController::showresumo'], [], [['text', '/resumo'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/comprar']], [], []],
        'evento_showpagamento_site' => [['slug'], ['_controller' => 'App\\Controller\\SiteController::showpagamento'], [], [['text', '/pagamento'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/comprar']], [], []],
        'comprar' => [['evento', 'situacao'], ['situacao' => 0, '_controller' => 'App\\Controller\\SiteController::comprar'], [], [['variable', '/', '[^/]++', 'situacao', true], ['variable', '/', '[^/]++', 'evento', true], ['text', '/comprar']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
