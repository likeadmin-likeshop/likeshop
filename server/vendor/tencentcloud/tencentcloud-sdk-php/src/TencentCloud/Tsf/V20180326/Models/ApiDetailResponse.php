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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApiDetailResponse描述
 *
 * @method array getRequest() 获取API 请求参数
 * @method void setRequest(array $Request) 设置API 请求参数
 * @method array getResponse() 获取API 响应参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponse(array $Response) 设置API 响应参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDefinitions() 获取API 复杂结构定义
 * @method void setDefinitions(array $Definitions) 设置API 复杂结构定义
 * @method string getRequestContentType() 获取API 的 content type
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestContentType(string $RequestContentType) 设置API 的 content type
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanRun() 获取API  能否调试
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanRun(boolean $CanRun) 设置API  能否调试
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取API 状态 0:离线 1:在线，默认0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置API 状态 0:离线 1:在线，默认0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取API 描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置API 描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiDetailResponse extends AbstractModel
{
    /**
     * @var array API 请求参数
     */
    public $Request;

    /**
     * @var array API 响应参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Response;

    /**
     * @var array API 复杂结构定义
     */
    public $Definitions;

    /**
     * @var string API 的 content type
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestContentType;

    /**
     * @var boolean API  能否调试
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanRun;

    /**
     * @var integer API 状态 0:离线 1:在线，默认0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string API 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param array $Request API 请求参数
     * @param array $Response API 响应参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Definitions API 复杂结构定义
     * @param string $RequestContentType API 的 content type
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanRun API  能否调试
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status API 状态 0:离线 1:在线，默认0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description API 描述
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
        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = [];
            foreach ($param["Request"] as $key => $value){
                $obj = new ApiRequestDescr();
                $obj->deserialize($value);
                array_push($this->Request, $obj);
            }
        }

        if (array_key_exists("Response",$param) and $param["Response"] !== null) {
            $this->Response = [];
            foreach ($param["Response"] as $key => $value){
                $obj = new ApiResponseDescr();
                $obj->deserialize($value);
                array_push($this->Response, $obj);
            }
        }

        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = [];
            foreach ($param["Definitions"] as $key => $value){
                $obj = new ApiDefinitionDescr();
                $obj->deserialize($value);
                array_push($this->Definitions, $obj);
            }
        }

        if (array_key_exists("RequestContentType",$param) and $param["RequestContentType"] !== null) {
            $this->RequestContentType = $param["RequestContentType"];
        }

        if (array_key_exists("CanRun",$param) and $param["CanRun"] !== null) {
            $this->CanRun = $param["CanRun"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
