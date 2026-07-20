export const client = 5

export const loadingType = {
    LOADING: 'loading',
    FINISHED: 'finished',
    ERROR: 'error',
    EMPTY: 'empty'
}

export const loginType = {
    SMS: 0,
    ACCOUNT: 1
}

// 短信发送
export const SMSType = {
    // 注册
    REGISTER: 'ZCYZ',
    // 找回密码
    FINDPWD: 'ZHMM',
    // 登陆
    LOGIN: 'YZMDL',
    // 更换手机号
    CHANGE_MOBILE: 'BGSJHM',
    // 绑定手机号
    BIND: 'BDSJHM'
}

export const FieldType = {
    NONE: '',
    SEX: 'sex',
    NICKNAME: 'nickname',
    AVATAR: 'avatar',
    MOBILE: 'mobile'
}

// 售后状态
export const AfterSaleType = {
    // 售后申请 
    NORMAL: 'normal',
    // 处理中
    HANDLING: 'apply',
    // 已处理
    FINISH: 'finish'
}
