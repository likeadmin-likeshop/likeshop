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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PropOwnerCertOCR返回参数结构体
 *
 * @method string getOwner() 获取房地产权利人
 * @method void setOwner(string $Owner) 设置房地产权利人
 * @method string getPossession() 获取共有情况
 * @method void setPossession(string $Possession) 设置共有情况
 * @method string getRegisterTime() 获取登记时间
 * @method void setRegisterTime(string $RegisterTime) 设置登记时间
 * @method string getPurpose() 获取规划用途
 * @method void setPurpose(string $Purpose) 设置规划用途
 * @method string getNature() 获取房屋性质
 * @method void setNature(string $Nature) 设置房屋性质
 * @method string getLocation() 获取房地坐落
 * @method void setLocation(string $Location) 设置房地坐落
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class PropOwnerCertOCRResponse extends AbstractModel
{
    /**
     * @var string 房地产权利人
     */
    public $Owner;

    /**
     * @var string 共有情况
     */
    public $Possession;

    /**
     * @var string 登记时间
     */
    public $RegisterTime;

    /**
     * @var string 规划用途
     */
    public $Purpose;

    /**
     * @var string 房屋性质
     */
    public $Nature;

    /**
     * @var string 房地坐落
     */
    public $Location;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Owner 房地产权利人
     * @param string $Possession 共有情况
     * @param string $RegisterTime 登记时间
     * @param string $Purpose 规划用途
     * @param string $Nature 房屋性质
     * @param string $Location 房地坐落
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Possession",$param) and $param["Possession"] !== null) {
            $this->Possession = $param["Possession"];
        }

        if (array_key_exists("RegisterTime",$param) and $param["RegisterTime"] !== null) {
            $this->RegisterTime = $param["RegisterTime"];
        }

        if (array_key_exists("Purpose",$param) and $param["Purpose"] !== null) {
            $this->Purpose = $param["Purpose"];
        }

        if (array_key_exists("Nature",$param) and $param["Nature"] !== null) {
            $this->Nature = $param["Nature"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
