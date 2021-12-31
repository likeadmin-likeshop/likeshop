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

namespace TencentCloud\Kms\V20190118;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Kms\V20190118\Models as Models;

/**
 * @method Models\ArchiveKeyResponse ArchiveKey(Models\ArchiveKeyRequest $req) 对密钥进行归档，被归档的密钥只能用于解密，不能加密
 * @method Models\AsymmetricRsaDecryptResponse AsymmetricRsaDecrypt(Models\AsymmetricRsaDecryptRequest $req) 使用指定的RSA非对称密钥的私钥进行数据解密，密文必须是使用对应公钥加密的。处于Enabled 状态的非对称密钥才能进行解密操作。
 * @method Models\AsymmetricSm2DecryptResponse AsymmetricSm2Decrypt(Models\AsymmetricSm2DecryptRequest $req) 使用指定的SM2非对称密钥的私钥进行数据解密，密文必须是使用对应公钥加密的。处于Enabled 状态的非对称密钥才能进行解密操作。传入的密文的长度不能超过256字节。
 * @method Models\BindCloudResourceResponse BindCloudResource(Models\BindCloudResourceRequest $req) 记录当前key被哪个云产品的那个资源所使用。如果当前key设置了自动过期，则取消该设置，确保当前key不会自动失效。如果当前关联关系已经创建，也返回成功。
 * @method Models\CancelKeyArchiveResponse CancelKeyArchive(Models\CancelKeyArchiveRequest $req) 取消密钥归档，取消后密钥的状态变为Enabled。
 * @method Models\CancelKeyDeletionResponse CancelKeyDeletion(Models\CancelKeyDeletionRequest $req) 取消CMK的计划删除操作
 * @method Models\CreateKeyResponse CreateKey(Models\CreateKeyRequest $req) 创建用户管理数据密钥的主密钥CMK（Custom Master Key）。
 * @method Models\CreateWhiteBoxKeyResponse CreateWhiteBoxKey(Models\CreateWhiteBoxKeyRequest $req) 创建白盒密钥。 密钥个数的上限为 50。
 * @method Models\DecryptResponse Decrypt(Models\DecryptRequest $req) 本接口用于解密密文，得到明文数据。
 * @method Models\DeleteImportedKeyMaterialResponse DeleteImportedKeyMaterial(Models\DeleteImportedKeyMaterialRequest $req) 用于删除导入的密钥材料，仅对EXTERNAL类型的CMK有效，该接口将CMK设置为PendingImport 状态，并不会删除CMK，在重新进行密钥导入后可继续使用。彻底删除CMK请使用 ScheduleKeyDeletion 接口。
 * @method Models\DeleteWhiteBoxKeyResponse DeleteWhiteBoxKey(Models\DeleteWhiteBoxKeyRequest $req) 删除白盒密钥, 注意：必须先禁用后，才可以删除。
 * @method Models\DescribeKeyResponse DescribeKey(Models\DescribeKeyRequest $req) 用于获取指定KeyId的主密钥属性详情信息。
 * @method Models\DescribeKeysResponse DescribeKeys(Models\DescribeKeysRequest $req) 该接口用于批量获取主密钥属性信息。
 * @method Models\DescribeWhiteBoxDecryptKeyResponse DescribeWhiteBoxDecryptKey(Models\DescribeWhiteBoxDecryptKeyRequest $req) 获取白盒解密密钥
 * @method Models\DescribeWhiteBoxDeviceFingerprintsResponse DescribeWhiteBoxDeviceFingerprints(Models\DescribeWhiteBoxDeviceFingerprintsRequest $req) 获取指定密钥的设备指纹列表
 * @method Models\DescribeWhiteBoxKeyResponse DescribeWhiteBoxKey(Models\DescribeWhiteBoxKeyRequest $req) 展示白盒密钥的信息
 * @method Models\DescribeWhiteBoxKeyDetailsResponse DescribeWhiteBoxKeyDetails(Models\DescribeWhiteBoxKeyDetailsRequest $req) 获取白盒密钥列表
 * @method Models\DescribeWhiteBoxServiceStatusResponse DescribeWhiteBoxServiceStatus(Models\DescribeWhiteBoxServiceStatusRequest $req) 获取白盒密钥服务状态
 * @method Models\DisableKeyResponse DisableKey(Models\DisableKeyRequest $req) 本接口用于禁用一个主密钥，处于禁用状态的Key无法用于加密、解密操作。
 * @method Models\DisableKeyRotationResponse DisableKeyRotation(Models\DisableKeyRotationRequest $req) 对指定的CMK禁止密钥轮换功能。
 * @method Models\DisableKeysResponse DisableKeys(Models\DisableKeysRequest $req) 该接口用于批量禁止CMK的使用。
 * @method Models\DisableWhiteBoxKeyResponse DisableWhiteBoxKey(Models\DisableWhiteBoxKeyRequest $req) 禁用白盒密钥
 * @method Models\DisableWhiteBoxKeysResponse DisableWhiteBoxKeys(Models\DisableWhiteBoxKeysRequest $req) 批量禁用白盒密钥
 * @method Models\EnableKeyResponse EnableKey(Models\EnableKeyRequest $req) 用于启用一个指定的CMK。
 * @method Models\EnableKeyRotationResponse EnableKeyRotation(Models\EnableKeyRotationRequest $req) 对指定的CMK开启密钥轮换功能。
 * @method Models\EnableKeysResponse EnableKeys(Models\EnableKeysRequest $req) 该接口用于批量启用CMK。
 * @method Models\EnableWhiteBoxKeyResponse EnableWhiteBoxKey(Models\EnableWhiteBoxKeyRequest $req) 启用白盒密钥
 * @method Models\EnableWhiteBoxKeysResponse EnableWhiteBoxKeys(Models\EnableWhiteBoxKeysRequest $req) 批量启用白盒密钥
 * @method Models\EncryptResponse Encrypt(Models\EncryptRequest $req) 本接口用于加密最多为4KB任意数据，可用于加密数据库密码，RSA Key，或其它较小的敏感信息。对于应用的数据加密，使用GenerateDataKey生成的DataKey进行本地数据的加解密操作
 * @method Models\EncryptByWhiteBoxResponse EncryptByWhiteBox(Models\EncryptByWhiteBoxRequest $req) 使用白盒密钥进行加密
 * @method Models\GenerateDataKeyResponse GenerateDataKey(Models\GenerateDataKeyRequest $req) 本接口生成一个数据密钥，您可以用这个密钥进行本地数据的加密。
 * @method Models\GenerateRandomResponse GenerateRandom(Models\GenerateRandomRequest $req) 随机数生成接口。
 * @method Models\GetKeyRotationStatusResponse GetKeyRotationStatus(Models\GetKeyRotationStatusRequest $req) 查询指定的CMK是否开启了密钥轮换功能。
 * @method Models\GetParametersForImportResponse GetParametersForImport(Models\GetParametersForImportRequest $req) 获取导入主密钥（CMK）材料的参数，返回的Token作为执行ImportKeyMaterial的参数之一，返回的PublicKey用于对自主导入密钥材料进行加密。返回的Token和PublicKey 24小时后失效，失效后如需重新导入，需要再次调用该接口获取新的Token和PublicKey。
 * @method Models\GetPublicKeyResponse GetPublicKey(Models\GetPublicKeyRequest $req) 该接口用户获取 KeyUsage为ASYMMETRIC_DECRYPT_RSA_2048 和 ASYMMETRIC_DECRYPT_SM2 的非对称密钥的公钥信息，使用该公钥用户可在本地进行数据加密，使用该公钥加密的数据只能通过KMS使用对应的私钥进行解密。只有处于Enabled状态的非对称密钥才可能获取公钥。
 * @method Models\GetRegionsResponse GetRegions(Models\GetRegionsRequest $req) 获取支持的地域列表
 * @method Models\GetServiceStatusResponse GetServiceStatus(Models\GetServiceStatusRequest $req) 用于查询该用户是否已开通KMS服务
 * @method Models\ImportKeyMaterialResponse ImportKeyMaterial(Models\ImportKeyMaterialRequest $req) 用于导入密钥材料。只有类型为EXTERNAL 的CMK 才可以导入，导入的密钥材料使用 GetParametersForImport 获取的密钥进行加密。可以为指定的 CMK 重新导入密钥材料，并重新指定过期时间，但必须导入相同的密钥材料。CMK 密钥材料导入后不可以更换密钥材料。导入的密钥材料过期或者被删除后，指定的CMK将无法使用，需要再次导入相同的密钥材料才能正常使用。CMK是独立的，同样的密钥材料可导入不同的 CMK 中，但使用其中一个 CMK 加密的数据无法使用另一个 CMK解密。
只有Enabled 和 PendingImport状态的CMK可以导入密钥材料。
 * @method Models\ListAlgorithmsResponse ListAlgorithms(Models\ListAlgorithmsRequest $req) 列出当前Region支持的加密方式
 * @method Models\ListKeyDetailResponse ListKeyDetail(Models\ListKeyDetailRequest $req) 根据指定Offset和Limit获取主密钥列表详情。
 * @method Models\ListKeysResponse ListKeys(Models\ListKeysRequest $req) 列出账号下面状态为Enabled， Disabled 和 PendingImport 的CMK KeyId 列表
 * @method Models\OverwriteWhiteBoxDeviceFingerprintsResponse OverwriteWhiteBoxDeviceFingerprints(Models\OverwriteWhiteBoxDeviceFingerprintsRequest $req) 覆盖指定密钥的设备指纹信息
 * @method Models\ReEncryptResponse ReEncrypt(Models\ReEncryptRequest $req) 使用指定CMK对密文重新加密。
 * @method Models\ScheduleKeyDeletionResponse ScheduleKeyDeletion(Models\ScheduleKeyDeletionRequest $req) CMK计划删除接口，用于指定CMK删除的时间，可选时间区间为[7,30]天
 * @method Models\SignByAsymmetricKeyResponse SignByAsymmetricKey(Models\SignByAsymmetricKeyRequest $req) 非对称密钥签名。
注意：只有成功创建了KeyUsage= ASYMMETRIC_SIGN_VERIFY_SM2 的密钥才可以使用签名功能
 * @method Models\UnbindCloudResourceResponse UnbindCloudResource(Models\UnbindCloudResourceRequest $req) 删除指定（key, 资源，云产品）的记录，以表明：指定的云产品的资源已不再使用当前的key。
 * @method Models\UpdateAliasResponse UpdateAlias(Models\UpdateAliasRequest $req) 用于修改CMK的别名。对于处于PendingDelete状态的CMK禁止修改。
 * @method Models\UpdateKeyDescriptionResponse UpdateKeyDescription(Models\UpdateKeyDescriptionRequest $req) 该接口用于对指定的cmk修改描述信息。对于处于PendingDelete状态的CMK禁止修改。
 * @method Models\VerifyByAsymmetricKeyResponse VerifyByAsymmetricKey(Models\VerifyByAsymmetricKeyRequest $req) 使用非对称密钥验签
 */

class KmsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "kms.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "kms";

    /**
     * @var string
     */
    protected $version = "2019-01-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("kms")."\\"."V20190118\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
