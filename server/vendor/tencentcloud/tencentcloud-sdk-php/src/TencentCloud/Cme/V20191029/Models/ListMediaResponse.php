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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListMedia返回参数结构体
 *
 * @method integer getMaterialTotalCount() 获取符合条件的媒体记录总数。
 * @method void setMaterialTotalCount(integer $MaterialTotalCount) 设置符合条件的媒体记录总数。
 * @method array getMaterialInfoSet() 获取浏览分类路径下的媒体列表信息。
 * @method void setMaterialInfoSet(array $MaterialInfoSet) 设置浏览分类路径下的媒体列表信息。
 * @method array getClassInfoSet() 获取浏览分类路径下的一级子类。
 * @method void setClassInfoSet(array $ClassInfoSet) 设置浏览分类路径下的一级子类。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListMediaResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的媒体记录总数。
     */
    public $MaterialTotalCount;

    /**
     * @var array 浏览分类路径下的媒体列表信息。
     */
    public $MaterialInfoSet;

    /**
     * @var array 浏览分类路径下的一级子类。
     */
    public $ClassInfoSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MaterialTotalCount 符合条件的媒体记录总数。
     * @param array $MaterialInfoSet 浏览分类路径下的媒体列表信息。
     * @param array $ClassInfoSet 浏览分类路径下的一级子类。
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
        if (array_key_exists("MaterialTotalCount",$param) and $param["MaterialTotalCount"] !== null) {
            $this->MaterialTotalCount = $param["MaterialTotalCount"];
        }

        if (array_key_exists("MaterialInfoSet",$param) and $param["MaterialInfoSet"] !== null) {
            $this->MaterialInfoSet = [];
            foreach ($param["MaterialInfoSet"] as $key => $value){
                $obj = new MaterialInfo();
                $obj->deserialize($value);
                array_push($this->MaterialInfoSet, $obj);
            }
        }

        if (array_key_exists("ClassInfoSet",$param) and $param["ClassInfoSet"] !== null) {
            $this->ClassInfoSet = [];
            foreach ($param["ClassInfoSet"] as $key => $value){
                $obj = new ClassInfo();
                $obj->deserialize($value);
                array_push($this->ClassInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
