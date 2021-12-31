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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检查项资产组每一项
 *
 * @method integer getId() 获取检查项下资产组ID
 * @method void setId(integer $Id) 设置检查项下资产组ID
 * @method string getInstid() 获取资产组实例id
 * @method void setInstid(string $Instid) 设置资产组实例id
 * @method string getUrl() 获取处置跳转URL
 * @method void setUrl(string $Url) 设置处置跳转URL
 * @method string getTaskid() 获取检查任务id
 * @method void setTaskid(string $Taskid) 设置检查任务id
 * @method integer getResult() 获取检查结果
 * @method void setResult(integer $Result) 设置检查结果
 * @method string getUpdatetime() 获取更新时间
 * @method void setUpdatetime(string $Updatetime) 设置更新时间
 * @method string getTag() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(string $Tag) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsIgnore() 获取是否忽略
 * @method void setIsIgnore(integer $IsIgnore) 设置是否忽略
 * @method integer getIsChecked() 获取检查状态
 * @method void setIsChecked(integer $IsChecked) 设置检查状态
 * @method string getAssetInfo() 获取资产组信息
 * @method void setAssetInfo(string $AssetInfo) 设置资产组信息
 * @method string getAssetId() 获取资产组ES的_id
 * @method void setAssetId(string $AssetId) 设置资产组ES的_id
 * @method string getDetail() 获取详情
 * @method void setDetail(string $Detail) 设置详情
 * @method string getRemarks() 获取备注内容
 * @method void setRemarks(string $Remarks) 设置备注内容
 */
class CheckAssetItem extends AbstractModel
{
    /**
     * @var integer 检查项下资产组ID
     */
    public $Id;

    /**
     * @var string 资产组实例id
     */
    public $Instid;

    /**
     * @var string 处置跳转URL
     */
    public $Url;

    /**
     * @var string 检查任务id
     */
    public $Taskid;

    /**
     * @var integer 检查结果
     */
    public $Result;

    /**
     * @var string 更新时间
     */
    public $Updatetime;

    /**
     * @var string 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var integer 是否忽略
     */
    public $IsIgnore;

    /**
     * @var integer 检查状态
     */
    public $IsChecked;

    /**
     * @var string 资产组信息
     */
    public $AssetInfo;

    /**
     * @var string 资产组ES的_id
     */
    public $AssetId;

    /**
     * @var string 详情
     */
    public $Detail;

    /**
     * @var string 备注内容
     */
    public $Remarks;

    /**
     * @param integer $Id 检查项下资产组ID
     * @param string $Instid 资产组实例id
     * @param string $Url 处置跳转URL
     * @param string $Taskid 检查任务id
     * @param integer $Result 检查结果
     * @param string $Updatetime 更新时间
     * @param string $Tag 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsIgnore 是否忽略
     * @param integer $IsChecked 检查状态
     * @param string $AssetInfo 资产组信息
     * @param string $AssetId 资产组ES的_id
     * @param string $Detail 详情
     * @param string $Remarks 备注内容
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

        if (array_key_exists("Instid",$param) and $param["Instid"] !== null) {
            $this->Instid = $param["Instid"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Taskid",$param) and $param["Taskid"] !== null) {
            $this->Taskid = $param["Taskid"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Updatetime",$param) and $param["Updatetime"] !== null) {
            $this->Updatetime = $param["Updatetime"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("IsIgnore",$param) and $param["IsIgnore"] !== null) {
            $this->IsIgnore = $param["IsIgnore"];
        }

        if (array_key_exists("IsChecked",$param) and $param["IsChecked"] !== null) {
            $this->IsChecked = $param["IsChecked"];
        }

        if (array_key_exists("AssetInfo",$param) and $param["AssetInfo"] !== null) {
            $this->AssetInfo = $param["AssetInfo"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }
    }
}
