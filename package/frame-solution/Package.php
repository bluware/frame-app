<?php

/**
 *  @package Frame
 */
namespace Frame\Solution;

/**
 *  @subpackage Core
 */
class Package extends \Frame\Package
{
    public function bootstrap($locator)
    {
        //
    }

    public function autoload($autoload)
    {
        $autoload->add(
            __NAMESPACE__, __DIR__ . '/src'
        );
    }

    public function routing($router)
    {
        $router->get(
            '/', function() {
                return response('text', 'Frame solution')
            }
        );
    }

    public function view($view)
    {
        $view->add(
            __DIR__ . '/view', 'phtml'
        );
    }

    public function translator()
    {
        return [
            __DIR__ . '/lang'
        ];
    }
}
