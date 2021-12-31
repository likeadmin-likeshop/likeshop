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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTableTags请求参数结构体
 *
 * @method string getClusterId() 获取待修改标签表格所属集群ID
 * @method void setClusterId(string $ClusterId) 设置待修改标签表格所属集群ID
 * @method array getSelectedTables() 获取待修改标签表格列表
 * @method void setSelectedTables(array $SelectedTables) 设置待修改标签表格列表
 * @method array getReplaceTags() 获取待增加或修改的标签列表
 * @method void setReplaceTags(array $ReplaceTags) 设置待增加或修改的标签列表
 * @method array getDeleteTags() 获取待删除的标签列表
 * @method void setDeleteTags(array $DeleteTags) 设置待删除的标签列表
 */
class ModifyTableTagsRequest extends AbstractModel
{
    /**
     * @var string 待修改标签表格所属集群ID
     */
    public $ClusterId;

    /**
     * @var array 待修改标签表格列表
     */
    public $SelectedTables;

    /**
     * @var array 待增加或修改的标签列表
     */
    public $ReplaceTags;

    /**
     * @var array 待删除的标签列表
     */
    public $DeleteTags;

    /**
     * @param string $ClusterId 待修改标签表格所属集群ID
     * @param array $SelectedTables 待修改标签表格列表
     * @param array $ReplaceTags 待增加或修改的标签列表
     * @param array $DeleteTags 待删除的标签列表
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }

        if (array_key_exists("ReplaceTags",$param) and $param["ReplaceTags"] !== null) {
            $this->ReplaceTags = [];
            foreach ($param["ReplaceTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->ReplaceTags, $obj);
            }
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = [];
            foreach ($param["DeleteTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->DeleteTags, $obj);
            }
        }
    }
}
