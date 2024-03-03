<?php

namespace Container3OOvhyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEwzRecaptcha_RecaptchaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ewz_recaptcha.recaptcha' shared service.
     *
     * @return \ReCaptcha\ReCaptcha
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'recaptcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'ReCaptcha.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'recaptcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'RequestMethod.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'excelwebzone'.\DIRECTORY_SEPARATOR.'recaptcha-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'RequestMethod'.\DIRECTORY_SEPARATOR.'Post.php';

        return $container->privates['ewz_recaptcha.recaptcha'] = new \ReCaptcha\ReCaptcha($container->getEnv('resolve:RECAPTCHA_PRIVATE_KEY'), new \EWZ\Bundle\RecaptchaBundle\Extension\ReCaptcha\RequestMethod\Post('https://www.google.com', NULL));
    }
}
