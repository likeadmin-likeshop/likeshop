import Cache from './cache'
import { TOKEN } from '../config/cachekey'
import { baseURL } from '../config/app'

let cachedToken = ''
let cachedLoginToken = ''
let refreshAt = 0
let issuingPromise = null
let issuingLoginToken = ''

export async function createConsumeToken(loginToken) {
    if (!loginToken) {
        clearCache()
        return ''
    }
    if (cachedLoginToken === loginToken && Date.now() < refreshAt) {
        return cachedToken
    }
    if (issuingPromise && issuingLoginToken === loginToken) {
        return issuingPromise
    }

    const promise = issue(loginToken)
    issuingPromise = promise
    issuingLoginToken = loginToken
    try {
        return await promise
    } finally {
        if (issuingPromise === promise) {
            issuingPromise = null
            issuingLoginToken = ''
        }
    }
}

export async function refreshConsumeToken(loginToken, failedToken) {
    clearConsumeToken(failedToken)
    return createConsumeToken(loginToken)
}

function issue(loginToken) {
    return new Promise((resolve, reject) => {
        const host = String(baseURL || '').replace(/\/$/, '')
        uni.request({
            url: `${host}/api/account/consumeToken`,
            method: 'POST',
            header: { token: loginToken },
            success(response) {
                const result = response.data || {}
                if (result.code !== 1) {
                    if (result.code === -1) {
                        resolve('')
                        return
                    }
                    reject(new Error(result.msg || '消费票据签发失败'))
                    return
                }
                if (Cache.get(TOKEN) !== loginToken) {
                    resolve('')
                    return
                }
                const token = result.data && result.data.token ? result.data.token : ''
                const expiresIn = Number(result.data && result.data.expires_in) || 30
                cachedLoginToken = loginToken
                cachedToken = token
                refreshAt = Date.now() + (token ? Math.max(expiresIn - 2, 1) : 30) * 1000
                resolve(token)
            },
            fail(error) {
                reject(error)
            }
        })
    })
}

export function clearConsumeToken(expectedToken) {
    if (expectedToken && cachedToken !== expectedToken) {
        return false
    }
    cachedToken = ''
    cachedLoginToken = ''
    refreshAt = 0
    return true
}

function clearCache() {
    clearConsumeToken()
}
