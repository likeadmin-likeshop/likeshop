import request from '@/utils/request'

//文章分类
export function getCategoryList(data) {
    let {type} = data
    let url = parseInt(type) ? 'help/category' : 'article/category'
    return request.get(url, {params: data})
}

//文章列表
export function getArticleList(data) {
    let {type} = data
    delete data.type
    let url = parseInt(type) ? 'help/lists' : 'article/lists'
    return request.get(url, {params:data})
}

// 文章详情
export function getArticleDetail(data) {
    let {type} = data
    let url = parseInt(type) ? 'help/detail' : 'article/detail'
    return request.get(url, { params:{id: data.id} })
}
