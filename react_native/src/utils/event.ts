import { DeviceEventEmitter, NativeEventEmitter, NativeModules, EmitterSubscription } from "react-native";

export const postEvent = (event: string, value?: any) => {
    DeviceEventEmitter.emit(event, value);
};

export const registerEvent = (event:string, callback: (value: any) => void): EmitterSubscription => {
    return DeviceEventEmitter.addListener(event, (value) => {
        if (callback) {
            callback(value);
        }
    })
};

export const registerEventToNative = (moduleName:any, event: string, callback: (value: any) => void) => {
    if (!NativeModules[moduleName]) return;
    return (new NativeEventEmitter(NativeModules[moduleName])).addListener(event, (value) => {
        if (callback) {
            callback(value);
        }
    });
};