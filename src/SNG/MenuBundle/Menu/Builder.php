<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 08.03.18
 * Time: 22:10
 */

namespace App\SNG\MenuBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;


class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options) {

        $menu = $factory->createItem('root');
        $menu->addChild('Первый', [
            'route' => 'index'
        ]);
        $menu->addChild('Второй', [
            'route' => 'base'
        ]);
        return $menu;
    }

}