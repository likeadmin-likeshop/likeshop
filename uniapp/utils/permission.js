/**
 * 本模块封装了Android、iOS的应用权限判断、打开应用权限设置界面、以及位置系统服务是否开启
 */

var isIos
// #ifdef APP-PLUS
isIos = (plus.os.name == "iOS")
// #endif

// 判断推送权限是否开启
function judgeIosPermissionPush() {
	var result = 0;
	var UIApplication = plus.ios.import("UIApplication");
	var app = UIApplication.sharedApplication();
	var enabledTypes = 0;
	if (app.currentUserNotificationSettings) {
		var settings = app.currentUserNotificationSettings();
		enabledTypes = settings.plusGetAttribute("types");
		if (enabledTypes == 0) {
			console.log("推送权限没有开启");
		} else {
			result = 1;
			console.log("已经开启推送功能!")
		}
		plus.ios.deleteObject(settings);
	} else {
		enabledTypes = app.enabledRemoteNotificationTypes();
		if (enabledTypes == 0) {
			console.log("推送权限没有开启!");
		} else {
			result = 1;
			console.log("已经开启推送功能!")
		}
		console.log("enabledTypes2:" + enabledTypes);
	}
	plus.ios.deleteObject(app);
	plus.ios.deleteObject(UIApplication);
	return result;
}

// 判断定位权限是否开启
function judgeIosPermissionLocation() {
	var result = 0;
	var cllocationManger = plus.ios.import("CLLocationManager");
	var status = cllocationManger.authorizationStatus();
	result = (status != 2) ? 1 : 0;
	console.log("定位权限开启：" + result);
	// 以下代码判断了手机设备的定位是否关闭，推荐另行使用方法 checkSystemEnableLocation
	/* var enable = cllocationManger.locationServicesEnabled();
	var status = cllocationManger.authorizationStatus();
	console.log("enable:" + enable);
	console.log("status:" + status);
	if (enable && status != 2) {
		result = true;
		console.log("手机定位服务已开启且已授予定位权限");
	} else {
		console.log("手机系统的定位没有打开或未给予定位权限");
	} */
	plus.ios.deleteObject(cllocationManger);
	return {
		result: result,
		permissionName: "定位"
	};
}

// 判断麦克风权限是否开启
function judgeIosPermissionRecord() {
	var result = 0;
	var avaudiosession = plus.ios.import("AVAudioSession");
	var avaudio = avaudiosession.sharedInstance();
	var permissionStatus = avaudio.recordPermission();
	console.log("permissionStatus:" + permissionStatus);
	if (permissionStatus == 1684369017 || permissionStatus == 1970168948) {
		console.log("麦克风权限没有开启");
	} else {
		result = 1;
		console.log("麦克风权限已经开启");
	}
	plus.ios.deleteObject(avaudiosession);
	return {
		result: result,
		permissionName: "麦克风"
	};
}

// 判断相机权限是否开启
function judgeIosPermissionCamera() {
	var result = 0;
	var AVCaptureDevice = plus.ios.import("AVCaptureDevice");
	var authStatus = AVCaptureDevice.authorizationStatusForMediaType('vide');
	console.log("authStatus:" + authStatus);
	if (authStatus == 3) {
		result = 1;
		console.log("相机权限已经开启");
	} else {
		console.log("相机权限没有开启");
	}
	plus.ios.deleteObject(AVCaptureDevice);
	return {
		result: result,
		permissionName: "相机"
	};
}

// 判断相册权限是否开启
function judgeIosPermissionPhotoLibrary() {
	var result = 0;
	var PHPhotoLibrary = plus.ios.import("PHPhotoLibrary");
	var authStatus = PHPhotoLibrary.authorizationStatus();
	console.log("authStatus:" + authStatus);
	if (authStatus == 3) {
		result = 1;
		console.log("相册权限已经开启");
	} else {
		console.log("相册权限没有开启");
	}
	plus.ios.deleteObject(PHPhotoLibrary);
	return {
		result: result,
		permissionName: "相册"
	};
}

