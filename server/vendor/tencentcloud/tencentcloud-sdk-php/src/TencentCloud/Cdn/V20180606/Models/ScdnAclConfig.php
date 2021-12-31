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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCDN访问控制
 *
 * @method string getSwitch() 获取是否开启，on | off
 * @method void setSwitch(string $Switch) 设置是否开启，on | off
 * @method array getScriptData() 获取Acl规则组，switch为on时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptData(array $ScriptData) 设置Acl规则组，switch为on时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScdnErrorPage getErrorPage() 获取错误页面配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorPage(ScdnErrorPage $ErrorPage) 设置错误页面配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScdnAclConfig extends AbstractModel
{
    /**
     * @var string 是否开启，on | off
     */
    public $Switch;

    /**
     * @var array Acl规则组，switch为on时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptData;

    /**
     * @var ScdnErrorPage 错误页面配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorPage;

    /**
     * @param string $Switch 是否开启，on | off
     * @param array $ScriptData Acl规则组，switch为on时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScdnErrorPage $ErrorPage 错误页面配置
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ScriptData",$param) and $param["ScriptData"] !== null) {
            $this->ScriptData = [];
            foreach ($param["ScriptData"] as $key => $value){
                $obj = new ScdnAclGroup();
                $obj->deserialize($value);
                array_push($this->ScriptData, $obj);
            }
        }

        if (array_key_exists("ErrorPage",$param) and $param["ErrorPage"] !== null) {
            $this->ErrorPage = new ScdnErrorPage();
            $this->ErrorPage->deserialize($param["ErrorPage"]);
        }
    }
}
