<?php

namespace AlibabaCloud\Client\Regions;

use Exception;
use RuntimeException;
use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\Config\Config;
use AlibabaCloud\Client\Request\Request;
use AlibabaCloud\Client\Filter\ApiFilter;
use AlibabaCloud\Client\Filter\HttpFilter;
use AlibabaCloud\Client\Filter\ClientFilter;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Class LocationService
 *
 * @package   AlibabaCloud\Client\Regions
 */
class LocationService
{
    /**
     * Global Region Name
     */
    const GLOBAL_REGION = 'global';

    /**
     * @var array
     */
    protected static $hosts = [];

    /**
     * @var Request
     */
    protected $request;

    /**
     * LocationService constructor.
     *
     * @param Request $request
     */
    private function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param Request $request
     * @param string  $domain
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     * @deprecated
     * @codeCoverageIgnore
     */
    public static function findProductDomain(Request $request, $domain = 'location.aliyuncs.com')
    {
        return self::resolveHost($request, $domain);
    }

    /**
     * @param $regionId
     * @param $product
     * @param $domain
     *
     * @throws ClientException
     * @deprecated
     * @codeCoverageIgnore
     */
    public static function addEndPoint($regionId, $product, $domain)
    {
        self::addHost($product, $domain, $regionId);
    }


    /**
     * @param Request $request
     * @param string  $domain
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    public static function resolveHost(Request $request, $domain = 'location.aliyuncs.com')
    {
        $locationService = new static($request);
        $product         = $locationService->request->product;
        $regionId        = $locationService->request->realRegionId();

        if (!isset(self::$hosts[$product][$regionId])) {
            self::$hosts[$product][$regionId] = self::getResult($locationService, $domain);
        }

        return self::$hosts[$product][$regionId];
    }

    /**
     * @param static $locationService
     * @param string $domain
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    private static function getResult($locationService, $domain)
    {
        $locationRequest = new LocationServiceRequest($locationService->request, $domain);

        $result = $locationRequest->request();

        if (!isset($result['Endpoints']['Endpoint'][0]['Endpoint'])) {
            throw new ClientException(
                'Not found Region ID in ' . $domain,
                SDK::INVALID_REGION_ID
            );
        }

        return $result['Endpoints']['Endpoint'][0]['Endpoint'];
    }

    /**
     * @param string $product
     * @param string $host
     * @param string $regionId
     *
     * @throws ClientException
     */
    public static function addHost($product, $host, $regionId = self::GLOBAL_REGION)
    {
        ApiFilter::product($product);

        HttpFilter::host($host);

        ClientFilter::regionId($regionId);

        self::$hosts[$product][$regionId] = $host;
    }

    /**
     * Update endpoints from OSS.
     *
     * @codeCoverageIgnore
     * @throws Exception
     */
    public static function updateEndpoints()
    {
        $ossUrl = 'https://openapi-endpoints.oss-cn-hangzhou.aliyuncs.com/endpoints.json';
        $json   = \file_get_contents($ossUrl);
        $list   = \json_decode($json, true);

        foreach ($list['endpoints'] as $endpoint) {
            Config::set(
                "endpoints.{$endpoint['service']}.{$endpoint['regionid']}",
                \strtolower($endpoint['endpoint'])
            );
        }
    }
}
