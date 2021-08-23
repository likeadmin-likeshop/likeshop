<?php

namespace AlibabaCloud\Client\Request\Traits;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Filter\ApiFilter;
use AlibabaCloud\Client\Regions\LocationService;
use AlibabaCloud\Client\Request\Request;
use AlibabaCloud\Client\SDK;
use GuzzleHttp\Psr7\Uri;

/**
 * Trait AcsTrait
 *
 * @package   AlibabaCloud\Client\Request\Traits
 * @property Uri $uri
 * @mixin     Request
 */
trait AcsTrait
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $serviceCode = '';

    /**
     * @var string
     */
    public $endpointType = 'openAPI';

    /**
     * @var string|null
     */
    public $network = 'public';

    /**
     * @var array|null
     */
    public $endpointMap;

    /**
     * @var string|null
     */
    public $endpointRegional;

    /**
     * @var string
     */
    public $endpointSuffix = '';

    /**
     * @param string $action
     *
     * @return $this
     * @throws ClientException
     */
    public function action($action)
    {
        $this->action = ApiFilter::action($action);

        return $this;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param string $endpointSuffix
     *
     * @return AcsTrait
     * @throws ClientException
     */
    public function endpointSuffix($endpointSuffix)
    {
        $this->endpointSuffix = ApiFilter::endpointSuffix($endpointSuffix);

        return $this;
    }

    /**
     * @param string $network
     */
    public function network($network)
    {
        $this->network = ApiFilter::network($network);

        return $this;
    }

    /**
     * @param string $version
     *
     * @return $this
     * @throws ClientException
     */
    public function version($version)
    {
        $this->version = ApiFilter::version($version);

        return $this;
    }

    /**
     * @param string $product
     *
     * @return $this
     * @throws ClientException
     */
    public function product($product)
    {
        $this->product = ApiFilter::product($product);

        return $this;
    }

    /**
     * @param string $endpointType
     *
     * @return $this
     * @throws ClientException
     */
    public function endpointType($endpointType)
    {
        $this->endpointType = ApiFilter::endpointType($endpointType);

        return $this;
    }

    /**
     * @param string $serviceCode
     *
     * @return $this
     * @throws ClientException
     */
    public function serviceCode($serviceCode)
    {
        $this->serviceCode = ApiFilter::serviceCode($serviceCode);

        return $this;
    }

    /**
     * Resolve Host.
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function resolveHost()
    {
        // Return if specified
        if ($this->uri->getHost() !== 'localhost') {
            return;
        }

        $region_id = $this->realRegionId();
        $host      = '';

        $this->resolveHostWays($host, $region_id);

        if (!$host) {
            throw new ClientException(
                "No host found for {$this->product} in the {$region_id}, you can specify host by host() method. " .
                'Like $request->host(\'xxx.xxx.aliyuncs.com\')',
                SDK::HOST_NOT_FOUND
            );
        }

        $this->uri = $this->uri->withHost($host);
    }

    /**
     * @param string $host
     * @param string $region_id
     *
     * @throws ClientException
     * @throws ServerException
     */
    private function resolveHostWays(&$host, $region_id)
    {
        $host = AlibabaCloud::resolveHostByStatic($this->product, $region_id);

        // 1. Find host by map.
        if (!$host && $this->network === 'public' && isset($this->endpointMap[$region_id])) {
            $host = $this->endpointMap[$region_id];
        }

        if (!$host) {
            $this->hostResolver($host, $region_id);
        }
    }

    /**
     * @codeCoverageIgnore
     *
     * @param string $host
     * @param string $region_id
     *
     * @throws ClientException
     * @throws ServerException
     */
    private function hostResolver(&$host, $region_id)
    {
        // 2. Find host by rules.
        if ($this->endpointRegional !== null) {
            $host = AlibabaCloud::resolveHostByRule($this);
        }

        // 3. Find in the local array file.
        if (!$host) {
            $host = AlibabaCloud::resolveHost($this->product, $region_id);
        }

        // 4. Find in the Location service.
        if (!$host && $this->serviceCode) {
            $host = LocationService::resolveHost($this);
        }
    }

    /**
     * @return string
     * @throws ClientException
     */
    public function realRegionId()
    {
        if ($this->regionId !== null) {
            return $this->regionId;
        }

        if ($this->httpClient()->regionId !== null) {
            return $this->httpClient()->regionId;
        }

        if (AlibabaCloud::getDefaultRegionId() !== null) {
            return AlibabaCloud::getDefaultRegionId();
        }

        if ($this->product && AlibabaCloud::isGlobalProduct($this->product)) {
            return 'global';
        }

        throw new ClientException("Missing required 'RegionId' for Request", SDK::INVALID_REGION_ID);
    }
}
