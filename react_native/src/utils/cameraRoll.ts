import { Toast } from "@ant-design/react-native"
import { PermissionsAndroid, Platform } from "react-native"
import RNFS from 'react-native-fs'
import CameraRoll from "@react-native-community/cameraroll";

async function requestReadPermission() {
    const permission = PermissionsAndroid.PERMISSIONS.WRITE_EXTERNAL_STORAGE;
    const hasPermission = await PermissionsAndroid.check(permission);
    if (hasPermission) {
        return true;
    }
    const status = await PermissionsAndroid.request(permission);
    return status === 'granted';
}

function isBase64(str: any) {
    if (str.indexOf('data:') != -1 && str.indexOf('base64') != -1) {
        return true;
    } else {
        return false;
    }
}
export  function saveImageToRoll(url: string) {
    return new Promise(async (resolve, reject) => {
        if (Platform.OS == 'android' && await requestReadPermission()) {
            const storeLocation = RNFS.DocumentDirectoryPath
            let pathName = new Date().getTime() + Math.random() * (9999 - 1000) + ".png";
            let downloadPath = `${storeLocation}/${pathName}`;
            if (isBase64(url)) {
                const imageDatas = url.split('data:image/png;base64,')[1];
                RNFS.writeFile(downloadPath, imageDatas, 'base64').then(() => {
                    saveCameraRoll(downloadPath, resolve, reject)
                })
            } else {
                RNFS.downloadFile({ fromUrl: url, toFile: downloadPath }).promise.then(() => {
                    saveCameraRoll(downloadPath, resolve, reject)
                })
            }
        } else {
            saveCameraRoll(url, resolve, reject)
        }
    })
}

function saveCameraRoll(url: string,resolve: () => void, reject:  () => void) {
    CameraRoll.save(url, { type: 'photo' }).then(() => {
        resolve()
        Toast.info('图片已保存到相册', 1.5)
    }).catch((error) => {
        reject()
        Toast.info("保存失败")
    })
}


