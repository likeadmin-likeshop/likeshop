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

namespace TencentCloud\Tag\V20180813;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tag\V20180813\Models as Models;

/**
 * @method Models\AddResourceTagResponse AddResourceTag(Models\AddResourceTagRequest $req) 本接口用于给标签关联资源
 * @method Models\AttachResourcesTagResponse AttachResourcesTag(Models\AttachResourcesTagRequest $req) 给多个资源关联某个标签
 * @method Models\CreateTagResponse CreateTag(Models\CreateTagRequest $req) 本接口用于创建一对标签键和标签值
 * @method Models\DeleteResourceTagResponse DeleteResourceTag(Models\DeleteResourceTagRequest $req) 本接口用于解除标签和资源的关联关系
 * @method Models\DeleteTagResponse DeleteTag(Models\DeleteTagRequest $req) 本接口用于删除一对标签键和标签值
 * @method Models\DescribeResourceTagsResponse DescribeResourceTags(Models\DescribeResourceTagsRequest $req) 查询资源关联标签
 * @method Models\DescribeResourceTagsByResourceIdsResponse DescribeResourceTagsByResourceIds(Models\DescribeResourceTagsByResourceIdsRequest $req) 用于批量查询已有资源关联的标签键值对
 * @method Models\DescribeResourceTagsByResourceIdsSeqResponse DescribeResourceTagsByResourceIdsSeq(Models\DescribeResourceTagsByResourceIdsSeqRequest $req) 按顺序查看资源关联的标签
 * @method Models\DescribeResourceTagsByTagKeysResponse DescribeResourceTagsByTagKeys(Models\DescribeResourceTagsByTagKeysRequest $req) 根据标签键获取资源标签
 * @method Models\DescribeResourcesByTagsResponse DescribeResourcesByTags(Models\DescribeResourcesByTagsRequest $req) 通过标签查询资源列表
 * @method Models\DescribeResourcesByTagsUnionResponse DescribeResourcesByTagsUnion(Models\DescribeResourcesByTagsUnionRequest $req) 通过标签查询资源列表并集
 * @method Models\DescribeTagKeysResponse DescribeTagKeys(Models\DescribeTagKeysRequest $req) 用于查询已建立的标签列表中的标签键。

 * @method Models\DescribeTagValuesResponse DescribeTagValues(Models\DescribeTagValuesRequest $req) 用于查询已建立的标签列表中的标签值。
 * @method Models\DescribeTagValuesSeqResponse DescribeTagValuesSeq(Models\DescribeTagValuesSeqRequest $req) 用于查询已建立的标签列表中的标签值。
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) 用于查询已建立的标签列表。

 * @method Models\DescribeTagsSeqResponse DescribeTagsSeq(Models\DescribeTagsSeqRequest $req) 用于查询已建立的标签列表。

 * @method Models\DetachResourcesTagResponse DetachResourcesTag(Models\DetachResourcesTagRequest $req) 解绑多个资源关联的某个标签
 * @method Models\ModifyResourceTagsResponse ModifyResourceTags(Models\ModifyResourceTagsRequest $req) 本接口用于修改资源关联的所有标签
 * @method Models\ModifyResourcesTagValueResponse ModifyResourcesTagValue(Models\ModifyResourcesTagValueRequest $req) 修改多个资源关联的某个标签键对应的标签值
 * @method Models\UpdateResourceTagValueResponse UpdateResourceTagValue(Models\UpdateResourceTagValueRequest $req) 本接口用于修改资源已关联的标签值（标签键不变）
 */

class TagClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tag.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tag";

    /**
     * @var string
     */
    protected $version = "2018-08-13";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tag")."\\"."V20180813\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
