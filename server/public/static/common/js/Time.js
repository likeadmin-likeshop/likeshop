var Times = {
    // 获取几天前日期
    getDay: function(day){
        var today = new Date();
        var targetday_milliseconds=today.getTime() + 1000*60*60*24*day;

        today.setTime(targetday_milliseconds);

        var tYear = today.getFullYear();
        var tMonth = today.getMonth();
        var tDate = today.getDate();

        tMonth = Times.doHandleMonth(tMonth + 1);
        tDate = Times.doHandleMonth(tDate);

        return tYear+"-"+tMonth+"-"+tDate;
    }
    // 处理月份
    ,doHandleMonth: function(month){
        var m = month;
        if(month.toString().length === 1){
            m = "0" + month;
        }
        return m;
    },
    /**
     * Notes: 日期时间格式 转 时间戳
     * date: 日期时间 如: 2020-12-1 13:23:11
     */
    tostrtime: function(date) {
        return Date.parse(new Date(date)) / 1000;
    },
    timestampToTime: function(timestamp) {
        var date = new Date(timestamp * 1000);
        var Y = date.getFullYear() + '-';
        var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
        var D = date.getDate() + ' ';
        var h = date.getHours() < 10 ? '0'+date.getHours() + ':' : date.getHours() + ':';
        var m = date.getMinutes() < 10 ? '0'+date.getMinutes() + ':' : date.getMinutes() + ':';
        var s = date.getSeconds() < 10 ? '0'+date.getSeconds() : date.getSeconds();

        return Y + M + D + h + m + s;
    },
    /**
     * Notes: 今天的开始时间和结束时间
     * isStamp: 是否转成时间戳
     */
    today: function(isStamp) {
        isStamp = isStamp === undefined ? true : isStamp;

        var start = Times.getDay(0) + " 00:00:00"
        var end = Times.getDay(0) + " 23:59:59"
        if (isStamp) {
            start = Times.tostrtime(start);
            end = Times.tostrtime(end);
        }
        return [start, end];
    },
    /**
     * Notes: 本月开始和结束
     * isStamp: 是否转成时间戳
     */
    month: function(isStamp) {
        isStamp = isStamp === undefined ? true : isStamp;
        var date=new Date();
        // 开始时间
        var Year = date.getFullYear();
        var Month = (date.getMonth() +1) < 10 ?  '0'+(date.getMonth()+1) : date.getMonth()+1;
        var start = Year  + '-' + Month + '-01 00:00:00'
        // 结束时间
        var currentMonth=date.getMonth();
        var nextMonth=++currentMonth;
        var nextMonthFirstDay=new Date(date.getFullYear(),nextMonth,1);
        var oneDay=1000*60*60*24;
        var lastDate =  new Date(nextMonthFirstDay-oneDay);
        var endDate = lastDate.getFullYear()+"-"+((lastDate.getMonth()+1)<10?"0":"")+(lastDate.getMonth()+1)+"-"+(lastDate.getDate()<10?"0":"")+lastDate.getDate();
        var end = endDate + ' 23:59:59';

        if (isStamp) {
            start = Times.tostrtime(start);
            end = Times.tostrtime(end);
        }
        return [start, end];

    },
    /**
     * 获取几天前零点到现在/昨日结束的时间
     * Notes: 本月开始和结束
     * isStamp: 是否转成时间戳
     */
    dayToNow: function(day, isStamp){
        day = day === undefined ? -1 : day;
        isStamp = isStamp === undefined ? true : isStamp;
        var start = Times.getDay(day) + " 00:00:00";
        var end = Times.getDay(day) + " 23:59:59";
        if (isStamp) {
            start = Times.tostrtime(start);
            end = Times.tostrtime(end);
        }
        return [start, end];
    },
    /**
     * 获取当前时间戳
     */
    curTimestamp : function() {
        return Date.parse(new Date()) / 1000
    }
};