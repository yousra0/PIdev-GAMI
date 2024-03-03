<?php

namespace ContainerR1UHUOk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEwzRecaptcha_Validator_TrueService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'ewz_recaptcha.validator.true' shared service.
     *
     * @return \EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrueValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'excelwebzone'.\DIRECTORY_SEPARATOR.'recaptcha-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'IsTrueValidator.php';

        $a = ($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService());

        if (isset($container->services['ewz_recaptcha.validator.true'])) {
            return $container->services['ewz_recaptcha.validator.true'];
        }

        return $container->services['ewz_recaptcha.validator.true'] = new \EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrueValidator(false, ($container->privates['ewz_recaptcha.recaptcha'] ?? $container->load('getEwzRecaptcha_RecaptchaService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), false, $a, []);
    }
}
