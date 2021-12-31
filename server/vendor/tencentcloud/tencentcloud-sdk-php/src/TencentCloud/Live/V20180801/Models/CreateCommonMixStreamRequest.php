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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCommonMixStream请求参数结构体
 *
 * @method string getMixStreamSessionId() 获取混流会话（申请混流开始到取消混流结束）标识 ID。
 * @method void setMixStreamSessionId(string $MixStreamSessionId) 设置混流会话（申请混流开始到取消混流结束）标识 ID。
 * @method array getInputStreamList() 获取混流输入流列表。
 * @method void setInputStreamList(array $InputStreamList) 设置混流输入流列表。
 * @method CommonMixOutputParams getOutputParams() 获取混流输出流参数。
 * @method void setOutputParams(CommonMixOutputParams $OutputParams) 设置混流输出流参数。
 * @method integer getMixStreamTemplateId() 获取输入模板 ID，若设置该参数，将按默认模板布局输出，无需填入自定义位置参数。
不填默认为0。
两输入源支持10，20，30，40，50。
三输入源支持310，390，391。
四输入源支持410。
五输入源支持510，590。
六输入源支持610。
 * @method void setMixStreamTemplateId(integer $MixStreamTemplateId) 设置输入模板 ID，若设置该参数，将按默认模板布局输出，无需填入自定义位置参数。
不填默认为0。
两输入源支持10，20，30，40，50。
三输入源支持310，390，391。
四输入源支持410。
五输入源支持510，590。
六输入源支持610。
 * @method CommonMixControlParams getControlParams() 获取混流的特殊控制参数。如无特殊需求，无需填写。
 * @method void setControlParams(CommonMixControlParams $ControlParams) 设置混流的特殊控制参数。如无特殊需求，无需填写。
 */
class CreateCommonMixStreamRequest extends AbstractModel
{
    /**
     * @var string 混流会话（申请混流开始到取消混流结束）标识 ID。
     */
    public $MixStreamSessionId;

    /**
     * @var array 混流输入流列表。
     */
    public $InputStreamList;

    /**
     * @var CommonMixOutputParams 混流输出流参数。
     */
    public $OutputParams;

    /**
     * @var integer 输入模板 ID，若设置该参数，将按默认模板布局输出，无需填入自定义位置参数。
不填默认为0。
两输入源支持10，20，30，40，50。
三输入源支持310，390，391。
四输入源支持410。
五输入源支持510，590。
六输入源支持610。
     */
    public $MixStreamTemplateId;

    /**
     * @var CommonMixControlParams 混流的特殊控制参数。如无特殊需求，无需填写。
     */
    public $ControlParams;

    /**
     * @param string $MixStreamSessionId 混流会话（申请混流开始到取消混流结束）标识 ID。
     * @param array $InputStreamList 混流输入流列表。
     * @param CommonMixOutputParams $OutputParams 混流输出流参数。
     * @param integer $MixStreamTemplateId 输入模板 ID，若设置该参数，将按默认模板布局输出，无需填入自定义位置参数。
不填默认为0。
两输入源支持10，20，30，40，50。
三输入源支持310，390，391。
四输入源支持410。
五输入源支持510，590。
六输入源支持610。
     * @param CommonMixControlParams $ControlParams 混流的特殊控制参数。如无特殊需求，无需填写。
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
        if (array_key_exists("MixStreamSessionId",$param) and $param["MixStreamSessionId"] !== null) {
            $this->MixStreamSessionId = $param["MixStreamSessionId"];
        }

        if (array_key_exists("InputStreamList",$param) and $param["InputStreamList"] !== null) {
            $this->InputStreamList = [];
            foreach ($param["InputStreamList"] as $key => $value){
                $obj = new CommonMixInputParam();
                $obj->deserialize($value);
                array_push($this->InputStreamList, $obj);
            }
        }

        if (array_key_exists("OutputParams",$param) and $param["OutputParams"] !== null) {
            $this->OutputParams = new CommonMixOutputParams();
            $this->OutputParams->deserialize($param["OutputParams"]);
        }

        if (array_key_exists("MixStreamTemplateId",$param) and $param["MixStreamTemplateId"] !== null) {
            $this->MixStreamTemplateId = $param["MixStreamTemplateId"];
        }

        if (array_key_exists("ControlParams",$param) and $param["ControlParams"] !== null) {
            $this->ControlParams = new CommonMixControlParams();
            $this->ControlParams->deserialize($param["ControlParams"]);
        }
    }
}
