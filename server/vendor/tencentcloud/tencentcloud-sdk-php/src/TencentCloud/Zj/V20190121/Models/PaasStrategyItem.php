<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信活动策略元素
 *
 * @method integer getId() 获取短信模板id或超级短信样例id
 * @method void setId(integer $Id) 设置短信模板id或超级短信样例id
 * @method integer getContentType() 获取素材类型 0-普短 1-超短
 * @method void setContentType(integer $ContentType) 设置素材类型 0-普短 1-超短
 */
class PaasStrategyItem extends AbstractModel
{
    /**
     * @var integer 短信模板id或超级短信样例id
     */
    public $Id;

    /**
     * @var integer 素材类型 0-普短 1-超短
     */
    public $ContentType;

    /**
     * @param integer $Id 短信模板id或超级短信样例id
     * @param integer $ContentType 素材类型 0-普短 1-超短
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }
    }
}
