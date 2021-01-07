<?php

namespace AlibabaCloud\Client\Traits;

use AlibabaCloud\Client\Filter\ClientFilter;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Trait RegionTrait
 *
 * @package AlibabaCloud\Client\Traits
 */
trait RegionTrait
{

    /**
     * @var string|null
     */
    public $regionId;

    /**
     * @param string $regionId
     *
     * @return $this
     * @throws ClientException
     */
    public function regionId($regionId)
    {
        $this->regionId = ClientFilter::regionId($regionId);

        return $this;
    }
}
