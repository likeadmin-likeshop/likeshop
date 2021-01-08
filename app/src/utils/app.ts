import { Dimensions, StatusBar, NativeModules, Platform } from "react-native";
const { StatusBarManager } = NativeModules;
const  iPhonexStatusBarHeight = 44
const {height, width} = Dimensions.get('window');
export const ScreenWidth = width;
export const ScreenHeight = height;
export const StatusBarHeight = Platform.OS == 'ios' ? StatusBarManager.HEIGHT : StatusBar.currentHeight

export const isiPhoneX =  Platform.OS == 'ios' && iPhonexStatusBarHeight == StatusBarHeight

//用于接口调用时区分设备类型
export const client = Platform.OS == 'ios' ? 3 : 4