<?php

namespace ContainerR1UHUOk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GGAWD1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GGAW_d1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GGAW_d1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CalendarController::delete' => ['privates', '.service_locator.8_BVbXm', 'get_ServiceLocator_8BVbXmService', true],
            'App\\Controller\\CalendarController::edit' => ['privates', '.service_locator.8_BVbXm', 'get_ServiceLocator_8BVbXmService', true],
            'App\\Controller\\CalendarController::index' => ['privates', '.service_locator.F_DYhqA', 'get_ServiceLocator_FDYhqAService', true],
            'App\\Controller\\CalendarController::show' => ['privates', '.service_locator.8_BVbXm', 'get_ServiceLocator_8BVbXmService', true],
            'App\\Controller\\CommentController::addComment' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\CommentController::listComment' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PostBackController::addPost' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PostBackController::deletePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostBackController::dislikePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostBackController::editPost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostBackController::likePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostBackController::listPost' => ['privates', '.service_locator.lymNbj2', 'get_ServiceLocator_LymNbj2Service', true],
            'App\\Controller\\PostBackController::searchPost' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController::addPost' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PostController::deletePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController::details' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController::dislikePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController::editPost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController::likePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController::listPost' => ['privates', '.service_locator.I3XUlBy', 'get_ServiceLocator_I3XUlByService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\CalendarController:delete' => ['privates', '.service_locator.8_BVbXm', 'get_ServiceLocator_8BVbXmService', true],
            'App\\Controller\\CalendarController:edit' => ['privates', '.service_locator.8_BVbXm', 'get_ServiceLocator_8BVbXmService', true],
            'App\\Controller\\CalendarController:index' => ['privates', '.service_locator.F_DYhqA', 'get_ServiceLocator_FDYhqAService', true],
            'App\\Controller\\CalendarController:show' => ['privates', '.service_locator.8_BVbXm', 'get_ServiceLocator_8BVbXmService', true],
            'App\\Controller\\CommentController:addComment' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\CommentController:listComment' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PostBackController:addPost' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PostBackController:deletePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostBackController:dislikePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostBackController:editPost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostBackController:likePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostBackController:listPost' => ['privates', '.service_locator.lymNbj2', 'get_ServiceLocator_LymNbj2Service', true],
            'App\\Controller\\PostBackController:searchPost' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController:addPost' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\PostController:deletePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController:details' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController:dislikePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController:editPost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController:likePost' => ['privates', '.service_locator.4WI1Dtz', 'get_ServiceLocator_4WI1DtzService', true],
            'App\\Controller\\PostController:listPost' => ['privates', '.service_locator.I3XUlBy', 'get_ServiceLocator_I3XUlByService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\CalendarController::delete' => '?',
            'App\\Controller\\CalendarController::edit' => '?',
            'App\\Controller\\CalendarController::index' => '?',
            'App\\Controller\\CalendarController::show' => '?',
            'App\\Controller\\CommentController::addComment' => '?',
            'App\\Controller\\CommentController::listComment' => '?',
            'App\\Controller\\PostBackController::addPost' => '?',
            'App\\Controller\\PostBackController::deletePost' => '?',
            'App\\Controller\\PostBackController::dislikePost' => '?',
            'App\\Controller\\PostBackController::editPost' => '?',
            'App\\Controller\\PostBackController::likePost' => '?',
            'App\\Controller\\PostBackController::listPost' => '?',
            'App\\Controller\\PostBackController::searchPost' => '?',
            'App\\Controller\\PostController::addPost' => '?',
            'App\\Controller\\PostController::deletePost' => '?',
            'App\\Controller\\PostController::details' => '?',
            'App\\Controller\\PostController::dislikePost' => '?',
            'App\\Controller\\PostController::editPost' => '?',
            'App\\Controller\\PostController::likePost' => '?',
            'App\\Controller\\PostController::listPost' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CalendarController:delete' => '?',
            'App\\Controller\\CalendarController:edit' => '?',
            'App\\Controller\\CalendarController:index' => '?',
            'App\\Controller\\CalendarController:show' => '?',
            'App\\Controller\\CommentController:addComment' => '?',
            'App\\Controller\\CommentController:listComment' => '?',
            'App\\Controller\\PostBackController:addPost' => '?',
            'App\\Controller\\PostBackController:deletePost' => '?',
            'App\\Controller\\PostBackController:dislikePost' => '?',
            'App\\Controller\\PostBackController:editPost' => '?',
            'App\\Controller\\PostBackController:likePost' => '?',
            'App\\Controller\\PostBackController:listPost' => '?',
            'App\\Controller\\PostBackController:searchPost' => '?',
            'App\\Controller\\PostController:addPost' => '?',
            'App\\Controller\\PostController:deletePost' => '?',
            'App\\Controller\\PostController:details' => '?',
            'App\\Controller\\PostController:dislikePost' => '?',
            'App\\Controller\\PostController:editPost' => '?',
            'App\\Controller\\PostController:likePost' => '?',
            'App\\Controller\\PostController:listPost' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
