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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterCallback请求参数结构体
 *
 * @method string getCompanyId() 获取集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method void setCompanyId(string $CompanyId) 设置集团id，通过"指定身份标识获取客户门店列表"接口获取
 * @method string getBackUrl() 获取通知回调地址，完整url，示例（http://youmall.tencentcloudapi.com/）
 * @method void setBackUrl(string $BackUrl) 设置通知回调地址，完整url，示例（http://youmall.tencentcloudapi.com/）
 * @method integer getTime() 获取请求时间戳
 * @method void setTime(integer $Time) 设置请求时间戳
 * @method integer getNeedFacePic() 获取是否需要顾客图片，1-需要图片，其它-不需要图片
 * @method void setNeedFacePic(integer $NeedFacePic) 设置是否需要顾客图片，1-需要图片，其它-不需要图片
 */
class RegisterCallbackRequest extends AbstractModel
{
    /**
     * @var string 集团id，通过"指定身份标识获取客户门店列表"接口获取
     */
    public $CompanyId;

    /**
     * @var string 通知回调地址，完整url，示例（http://youmall.tencentcloudapi.com/）
     */
    public $BackUrl;

    /**
     * @var integer 请求时间戳
     */
    public $Time;

    /**
     * @var integer 是否需要顾客图片，1-需要图片，其它-不需要图片
     */
    public $NeedFacePic;

    /**
     * @param string $CompanyId 集团id，通过"指定身份标识获取客户门店列表"接口获取
     * @param string $BackUrl 通知回调地址，完整url，示例（http://youmall.tencentcloudapi.com/）
     * @param integer $Time 请求时间戳
     * @param integer $NeedFacePic 是否需要顾客图片，1-需要图片，其它-不需要图片
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("BackUrl",$param) and $param["BackUrl"] !== null) {
            $this->BackUrl = $param["BackUrl"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("NeedFacePic",$param) and $param["NeedFacePic"] !== null) {
            $this->NeedFacePic = $param["NeedFacePic"];
        }
    }
}
