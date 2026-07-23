import axios from 'axios'
import config from '~/config/app'

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

async function issue(loginToken) {
  const host = String(config.baseUrl || '').replace(/\/$/, '')
  if (!host && typeof process !== 'undefined' && process.server) {
    return ''
  }
  const response = await axios.post(`${host}/api/account/consumeToken`, {}, {
    headers: { token: loginToken },
    timeout: 10000
  })
  const result = response.data || {}
  if (result.code === -1) {
    return ''
  }
  if (!result || result.code !== 1) {
    throw new Error(result && result.msg ? result.msg : '消费票据签发失败')
  }

  const token = result.data && result.data.token ? result.data.token : ''
  const expiresIn = Number(result.data && result.data.expires_in) || 30
  cachedLoginToken = loginToken
  cachedToken = token
  refreshAt = Date.now() + (token ? Math.max(expiresIn - 2, 1) : 30) * 1000
  return token
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
