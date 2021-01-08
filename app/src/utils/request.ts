
import NetInfo from "@react-native-community/netinfo";
import { Toast, Portal } from "@ant-design/react-native";
import { clearToken, setStore } from "./auth";
import { navigate } from "./navigation";
import AsyncStorage from "@react-native-community/async-storage";
interface HEADER {
    Accept: string
    'Content-Type': string
    [key: string]: string
}

const STATUS_SUCCESS = 1;
const STATUS_LOGIN_OUT = -1;//token过期
export const api_product = 'http://likeshopv2.yixiangonline.com';
export const api_test = 'http://likeshopv2.yixiangonline.com';

export  let host = api_product;
// export let host = api_test;
let dispatch: any = null;
let timeout = 10 * 1000;
let token: any = null;
let loadingKey: any = null

const HEADER: HEADER = {
    'Accept': 'application/json',
    'Content-Type': 'application/json;charset=UTF-8',
};


const POST = {
    method: 'POST'
};

const GET = {
    method: 'GET'
};

const DELETE = {
    method: 'DELETE'
};
const PUT = {
    method: 'PUT'
};


export function setRequestToken(t: any) {
    token = t
    Object.assign(HEADER, { token: token })
}

export function clearRequestToken() {
    token = null;
    delete HEADER.token;
}

// /**
//  * 配置dispatch
//  * @param dispatchFunc
//  */
export function configDispatchFunc(dispatchFunc: any) {
    dispatch = dispatchFunc;
}

// loading计算方法
let loading:any = null
let timer:any = null
let needLoadingRequestCount = 0 //正在请求网络的接口个数，大于0 并且 500毫秒内接口响应未完成时显示loading
//单个接口时间大于600ms时显示loading
function showFullScreenLoading () {
    // clearTimeout(timer)
    // timer = setTimeout(() => {
    //     if (!loading && needLoadingRequestCount > 0) {
    //         loading = Toast.loading('请稍等...', 0, () => {}, true)
    //     }
    // }, 1000);
    // needLoadingRequestCount ++
}
//加载完数据隐藏loading
function tryHideFullScreenLoading () {
    // if (needLoadingRequestCount <= 0) return
    // needLoadingRequestCount --
    // if (needLoadingRequestCount === 0 && loading) {
    //     Portal.remove(loading)
    //     loading = null
    // }
}
function wrapData(data: any) {
    return {data: data, timestamp: new Date().getTime()};
}
function setStoreData(key: string, value: any, callBack?: () => void) {
    if (!key || !value) return;
    const data = wrapData(value);
    AsyncStorage.setItem(key, JSON.stringify(data), callBack);
}
function getStoreData(key:string) {
    return new Promise((resolve, reject) => {
        AsyncStorage.getItem(key, (error, result) => {
            if (!error) {
                try {
                    // 因为result是个JSON字符串，所以要序列化为JS对象
                    // 把读取成功的结果传递出去
                    resolve(JSON.parse(result as string));
                } catch (e) {
                    // 此处代表序列化失败
                    // 把读取失败的信息传递出去
                    reject(e);
                }
            } else {
                // 把读取失败的信息传递出去
                reject(error);
            }
        })
    })
}
// /**
//  * 可以传入多个参数
//  * @param objs
//  * @returns {phone_imei: string, version: string, platform: string}
//  */
function getRequestObj(...objs: any[]) {
    let params = {
        
    };
    objs.map((item, index) => Object.assign(params, item));
    return params;
}

// //获取统一错误提示
export function getRequestFailTip(responseJson: { msg: any; status: any; }) {
    if (!__DEV__) {
        if (responseJson) {
            return `${responseJson.msg}`;
        } else {
            return `请求发生异常`;
        }
    } else {
        if (responseJson) {
            return `${responseJson.msg}`;
        } else {
            return `请求发生异常`;
        }
    }
}


// /**
//  * POST请求
//  * @param requestUrl
//  * @param requestData
//  * @param showLoadingDialog
//  * @constructor
//  */
export function post(requestUrl: string, requestData = {}, showLoadingDialog = false) {
    return request(requestUrl, POST.method, requestData, showLoadingDialog);
}


// /**
//  * GET请求
//  * @param requestUrl
//  * @param requestData
//  * @param isShowLoadingDialog
//  * @constructor
//  */
export function get(requestUrl: string, requestData = {}, showLoadingDialog = false) {
    return request(requestUrl, GET.method, requestData, showLoadingDialog);
}


// /**
//  * DELETE请求
//  * @param requestUrl
//  * @param requestData
//  * @param isShowLoadingDialog
//  * @constructor
//  */
// export function del(requestUrl, requestData = {},) {
//     return request(requestUrl, DELETE.method, requestData, isShowLoadingDialog,isShowUserInvalidDialog);
// }

// export function put(requestUrl, requestData = {}, isShowLoadingDialog = false,isShowUserInvalidDialog = true) {
//     return request(requestUrl, PUT.method, requestData, isShowLoadingDialog,isShowUserInvalidDialog);
// }


