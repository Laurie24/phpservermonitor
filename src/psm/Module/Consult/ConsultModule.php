<?php
namespace psm\Module\Consult;

use psm\Module\ModuleInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ConsultModule implements ModuleInterface
{

    public function load(ContainerBuilder $container)
    {
    }

    public function getControllers()
    {
        return array(
            'consult' => __NAMESPACE__ . '\Controller\ConsultController',
        );
    }
}