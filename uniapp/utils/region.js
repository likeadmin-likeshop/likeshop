import { getRegionLists } from '@/api/user'
import Cache from '@/utils/cache'
import { REGION_TREE } from '@/config/cachekey'

const REGION_CACHE_SECONDS = 7 * 24 * 60 * 60
let loadingPromise = null

export function loadRegionTree() {
    const cached = Cache.get(REGION_TREE)
    if (Array.isArray(cached) && cached.length) {
        return Promise.resolve(cached)
    }

    if (loadingPromise) {
        return loadingPromise
    }

    loadingPromise = getRegionLists().then((response) => {
        if (response && response.code === 1 && Array.isArray(response.data)) {
            Cache.set(REGION_TREE, response.data, REGION_CACHE_SECONDS)
            return response.data
        }
        throw new Error(response && response.msg ? response.msg : '地区数据加载失败')
    })

    return loadingPromise.then(
        (data) => {
            loadingPromise = null
            return data
        },
        (error) => {
            loadingPromise = null
            throw error
        }
    )
}
