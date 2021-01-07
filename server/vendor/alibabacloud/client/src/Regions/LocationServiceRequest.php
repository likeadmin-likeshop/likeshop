<?php

namespace AlibabaCloud\Client\Regions;

use AlibabaCloud\Client\Request\Request;
use AlibabaCloud\Client\Request\RpcRequest;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class LocationServiceRequest
 *
 * @package   AlibabaCloud\Client\Regions
 */
class LocationServiceRequest extends RpcRequest
{

    /**
     * LocationServiceRequest constructor.
     *
     * @param Request $request
     * @param string  $domain
     *
     * @throws ClientException
     */
    public function __construct(Request $request, $domain)
    {
        parent::__construct();
        $this->product('Location');
        $this->version('2015-06-12');
        $this->action('DescribeEndpoints');
        $this->regionId('cn-hangzhou');
        $this->format('JSON');
        $this->options['query']['Id']          = $request->realRegionId();
        $this->options['query']['ServiceCode'] = $request->serviceCode;
        $this->options['query']['Type']        = $request->endpointType;
        $this->client($request->client);
        $this->host($domain);
        if (isset($request->options['timeout'])) {
            $this->timeout($request->options['timeout']);
        }

        if (isset($request->options['connect_timeout'])) {
            $this->connectTimeout($request->options['connect_timeout']);
        }
    }
}
