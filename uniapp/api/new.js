import request from '@/utils/request'
import {client} from '@/utils/tools'
//文章分类
export function getCategoryList(data) {
    let {type} = data
    let url = type ? 'help/category' : 'article/category'
    delete data.type
    return request.get(url)
}

//文章列表
export function getArticleList(data) {
    let {type} = data
    let url = type ? 'help/lists' : 'article/lists'
    delete data.type
    return request.get(url, {
        params: data
    })
}

// 文章详情
export function getArticleDetail(data) {
    let {type} = data
    let url = type ? 'help/detail' : 'article/detail'
    delete data.type
    return request.get(url, {
        params: { id: data.id }
    })
}