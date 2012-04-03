<?php

namespace ZendService\OAuth2\Options;

use ZendService\OAuth2\Exception\OAuth2Exception,
    ZendService\OAuth2\Options\Vendors,
    Zend\Stdlib\Options;

/**
 * @property Stage1Options $stage1
 * @property Stage1ResponseOptions $stage1Response
 * @property Stage2Options $stage2;
 * @property Stage2ResponseOptions $stage2Response;
 * @property \ZendService\OAuth2\Options\Vendors\VendorOptions $vendorOptions
 */
class OAuth2Options extends BaseAbstract
{
    /**
     * @var Stage1Options
     */
    protected $stage1;
    /**
     * @var Stage1ResponseOptions
     */
    protected $stage1Response;

    /**
     * @var Stage2Options
     */
    protected $stage2;
    /**
     * @var Stage2ResponseOptions
     */
    protected $stage2Response;
    /**
     * @var \ZendService\OAuth2\Options\Vendors\VendorOptions
     */
    protected $vendorOptions;

    /**
     * Set Default Options
     * @return DefaultOptions
     */
    protected function setDefaultOptions()
    {
        $this->stage1 = new Stage1Options();
        $this->stage1Response = new Stage1ResponseOptions();
        $this->stage2 = new Stage2Options();
        $this->stage2Response = new Stage2ResponseOptions();
        return $this;
    }

    protected function setOverloadOptions($overload)
    {
        $overload = ucfirst(strtolower($overload));
        $className = __NAMESPACE__."\\Vendors\\{$overload}Options";
        if(!class_exists($className))
        {
            throw new OAuth2Exception("Config file for \"$overload\" was not found in file \"$className\"");
        }
    }

    /**
     * Getter
     * @return Stage1Options
     */
    protected function getStage1()
    {
        return $this->stage1;
    }
    /**
     * Getter
     * @return Stage1ResponseOptions
     */
    protected function getStage1Response()
    {
        return $this->stage1Response;
    }
    /**
     * Getter
     * @return Stage2Options
     */
    protected function getStage2()
    {
        return $this->stage2;
    }
    /**
     * Getter
     * @return Stage2ResponseOptions
     */
    protected function getStage2Response()
    {
        return $this->stage2Response;
    }
    /**
     * Getter
     * @return Vendors\VendorOptions
     */
    protected function getVendorOptions()
    {
        return $this->vendorOptions;
    }

}