// /**
//  * 请求
//  * @param requestUrl
//  * @param requestMethod
//  * @param requestData
//  * @param isShowLoadingDialog
//  */
export async function request(requestUrl: string, requestMethod: string, requestData: any, showLoadingDialog: boolean) {

    let netIsConnected = (await NetInfo.fetch()).isConnected;
    let urlKey = requestUrl+JSON.stringify(requestData)
    requestData = getRequestObj(requestData);
    //检查空值，并删除空属性
    requestData = checkParams(requestData);
    console.log(`REQUEST:========>
                 URL:   ${host + '/api/' + requestUrl}
                 METHOD:${requestMethod}
                 HEADER:${JSON.stringify(HEADER)}
                 BODY:  ${JSON.stringify(requestData)}`);
    let fetch = new Promise((resolve, reject) => {
        if (!netIsConnected) {
            Toast.info('未连接网络',);
            reject()
            // getStoreData(urlKey).then(({data}: any) => {
            //     resolve(data);
            //     console.log(data)
            // })
        } else {
            if (showLoadingDialog) {
                if (loadingKey) {
                    Portal.remove(loadingKey)
                }
                loadingKey = Toast.loading('请稍等...', 0, () => {}, true)
            }
            showFullScreenLoading()
            doFetch(resolve, reject, requestUrl, requestMethod, requestData, showLoadingDialog);
        }
    });

    return Promise.race([
        fetch,
        new Promise((resolve, reject) => {
            setTimeout(() => {
                if (showLoadingDialog) {
                    Portal.remove(loadingKey)
                }
                // Toast.info('网络请求超时')
                // getStoreData(urlKey).then(({data}: any)=> {
                //     resolve(data);
                // })
            }, timeout);
        })
    ]);
}

function doFetch(resolve: any, reject: any, requestUrl: string, requestMethod: string, requestData: any, showLoadingDialog: boolean) {
    let body = '';
    let entity = {
        method: requestMethod,
        headers: HEADER
    };
    let urlKey = requestUrl+JSON.stringify(requestData)
    if (requestMethod === POST.method || requestMethod === PUT.method) {
        Object.assign(entity, { body: JSON.stringify(requestData) });
    } else if (requestMethod === GET.method || requestMethod === DELETE.method) {
        for (let key in requestData) {
            body += body ? '&' : '';
            body += key + '=' + requestData[key];
        }
        requestUrl += '?' + body;
    }
    fetch(host + '/api/' + requestUrl, entity)
        .then((response: any) => {
            if (!response.ok && (!response.code || response.code !== 200)) {
                Toast.info('网络请求异常',)
                // getStoreData(urlKey).then(({data}: any) => {
                //     resolve(data);
                // })
                tryHideFullScreenLoading()
                return response.json();
                reject({ msg: '网络请求异常', rtnCode: response.status });
            }
            if (response.ok) {
                return response.json();
            }

        }).then((responseData) => {
            // setStoreData(urlKey, responseData,)
            tryHideFullScreenLoading()
            if (responseData.code === 0 && responseData.show) {
                Toast.info(responseData.msg)
            }
            if (showLoadingDialog) {
                Portal.remove(loadingKey)
            }
            if (checkTokenValid(responseData.code)) {
                navigate('Login')
                clearToken()
            } else {
                // postEvent('TOKEN_INVALID');
                resolve(responseData);
            }
            resolve(responseData);
            console.log("RESPONSE:========>", responseData);
            return responseData;
        }).catch((e) => {
            tryHideFullScreenLoading()
            if (showLoadingDialog) {
                Portal.remove(loadingKey)
            }
            reject(e);
            console.log("responseException:=======>" + e.message)
        });
}

// /**
//  * 控制loadingDialog的显示
//  * @param isShowLoadingDialog
//  */
// function controlLoadingDialog(isShowLoadingDialog) {
//     if (dispatch) {
//         dispatch(showLoadingDialog(isShowLoadingDialog));
//     }
// }
// function controlTokenInvalidDialog(isShowUserInvalidDialog) {
//     if (dispatch && isShowUserInvalidDialog) {
//         dispatch(showLoginInvalidDialog(isShowUserInvalidDialog));
//     }
// }

// function controlAuthorizationDialog(isShowAuthorizationDialog) {
//     if (dispatch && isShowAuthorizationDialog) {
//         dispatch(showAuthorizationDialog(isShowAuthorizationDialog));
//     }
// }

// /**
//  * 检查属性是否是null or undefined，是则删除该属性
//  * @param params
//  */
function checkParams(params: any) {
    for (let key in params) {
        const value = params[key];
        if (value === null || value === undefined) {
            delete params[key];
        }
    }
    return params;
}


function checkTokenValid(code: number) {
    if (code === STATUS_LOGIN_OUT) {
        return true
    }
    return false;
}



export function isSuccess(response: any) {
    return response && response.code === STATUS_SUCCESS;
}

// export function isTokenInvalid(response) {
//     return response && (response.code === STATUS_TOKEN_INVALID || response.code === 406);
// }
