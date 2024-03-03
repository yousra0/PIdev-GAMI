<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CaptchaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $botdetectCaptchaPath;
    private $captchaConfig;
    private $captchaStyleName;
    private $_usedProperties = [];

    /**
     * @default 'C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\vendor\\carlos-mg89\\symfony-captcha-bundle\\Support/../../../captcha-com/captcha/botdetect-captcha-lib'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function botdetectCaptchaPath($value = 'C:\\Users\\lenovo\\Desktop\\PIdev-GAMI-main\\PIdev-GAMI-main\\vendor\\carlos-mg89\\symfony-captcha-bundle\\Support/../../../captcha-com/captcha/botdetect-captcha-lib'): self
    {
        $this->_usedProperties['botdetectCaptchaPath'] = true;
        $this->botdetectCaptchaPath = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function captchaConfig($value = NULL): self
    {
        $this->_usedProperties['captchaConfig'] = true;
        $this->captchaConfig = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function captchaStyleName($value = NULL): self
    {
        $this->_usedProperties['captchaStyleName'] = true;
        $this->captchaStyleName = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'captcha';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('botdetect_captcha_path', $value)) {
            $this->_usedProperties['botdetectCaptchaPath'] = true;
            $this->botdetectCaptchaPath = $value['botdetect_captcha_path'];
            unset($value['botdetect_captcha_path']);
        }

        if (array_key_exists('captchaConfig', $value)) {
            $this->_usedProperties['captchaConfig'] = true;
            $this->captchaConfig = $value['captchaConfig'];
            unset($value['captchaConfig']);
        }

        if (array_key_exists('captchaStyleName', $value)) {
            $this->_usedProperties['captchaStyleName'] = true;
            $this->captchaStyleName = $value['captchaStyleName'];
            unset($value['captchaStyleName']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['botdetectCaptchaPath'])) {
            $output['botdetect_captcha_path'] = $this->botdetectCaptchaPath;
        }
        if (isset($this->_usedProperties['captchaConfig'])) {
            $output['captchaConfig'] = $this->captchaConfig;
        }
        if (isset($this->_usedProperties['captchaStyleName'])) {
            $output['captchaStyleName'] = $this->captchaStyleName;
        }

        return $output;
    }

}
