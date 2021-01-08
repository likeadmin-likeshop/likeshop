export type BottomTabParamList = {
    Home: undefined;  
    Mine: undefined;
    Classify: undefined;
    ShopCart: undefined;
};

export type RootStackParamList = {
    AdPages: undefined;
    Index: undefined;
    GoodsDetail: {
        id: number
    };
    CouponCenter: undefined;
    UserCollection: undefined;
    NewsList: {
        //type为0帮助中心 | 1咨询
        type: 0 | 1
    };
    NewsDetail: {
        id: number ,
        type: 0 | 1
    };
    UserAddress: {type: any} | undefined;
    AddressEdit: {
        // 编辑传 ==> 0  添加 ==> 1
        type: number, 
        id: number
    };
    UserCoupon: undefined;
    Login: undefined;
    RegAccount: undefined;
    ForgetPwd: undefined;
    ConfirmOrder: {
        type?: 'cart',
        goods: any[]
    };
    UserOrder: {
        type: number
    } | undefined;
    OrderDetails: {
        id: number
    };
    ContactService: undefined;
    UserMember: undefined;
    GoodsSearch: {
        id: number
        name: string,
        type: number
    } | undefined;
    GrowthValue: undefined;
    UserWallet: undefined;
    UserProfile: undefined;
    PostSale: undefined;
    ApplyRefund: {
        orderId: number | undefined,
        itemId: number | undefined,
        afterSalesId?: number | undefined
    };
    AfterSalesDetail: {
        afterSalesId: number | undefined,
        orderId?: number | undefined,
        itemId?: number | undefined
    },
    AfterSalesDetailForm: {
        id: number
    },
    UserEvaluation: {
        active?: number
    };
    UserBill: {
        active: number
    };
    GoodsAllEvaluation: {
        id: number
    },
    GoodsReview: {
        id: number
    },
    MyWebView: {
        url: string,
        name?: string
    },
    SetPassWord: {
        mobile: string
    },
    ServerExplain: {
        type: number
    };
    ChangePhone: {
        mobile: string,
        type: number
    }
    Logistics: {
        id: number
    },
    ActivityDetail: {
        id: number,
        title: string,
        name: string,
    },
    PayResult: {
        id: number
    },
} & BottomTabParamList;