// 判断通讯录权限是否开启
function judgeIosPermissionContact() {
	var result = 0;
	var CNContactStore = plus.ios.import("CNContactStore");
	var cnAuthStatus = CNContactStore.authorizationStatusForEntityType(0);
	if (cnAuthStatus == 3) {
		result = 1;
		console.log("通讯录权限已经开启");
	} else {
		console.log("通讯录权限没有开启");
	}
	plus.ios.deleteObject(CNContactStore);
	return {
		result: result,
		permissionName: "通讯录"
	};
}

// 判断日历权限是否开启
function judgeIosPermissionCalendar() {
	var result = 0;
	var EKEventStore = plus.ios.import("EKEventStore");
	var ekAuthStatus = EKEventStore.authorizationStatusForEntityType(0);
	if (ekAuthStatus == 3) {
		result = 1;
		console.log("日历权限已经开启");
	} else {
		console.log("日历权限没有开启");
	}
	plus.ios.deleteObject(EKEventStore);
	return {
		result: result,
		permissionName: "日历"
	};
}

// 判断备忘录权限是否开启
function judgeIosPermissionMemo() {
	var result = 0;
	var EKEventStore = plus.ios.import("EKEventStore");
	var ekAuthStatus = EKEventStore.authorizationStatusForEntityType(1);
	if (ekAuthStatus == 3) {
		result = 1;
		console.log("备忘录权限已经开启");
	} else {
		console.log("备忘录权限没有开启");
	}
	plus.ios.deleteObject(EKEventStore);
	return {
		result: result,
		permissionName: "备忘录"
	};
}

// Android权限查询
function requestAndroidPermission(permissionID, permissionName) {
	return new Promise((resolve, reject) => {
		plus.android.requestPermissions(
			[permissionID], // 理论上支持多个权限同时查询，但实际上本函数封装只处理了一个权限的情况。有需要的可自行扩展封装
			function (resultObj) {
				var result = 0;
				for (var i = 0; i < resultObj.granted.length; i++) {
					var grantedPermission = resultObj.granted[i];
					console.log('已获取的权限：' + grantedPermission);
					result = 1
				}
				for (var i = 0; i < resultObj.deniedPresent.length; i++) {
					var deniedPresentPermission = resultObj.deniedPresent[i];
					console.log('拒绝本次申请的权限：' + deniedPresentPermission);
					result = 0
				}
				for (var i = 0; i < resultObj.deniedAlways.length; i++) {
					var deniedAlwaysPermission = resultObj.deniedAlways[i];
					console.log('永久拒绝申请的权限：' + deniedAlwaysPermission);
					result = -1
				}
				resolve({
					result: result,
					permissionName: permissionName
				});
				// 若所需权限被拒绝,则打开APP设置界面,可以在APP设置界面打开相应权限
				// if (result != 1) {
				// gotoAppPermissionSetting()
				// }
			},
			function (error) {
				console.log('申请权限错误：' + error.code + " = " + error.message);
				resolve({
					code: error.code,
					message: error.message
				});
			}
		);
	});
}

