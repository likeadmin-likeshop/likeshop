var canClick = true;
var installIndex = 0;

String.prototype.format = function(args)
{
    if (arguments.length > 0)
    {
        var result = this;
        if (arguments.length === 1 && typeof (args) == "object")
        {
            for (var key in args)
            {
                var reg = new RegExp("({" + key + "})", "g");
                result = result.replace(reg, args[key]);
            }
        }
        else
        {
            for (var i = 0; i < arguments.length; i++)
            {
                if (arguments[i] === undefined)
                {
                    return "";
                }
                else
                {
                    var reg = new RegExp("({[" + i + "]})", "g");
                    result = result.replace(reg, arguments[i]);
                }
            }
        }
        return result;
    }
    else
    {
        return this;
    }
};

/**
 * 将内容推送到内容里面
 */
function pushSuccessTableToBox(successLine) {
    var installBox = document.getElementById('install_message');


        var div = document.createElement('div');
        div.className = 'item-cell';
        var lineHtml = `
            <div style="display: flex;align-items: center;">
            <div class="layui-icon green">&#xe605;</div>
        <div style="margin-left: 10px;">创建数据表{0}完成！</div>
        </div>
        <div>{1}</div>
        `;
        div.innerHTML = lineHtml.format(successLine[0], successLine[1]);

        installBox.append(div);

}

function showParts(index) {
    function getRndInteger(min, max) {
        return Math.floor(Math.random() * (max - min) ) + min;
    }

    if (index <= successTables.length) {
        setTimeout(function () { pushSuccessTableToBox(successTables[index]); showParts(++index); }, getRndInteger(50, 150));
    }

    if (index === successTables.length) {
        goStep(5);
    }
}

function goStep(step) {
    //var form = document.getElementsByTagName('form')[0];
    if (canClick === false)
        return;

    canClick = false;
    document.main_form.action = "?step=" + step;
    document.main_form.submit();
    // form.action = "?step=" + step;
    // window.location.href = "?step=" + step;
}

function cancel() {
    window.history.go(-1);
}

setTimeout(function () {
    showParts(0);
}, 100);