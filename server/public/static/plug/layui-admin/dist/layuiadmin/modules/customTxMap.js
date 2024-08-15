
layui.define(["jquery", "form"], function (exports) {
    var map,markerLayer,longitudeName,latitudeName;

    var obj = {
        initMap: function (elementId,longitude=116.307484,latitude=39.984120,longitudeInputName='longitude',latitudeInputName='latitude') {
            longitudeName = longitudeInputName;
            latitudeName = latitudeInputName;
            //定义地图中心点坐标
            var center = new TMap.LatLng(latitude, longitude)
            //定义map变量，调用 TMap.Map() 构造函数创建地图
            map = new TMap.Map(document.getElementById(elementId), {
                center: center,//设置地图中心点坐标
                zoom: 17.2,   //设置地图缩放级别
                pitch: 43.5,  //设置俯仰角
                rotation: 45    //设置地图旋转角度
            });

            //创建并初始化MultiMarker点标记
            markerLayer = new TMap.MultiMarker({
                map: map,  //指定地图容器
                //样式定义
                styles: {
                    //创建一个styleId为"myStyle"的样式（styles的子属性名即为styleId）
                    "myStyle": new TMap.MarkerStyle({
                        "width": 25,  // 点标记样式宽度（像素）
                        "height": 35, // 点标记样式高度（像素）
                        // "src": '/static/common/image/default/icon_address.png',  //图片路径
                        //焦点在图片中的像素位置，一般大头针类似形式的图片以针尖位置做为焦点，圆形点以圆心位置为焦点
                        "anchor": { x: 16, y: 32 }
                    })
                },
                //点标记数据数组
                geometries: [{
                    "id": "1",   //点标记唯一标识，后续如果有删除、修改位置等操作，都需要此id
                    "styleId": 'myStyle',  //指定样式id
                    "position": new TMap.LatLng(latitude, longitude),  //点标记坐标位置
                }
                ]
            });

            //Map实例创建后，通过on方法绑定点击事件
            map.on("click",obj.clickHandler)
        },
        clickHandler:function (evt) {
            var lat = evt.latLng.getLat().toFixed(6);
            var lng = evt.latLng.getLng().toFixed(6);

            obj.changeCoordinate(lat,lng);
        },
        changeCoordinate:function(lat,lng){
            //修改id为4的点标记的位置
            markerLayer.updateGeometries([
                {
                    "id": "1",
                    "styleId":"myStyle",
                    "position": new TMap.LatLng(lat, lng),
                }
            ])

            //修改地图中心点
            map.setCenter(new TMap.LatLng(lat,lng));
            //获取地图中心点
            // var centerLatLng = map.getCenter();

            $("input[name="+longitudeName+"]").val(lng);
            $("input[name="+latitudeName+"]").val(lat);
        },
        searchMap:function (address) {
            //正逆地址解析
            var geocoder = new TMap.service.Geocoder();
            //根据指定的文字地址转换为经纬度，并同时提供结构化的省市区地址信息
            geocoder.getLocation({address:address}).then((res)=>{
                if (res.status != 0) {
                    layui.layer.msg(res.message);
                    console.log('获取经纬度错误：',res);
                    return;
                }
                obj.changeCoordinate(res.result.location.lat,res.result.location.lng);
            }).catch((res)=>{
                layui.layer.msg(res.message);
                console.log('获取经纬度错误：',res)
            })
        }
    };
    exports("customTxMap", obj);
});