// 使用一个方法，根据参数判断权限
function judgePermission(permissionID, callback) {
	function handle(res) {
		callback && callback(res.result);
		if (res.result === -1 || res.result === 0) {
			uni.showModal({
				title: "提示",
				content: "您未授权" + res.permissionName + "权限,是否去应用设置里授权？",
				confirmText: "确认",
				cancelText: "取消",
				success: (data) => {
					if (data.confirm) {
						gotoAppPermissionSetting();
					}
				}
			});
		}
	}
	if (permissionID == "location") { // 位置
		if (isIos) {
			handle(judgeIosPermissionLocation());
		} else {
			requestAndroidPermission("android.permission.ACCESS_FINE_LOCATION", "位置").then(handle);
		}
	} else if (permissionID == "camera") { // 摄像头
		if (isIos) {
			handle(judgeIosPermissionCamera());
		} else {
			requestAndroidPermission("android.permission.CAMERA", "摄像头").then(handle);
		}
	} else if (permissionID == "photoLibrary") { // 相册
		if (isIos) {
			handle(judgeIosPermissionPhotoLibrary());
		} else {
			requestAndroidPermission("android.permission.READ_EXTERNAL_STORAGE", "相册读取").then(handle);
		}
	} else if (permissionID == "record") { // 麦克风
		if (isIos) {
			handle(judgeIosPermissionRecord());
		} else {
			requestAndroidPermission("android.permission.RECORD_AUDIO", "麦克风").then(handle);
		}
	} else if (permissionID == "push") { // 推送
		if (isIos) {
			handle(judgeIosPermissionPush());
		} else {
			handle(1);
		}
	} else if (permissionID == "contact") { // 通讯录
		if (isIos) {
			handle(judgeIosPermissionContact());
		} else {
			requestAndroidPermission("android.permission.READ_CONTACTS", "通讯录读取").then(handle);
		}
	} else if (permissionID == "calendar") { // 日历
		if (isIos) {
			handle(judgeIosPermissionCalendar());
		} else {
			requestAndroidPermission("android.permission.READ_CALENDAR", "日历读取").then(handle);
		}
	} else if (permissionID == "memo") { // 备忘录
		if (isIos) {
			handle(judgeIosPermissionMemo());
		} else {
			handle(1);
		}
	} else if (permissionID == "call_phone") { // 拨打电话
		if (isIos) {
			handle(1);
		} else {
			requestAndroidPermission("android.permission.CALL_PHONE", "拨打电话").then(handle);
		}
	}
}

// 跳转到**应用**的权限页面
function gotoAppPermissionSetting() {
	if (isIos) {
		var UIApplication = plus.ios.import("UIApplication");
		var application2 = UIApplication.sharedApplication();
		var NSURL2 = plus.ios.import("NSURL");
		// var setting2 = NSURL2.URLWithString("prefs:root=LOCATION_SERVICES");		
		var setting2 = NSURL2.URLWithString("app-settings:");
		application2.openURL(setting2);

		plus.ios.deleteObject(setting2);
		plus.ios.deleteObject(NSURL2);
		plus.ios.deleteObject(application2);
	} else {
		// console.log(plus.device.vendor);
		var Intent = plus.android.importClass("android.content.Intent");
		var Settings = plus.android.importClass("android.provider.Settings");
		var Uri = plus.android.importClass("android.net.Uri");
		var mainActivity = plus.android.runtimeMainActivity();
		var intent = new Intent();
		intent.setAction(Settings.ACTION_APPLICATION_DETAILS_SETTINGS);
		var uri = Uri.fromParts("package", mainActivity.getPackageName(), null);
		intent.setData(uri);
		mainActivity.startActivity(intent);
	}
}

// 检查系统的设备服务是否开启
// var checkSystemEnableLocation = async function () {
function checkSystemEnableLocation() {
	if (isIos) {
		var result = false;
		var cllocationManger = plus.ios.import("CLLocationManager");
		var result = cllocationManger.locationServicesEnabled();
		console.log("系统定位开启:" + result);
		plus.ios.deleteObject(cllocationManger);
		return result;
	} else {
		var context = plus.android.importClass("android.content.Context");
		var locationManager = plus.android.importClass("android.location.LocationManager");
		var main = plus.android.runtimeMainActivity();
		var mainSvr = main.getSystemService(context.LOCATION_SERVICE);
		var result = mainSvr.isProviderEnabled(locationManager.GPS_PROVIDER);
		console.log("系统定位开启:" + result);
		return result
	}
}

module.exports = {
	judgePermission: judgePermission,
	requestAndroidPermission: requestAndroidPermission,
	checkSystemEnableLocation: checkSystemEnableLocation,
	gotoAppPermissionSetting: gotoAppPermissionSetting
}
