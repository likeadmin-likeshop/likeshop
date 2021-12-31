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
namespace TencentCloud\Tms\V20200713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号风险检测结果
 *
 * @method string getLabel() 获取风险类别，RiskAccount，RiskIP, RiskIMEI
 * @method void setLabel(string $Label) 设置风险类别，RiskAccount，RiskIP, RiskIMEI
 * @method integer getLevel() 获取风险等级，1:疑似，2：恶意
 * @method void setLevel(integer $Level) 设置风险等级，1:疑似，2：恶意
 */
class RiskDetails extends AbstractModel
{
    /**
     * @var string 风险类别，RiskAccount，RiskIP, RiskIMEI
     */
    public $Label;

    /**
     * @var integer 风险等级，1:疑似，2：恶意
     */
    public $Level;

    /**
     * @param string $Label 风险类别，RiskAccount，RiskIP, RiskIMEI
     * @param integer $Level 风险等级，1:疑似，2：恶意
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
