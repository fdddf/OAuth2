<?php
namespace ZendService\OAuth2\Options\Vendors;

use ZendService\OAuth2\Exception,
    Zend\Stdlib\Options;

/**
 * @property string $authEntryUri
 * @property string $tokenEntryUri
 * @property string $responseFormat
 * @property array $headers
 */
class VendorOptions extends Options
{
    protected $authEntryUri;
    protected $tokenEntryUri;
    protected $responseFormat;
    protected $headers;

    /**
     * Getter
     * @return mixed
     */
    protected function getAuthEntryUri()
    {
        return $this->authEntryUri;
    }
    /**
     * Getter
     * @return string
     */
    protected function getTokenEntryUri()
    {
        return $this->tokenEntryUri;
    }
    /**
     * Getter
     * @return string
     */
    protected function getResponseFormat()
    {
        return $this->responseFormat;
    }
    /**
     * Getter
     * @return array
     */
    protected function getHeaders()
    {
        return $this->headers;
        return $this->headers;
    }

    /**
     * Setter
     * @param string $authEntryUri
     * @return VendorOptions
     */
    protected function setAuthEntryUri($authEntryUri)
    {
        $this->authEntryUri = $authEntryUri;
        return $this;
    }
    /**
     * Setter
     * @param string $tokenEntryUri
     * @return VendorOptions
     */
    protected function setTokenEntryUri($tokenEntryUri)
    {
        $this->tokenEntryUri = $tokenEntryUri;
        return $this;
    }
    /**
     * Setter
     * @param string $responseFormat
     * @return VendorOptions
     */
    protected function setResponseFormat($responseFormat)
    {
        $this->responseFormat = $responseFormat;
        return $this;
    }
    /**
     * Setter
     * @param array $headers
     * @return VendorOptions
     */
    protected function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }
}
