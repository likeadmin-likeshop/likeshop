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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaMiniData请求参数结构体
 *
 * @method integer getCaptchaAppId() 获取验证码应用ID
 * @method void setCaptchaAppId(integer $CaptchaAppId) 设置验证码应用ID
 * @method integer getStart() 获取查询开始时间 例如：2019112900
 * @method void setStart(integer $Start) 设置查询开始时间 例如：2019112900
 * @method integer getEnd() 获取查询结束时间 例如：2019112902
 * @method void setEnd(integer $End) 设置查询结束时间 例如：2019112902
 * @method integer getType() 获取查询类型 安全验证码小程序插件分类查询数据接口，请求量type=0、通过量type=1、验证量type=2、拦截量type=3 小时级查询（五小时左右延迟）
 * @method void setType(integer $Type) 设置查询类型 安全验证码小程序插件分类查询数据接口，请求量type=0、通过量type=1、验证量type=2、拦截量type=3 小时级查询（五小时左右延迟）
 */
class DescribeCaptchaMiniDataRequest extends AbstractModel
{
    /**
     * @var integer 验证码应用ID
     */
    public $CaptchaAppId;

    /**
     * @var integer 查询开始时间 例如：2019112900
     */
    public $Start;

    /**
     * @var integer 查询结束时间 例如：2019112902
     */
    public $End;

    /**
     * @var integer 查询类型 安全验证码小程序插件分类查询数据接口，请求量type=0、通过量type=1、验证量type=2、拦截量type=3 小时级查询（五小时左右延迟）
     */
    public $Type;

    /**
     * @param integer $CaptchaAppId 验证码应用ID
     * @param integer $Start 查询开始时间 例如：2019112900
     * @param integer $End 查询结束时间 例如：2019112902
     * @param integer $Type 查询类型 安全验证码小程序插件分类查询数据接口，请求量type=0、通过量type=1、验证量type=2、拦截量type=3 小时级查询（五小时左右延迟）
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
        if (array_key_exists("CaptchaAppId",$param) and $param["CaptchaAppId"] !== null) {
            $this->CaptchaAppId = $param["CaptchaAppId"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
