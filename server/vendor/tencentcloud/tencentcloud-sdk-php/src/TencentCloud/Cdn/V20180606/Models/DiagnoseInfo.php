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
 * 诊断信息
 *
 * @method string getDiagnoseUrl() 获取待诊断的URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnoseUrl(string $DiagnoseUrl) 设置待诊断的URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiagnoseLink() 获取由系统生成的诊断链接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnoseLink(string $DiagnoseLink) 设置由系统生成的诊断链接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取诊断创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置诊断创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireDate() 获取诊断链接过期时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireDate(string $ExpireDate) 设置诊断链接过期时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVisitCount() 获取诊断链接当前访问次数，一个诊断链接最多可访问10次。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVisitCount(integer $VisitCount) 设置诊断链接当前访问次数，一个诊断链接最多可访问10次。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClientList() 获取访问诊断链接的客户端简易信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientList(array $ClientList) 设置访问诊断链接的客户端简易信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取域名加速区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置域名加速区域
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiagnoseInfo extends AbstractModel
{
    /**
     * @var string 待诊断的URL。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiagnoseUrl;

    /**
     * @var string 由系统生成的诊断链接。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiagnoseLink;

    /**
     * @var string 诊断创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 诊断链接过期时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireDate;

    /**
     * @var integer 诊断链接当前访问次数，一个诊断链接最多可访问10次。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VisitCount;

    /**
     * @var array 访问诊断链接的客户端简易信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientList;

    /**
     * @var string 域名加速区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @param string $DiagnoseUrl 待诊断的URL。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiagnoseLink 由系统生成的诊断链接。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 诊断创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireDate 诊断链接过期时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VisitCount 诊断链接当前访问次数，一个诊断链接最多可访问10次。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClientList 访问诊断链接的客户端简易信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 域名加速区域
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
        if (array_key_exists("DiagnoseUrl",$param) and $param["DiagnoseUrl"] !== null) {
            $this->DiagnoseUrl = $param["DiagnoseUrl"];
        }

        if (array_key_exists("DiagnoseLink",$param) and $param["DiagnoseLink"] !== null) {
            $this->DiagnoseLink = $param["DiagnoseLink"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("VisitCount",$param) and $param["VisitCount"] !== null) {
            $this->VisitCount = $param["VisitCount"];
        }

        if (array_key_exists("ClientList",$param) and $param["ClientList"] !== null) {
            $this->ClientList = [];
            foreach ($param["ClientList"] as $key => $value){
                $obj = new DiagnoseList();
                $obj->deserialize($value);
                array_push($this->ClientList, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
