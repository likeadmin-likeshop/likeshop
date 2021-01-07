// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

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
