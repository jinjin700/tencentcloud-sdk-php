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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getProjectId() 获取实例所属项目ID。
 * @method void setProjectId(integer $ProjectId) 设置实例所属项目ID。
 * @method string getLaunchConfigurationId() 获取启动配置ID。
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置启动配置ID。
 * @method string getLaunchConfigurationName() 获取启动配置名称。
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) 设置启动配置名称。
 * @method string getInstanceType() 获取实例机型。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
 * @method SystemDisk getSystemDisk() 获取实例系统盘配置信息。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘配置信息。
 * @method array getDataDisks() 获取实例数据盘配置信息。
 * @method void setDataDisks(array $DataDisks) 设置实例数据盘配置信息。
 * @method LimitedLoginSettings getLoginSettings() 获取实例登录设置。
 * @method void setLoginSettings(LimitedLoginSettings $LoginSettings) 设置实例登录设置。
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置。
 * @method array getSecurityGroupIds() 获取实例所属安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组。
 * @method array getAutoScalingGroupAbstractSet() 获取启动配置关联的伸缩组。
 * @method void setAutoScalingGroupAbstractSet(array $AutoScalingGroupAbstractSet) 设置启动配置关联的伸缩组。
 * @method string getUserData() 获取自定义数据。
 * @method void setUserData(string $UserData) 设置自定义数据。
 * @method string getCreatedTime() 获取启动配置创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置启动配置创建时间。
 * @method EnhancedService getEnhancedService() 获取实例的增强服务启用情况与其设置。
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置实例的增强服务启用情况与其设置。
 * @method string getImageId() 获取镜像ID。
 * @method void setImageId(string $ImageId) 设置镜像ID。
 * @method string getLaunchConfigurationStatus() 获取启动配置当前状态。取值范围：<br><li>NORMAL：正常<br><li>IMAGE_ABNORMAL：启动配置镜像异常<br><li>CBS_SNAP_ABNORMAL：启动配置数据盘快照异常<br><li>SECURITY_GROUP_ABNORMAL：启动配置安全组异常<br>
 * @method void setLaunchConfigurationStatus(string $LaunchConfigurationStatus) 设置启动配置当前状态。取值范围：<br><li>NORMAL：正常<br><li>IMAGE_ABNORMAL：启动配置镜像异常<br><li>CBS_SNAP_ABNORMAL：启动配置数据盘快照异常<br><li>SECURITY_GROUP_ABNORMAL：启动配置安全组异常<br>
 * @method string getInstanceChargeType() 获取实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<br><li>POSTPAID_BY_HOUR：按小时后付费
<br><li>SPOTPAID：竞价付费
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<br><li>POSTPAID_BY_HOUR：按小时后付费
<br><li>SPOTPAID：竞价付费
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method array getInstanceTypes() 获取实例机型列表。
 * @method void setInstanceTypes(array $InstanceTypes) 设置实例机型列表。
 */

/**
 *符合条件的启动配置信息的集合。
 */
class LaunchConfiguration extends AbstractModel
{
    /**
     * @var integer 实例所属项目ID。
     */
    public $ProjectId;

    /**
     * @var string 启动配置ID。
     */
    public $LaunchConfigurationId;

    /**
     * @var string 启动配置名称。
     */
    public $LaunchConfigurationName;

    /**
     * @var string 实例机型。
     */
    public $InstanceType;

    /**
     * @var SystemDisk 实例系统盘配置信息。
     */
    public $SystemDisk;

    /**
     * @var array 实例数据盘配置信息。
     */
    public $DataDisks;

    /**
     * @var LimitedLoginSettings 实例登录设置。
     */
    public $LoginSettings;

    /**
     * @var InternetAccessible 公网带宽相关信息设置。
     */
    public $InternetAccessible;

    /**
     * @var array 实例所属安全组。
     */
    public $SecurityGroupIds;

    /**
     * @var array 启动配置关联的伸缩组。
     */
    public $AutoScalingGroupAbstractSet;

    /**
     * @var string 自定义数据。
     */
    public $UserData;

    /**
     * @var string 启动配置创建时间。
     */
    public $CreatedTime;

    /**
     * @var EnhancedService 实例的增强服务启用情况与其设置。
     */
    public $EnhancedService;

    /**
     * @var string 镜像ID。
     */
    public $ImageId;

    /**
     * @var string 启动配置当前状态。取值范围：<br><li>NORMAL：正常<br><li>IMAGE_ABNORMAL：启动配置镜像异常<br><li>CBS_SNAP_ABNORMAL：启动配置数据盘快照异常<br><li>SECURITY_GROUP_ABNORMAL：启动配置安全组异常<br>
     */
    public $LaunchConfigurationStatus;

    /**
     * @var string 实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<br><li>POSTPAID_BY_HOUR：按小时后付费
<br><li>SPOTPAID：竞价付费
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     */
    public $InstanceMarketOptions;

    /**
     * @var array 实例机型列表。
     */
    public $InstanceTypes;
    /**
     * @param integer $ProjectId 实例所属项目ID。
     * @param string $LaunchConfigurationId 启动配置ID。
     * @param string $LaunchConfigurationName 启动配置名称。
     * @param string $InstanceType 实例机型。
     * @param SystemDisk $SystemDisk 实例系统盘配置信息。
     * @param array $DataDisks 实例数据盘配置信息。
     * @param LimitedLoginSettings $LoginSettings 实例登录设置。
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置。
     * @param array $SecurityGroupIds 实例所属安全组。
     * @param array $AutoScalingGroupAbstractSet 启动配置关联的伸缩组。
     * @param string $UserData 自定义数据。
     * @param string $CreatedTime 启动配置创建时间。
     * @param EnhancedService $EnhancedService 实例的增强服务启用情况与其设置。
     * @param string $ImageId 镜像ID。
     * @param string $LaunchConfigurationStatus 启动配置当前状态。取值范围：<br><li>NORMAL：正常<br><li>IMAGE_ABNORMAL：启动配置镜像异常<br><li>CBS_SNAP_ABNORMAL：启动配置数据盘快照异常<br><li>SECURITY_GROUP_ABNORMAL：启动配置安全组异常<br>
     * @param string $InstanceChargeType 实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<br><li>POSTPAID_BY_HOUR：按小时后付费
<br><li>SPOTPAID：竞价付费
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     * @param array $InstanceTypes 实例机型列表。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LimitedLoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AutoScalingGroupAbstractSet",$param) and $param["AutoScalingGroupAbstractSet"] !== null) {
            $this->AutoScalingGroupAbstractSet = [];
            foreach ($param["AutoScalingGroupAbstractSet"] as $key => $value){
                $obj = new AutoScalingGroupAbstract();
                $obj->deserialize($value);
                array_push($this->AutoScalingGroupAbstractSet, $obj);
            }
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("LaunchConfigurationStatus",$param) and $param["LaunchConfigurationStatus"] !== null) {
            $this->LaunchConfigurationStatus = $param["LaunchConfigurationStatus"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }
    }
}
