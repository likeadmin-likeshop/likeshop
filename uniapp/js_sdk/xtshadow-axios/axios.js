/* !
  * uni-axios-ts
  * library v0.0.4
  * github address https://gitee.com/codeweb/uni-axios-ts.git
  * 
  * (c) 2019.12 xtshadow
  */

(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global = global || self, global.axios = factory());
}(this, (function () { 'use strict';

    /**
     * 请求Method类型
     */
    var Method;

    (function (Method) {
      Method["GET"] = "GET";
      Method["POST"] = "POST";
      Method["PUT"] = "PUT";
      Method["HEAD"] = "HEAD";
      Method["DELETE"] = "DELETE";
      Method["TRACE"] = "TRACE";
      Method["CONNECT"] = "CONNECT";
      Method["OPTIONS"] = "OPTIONS";
    })(Method || (Method = {}));
    /**
     * 响应的数据类型
     */


    var HttpResponseType;

    (function (HttpResponseType) {
      HttpResponseType["TEXT"] = "text";
      HttpResponseType["ARRAYBUFFER"] = "arraybuffer";
    })(HttpResponseType || (HttpResponseType = {}));

    var AxiosError =
    /*@__PURE__*/
    function (Error) {
      function AxiosError(message, statusCode, config, request, response) {
        Error.call(this, message);
        this.config = config;
        this.statusCode = statusCode;
        this.request = request;
        this.response = response;
        Object.setPrototypeOf(this, AxiosError.prototype);
      }

      if (Error) AxiosError.__proto__ = Error;
      AxiosError.prototype = Object.create(Error && Error.prototype);
      AxiosError.prototype.constructor = AxiosError;
      return AxiosError;
    }(Error);
    function createError(message, statusCode, config, request, response) {
      var error = new AxiosError(message, statusCode, config, request, response);
      return error;
    }

    /**
     * 执行请求,调用微信Request方法
     * @param config
     */

    function wxRequest(config) {
      var url = config.url;
      var method = config.method;
      if (method === void 0) method = Method.GET;
      var data = config.data;
      if (data === void 0) data = {};
      var header = config.header;
      if (header === void 0) header = {};
      var responseType = config.responseType;
      if (responseType === void 0) responseType = HttpResponseType.TEXT;
      var cancelToken = config.cancelToken;
      var validateStatus = config.validateStatus;
      return new Promise(function (resolve, reject) {
        // @ts-ignore
        var requestTask = uni.request({
          url: url,
          header: header,
          method: method,
          data: data,
          responseType: responseType,
          success: function success(res) {
            var response = {
              data: res.data,
              statusCode: res.statusCode,
              header: res.header
            };

            if (!validateStatus || validateStatus(res.statusCode)) {
              resolve(response);
            } else {
              reject(createError("Request failed with status code " + response.statusCode, response.statusCode, config, requestTask, response));
            }
          },
          fail: function fail(error) {
            reject(createError("Net Error", 1001, config, requestTask));
          }
        }); // 请求取消

        if (cancelToken) {
          cancelToken.promise.then(function (reason) {
            requestTask.abort();
            reject(reason);
          });
        }
      });
    }

    function _typeof(obj) {
      if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
        _typeof = function (obj) {
          return typeof obj;
        };
      } else {
        _typeof = function (obj) {
          return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
        };
      }

      return _typeof(obj);
    }

    var toString = Object.prototype.toString;
    /**
     * Determine if a value is an Array
     *
     * @param {Object} val The value to test
     * @returns {boolean} True if value is an Array, otherwise false
     */

    function isArray(val) {
      return toString.call(val) === '[object Array]';
    }
    /**
     * 确定值是否为对象
     *
     * @param {Object} val 要测试的值
     * @returns {boolean} 如果值是对象，则为true；否则为false
     */

    function isObject(val) {
      return val !== null && _typeof(val) === 'object';
    }
    /**
    * 迭代Array或为每个项目调用函数的对象。
    *
    * 如果`obj`为数组回调将被调用传递。
    * 每项的值、索引和完整数组。
    *
    * 如果`obj`是一个对象回调将被调用传递。
    * 每个属性的值、键和Complete对象。
    *
    * @param{object|Array} obj要迭代的对象。
    * @param{function} fn要为每个项调用的回调。
    */

    function forEach(obj, fn) {
      if (obj !== null && typeof obj !== 'undefined') {
        // Force an array if not already something iterable
        // 数组也属于对象
        if (_typeof(obj) !== 'object') {
          /*eslint no-param-reassign:0*/
          obj = [obj];
        }

        if (isArray(obj)) {
          // Iterate over array values
          for (var i = 0, l = obj.length; i < l; i++) {
            fn.call(null, obj[i], i, obj);
          }
        } else {
          // Iterate over object keys
          Object.getOwnPropertyNames(obj).forEach(function (key) {
            if (Object.prototype.hasOwnProperty.call(obj, key) && key !== 'constructor') {
              fn.call(null, obj[key], key, obj);
            }
          }); // for (let key in obj) {
          //     console.log(`forin key:${key}`);
          //     if (Object.prototype.hasOwnProperty.call(obj, key)) {
          //         console.log(`callback:${key}`)
          //         fn.call(null, obj[key], key, obj);
          //     }
          // }
        }
      }
    }
    /**
     * 通过可变地向`对象A`添加`对象B`的属性来扩展`对象A`
     *
     * @param {Object} a 要扩展的对象
     * @param {Object} b 要从中复制属性的对象
     * @param {Object} thisArg 要将函数绑定到的对象
     * @return {Object} 对象a的结果
     */

    function extend(a, b, thisArg) {
      forEach(b, function assignValue(val, key) {
        if (thisArg && typeof val === 'function') {
          // a[key] = bind(val, thisArg);
          a[key] = val.bind(thisArg);
        } else {
          a[key] = val;
        }
      });
      return a;
    }
    /**
     * 函数等于merge，差值为无引用
     * 保留为原始对象
     * @see merge
     * @param {Object} obj1 Object to merge
     * @returns {Object} Result of all merge properties
     */

    function deepMerge() {
      var objs = [],
          len = arguments.length;

      while (len--) {
        objs[len] = arguments[len];
      }

      var result = Object.create(null);

      function assignValue(val, key) {
        if (isObject(result[key] && isObject(val))) {
          result[key] = deepMerge(result[key], val);
        } else if (isObject(val)) {
          result[key] = deepMerge({}, val);
        } else {
          result[key] = val;
        }
      }

      for (var i = 0; i < objs.length; i++) {
        var obj = objs[i];

        for (var key in obj) {
          assignValue(obj[key], key);
        }
      }

      return result;
    }

    /**
     * 标准格式化请求头
     * @param headers 请求头对象
     * @param normalizeName 标准名称
     */

    function normalizeHeaderName(header, normalizeName) {
      Object.keys(header).forEach(function (name) {
        if (name !== normalizeName && name.toUpperCase() === normalizeName.toUpperCase()) {
          header[normalizeName] = header[name];
          delete header[name];
        }
      });
    }
    /**
     * 格式化加工 Header请求头
     * @param headers
     */


    function processHeaders(header) {
      normalizeHeaderName(header, 'Content-Type');
      normalizeHeaderName(header, 'appId');
      normalizeHeaderName(header, 'sessionId');
      return header;
    }
    /**
     * 请求头扁平化
     *
     * @param headers
     * @param method
     */

    function flattenHeaders(headers, method) {
      if (!headers) {
        return headers;
      }

      headers = deepMerge(headers.common || {}, headers[method.toLocaleLowerCase()] || {}, headers);
      var methodsToDelete = ['delete', 'get', 'head', 'options', 'post', 'put', 'patch', 'common'];
      methodsToDelete.forEach(function (method) {
        delete headers[method];
      });
      return headers;
    }

    /**
     * 组合URL
     * @param baseURL
     * @param relativeUrl
     */
    function combineURL(baseURL, relativeURL) {
      return relativeURL ? baseURL.replace(/\/+$/, "") + "/" + relativeURL.replace(/^\/+/, "") : baseURL;
    }
    /**
     * 判断`URL`是否是绝对路径
     * @param url
     * @return {boolean}
     */

    function isAbsoluteURL(url) {
      // 如果URL以“<scheme>：//”或“//”（协议相对URL）开头，则该URL被视为绝对值。
      // RFC 3986将方案名称定义为以字母开头的字符序列，
      // 后跟字母，数字，加号，句点或连字符的任意组合。
      return /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(url);
    }

    /**
     * 处理请求头
     * @param config
     */

    function transformHeaders(config) {
      var header = config.header;
      if (header === void 0) header = {};
      var method = config.method;
      if (method === void 0) method = Method.GET;
      header = processHeaders(header);
      return flattenHeaders(header, method);
    }
    /**
     * 处理请求地址 URL
     * @param config
     */

    function transformUrl(config) {
      var url = config.url;
      if (url === void 0) url = '';
      var baseURL = config.baseURL;
      if (baseURL === void 0) baseURL = '';

      if (baseURL && !isAbsoluteURL(url)) {
        url = combineURL(baseURL, url);
      }

      return url;
    }
    /**
     * 抛出异常
     *
     * 如果当前`cancelToken`已经取消请求，则抛出异常
     * @param config
     */

    function throwIfCancellationRequested(config) {
      if (config.cancelToken) {
        config.cancelToken.throwIfRequested();
      }
    }
    /**
     * 预处理配置文件
     * @param config 配置文件
     */

    function processConfig(config) {
      config.header = transformHeaders(config);
      config.url = transformUrl(config);
    }
    /**
     * 执行请求
     * @param config 配置文件
     */

    function dispatchRequest(config) {
      throwIfCancellationRequested(config);
      processConfig(config);
      return wxRequest(config);
    }

    var InterceptorManager = function InterceptorManager() {
      this.handlers = [];
    };

    InterceptorManager.prototype.use = function use(resolved, rejected) {
      this.handlers.push({
        resolved: resolved,
        rejected: rejected
      });
      return this.handlers.length - 1;
    };

    InterceptorManager.prototype.eject = function eject(id) {
      if (this.handlers[id]) {
        this.handlers[id] = null;
      }
    };

    InterceptorManager.prototype.forEach = function forEach(fn) {
      this.handlers.forEach(function (interceptor) {
        if (interceptor !== null) {
          fn(interceptor);
        }
      });
    };

    function mergeConfig(defaultConfig, userConfig) {
      var config = Object.create(null); // 创建空对象，作为最终的合并结果
      // 1.常规属性，如果用户配置了就用用户配置的，如果用户没配置，则用默认配置的；

      var defaultToUserConfig = ["baseURL", "transformRequest", "transformResponse", "paramsSerializer", "timeout", "withCredentials", "adapter", "responseType", "xsrfCookieName", "xsrfHeaderName", "onUploadProgress", "onDownloadProgress", "maxContentLength", "validateStatus", "maxRedirects", "httpAgent", "httpsAgent", "cancelToken", "socketPath"];
      defaultToUserConfig.forEach(function (prop) {
        userConfig = userConfig || {}; // 如果用户配置里有

        if (typeof userConfig[prop] !== "undefined") {
          // 则用用户配置里的
          config[prop] = userConfig[prop]; // 如果用户配置里没有，默认配置里有
        } else if (typeof defaultConfig[prop] !== "undefined") {
          // 则用默认配置里的
          config[prop] = defaultConfig[prop];
        }
      }); // 2.只接受用户配置,不管默认配置对象里面有没有，我们只取用户配置的；

      var valueFromUserConfig = ["url", "method", "params", "data"];
      valueFromUserConfig.forEach(function (prop) {
        userConfig = userConfig || {};

        if (typeof userConfig[prop] !== 'undefined') {
          config[prop] = userConfig[prop];
        }
      }); // 3.复杂对象深度合并

      var mergeDeepProperties = ["header", "auth", "proxy"];
      mergeDeepProperties.forEach(function (prop) {
        userConfig = userConfig || {};

        if (isObject(userConfig[prop])) {
          config[prop] = deepMerge(defaultConfig[prop], userConfig[prop]);
        } else if (typeof userConfig[prop] !== 'undefined') {
          config[prop] = userConfig[prop];
        } else if (isObject(defaultConfig[prop])) {
          config[prop] = deepMerge(defaultConfig[prop]);
        } else if (typeof defaultConfig[prop] !== 'undefined') {
          config[prop] = defaultConfig[prop];
        }
      });
      return config;
    }

    var Axios = function Axios(defaultConfig) {
      this.defaults = defaultConfig;
      this.interceptors = {
        request: new InterceptorManager(),
        response: new InterceptorManager()
      };
    };

    Axios.prototype.request = function request(config) {
      // 合并参数
      config = mergeConfig(this.defaults, config); // 拦截器

      var promise = Promise.resolve(config);
      var chain = [{
        resolved: dispatchRequest,
        rejected: undefined
      }]; // let chain:AxiosInterceptor<any>[] = [
      // {
      //     resolved: dispatchRequest,
      //     rejected: undefined
      // }
      // ];

      this.interceptors.request.forEach(function (interceptor) {
        chain.unshift(interceptor);
      });
      this.interceptors.response.forEach(function (interceptor) {
        chain.push(interceptor);
      });

      while (chain.length > 0) {
        var ref = chain.shift();
        var resolved = ref.resolved;
        var rejected = ref.rejected;
        promise = promise.then(resolved, rejected);
      }

      return promise; // return dispatchRequest(config);
    };

    Axios.prototype.get = function get(url, config) {
      return this._requestMethodWithoutData(Method.GET, url, config);
    };

    Axios.prototype.post = function post(url, data, config) {
      return this._requestMethodWithData(Method.POST, url, data, config);
    };

    Axios.prototype.put = function put(url, data, config) {
      return this._requestMethodWithData(Method.PUT, url, data, config);
    };

    Axios.prototype["delete"] = function delete$1(url, config) {
      return this._requestMethodWithoutData(Method.DELETE, url, config);
    };

    Axios.prototype.connect = function connect(url, config) {
      return this._requestMethodWithoutData(Method.CONNECT, url, config);
    };

    Axios.prototype.head = function head(url, config) {
      return this._requestMethodWithoutData(Method.HEAD, url, config);
    };

    Axios.prototype.options = function options(url, config) {
      return this._requestMethodWithoutData(Method.OPTIONS, url, config);
    };

    Axios.prototype.trace = function trace(url, config) {
      return this._requestMethodWithoutData(Method.TRACE, url, config);
    };

    Axios.prototype._requestMethodWithData = function _requestMethodWithData(method, url, data, config) {
      return this.request(Object.assign(config || {}, {
        method: method,
        url: url,
        data: data
      }));
    };

    Axios.prototype._requestMethodWithoutData = function _requestMethodWithoutData(method, url, config) {
      return this.request(Object.assign(config || {}, {
        method: method,
        url: url
      }));
    };
    /**
     * 根据传入的请求配置对象返回一个请求的`URL`
     * @param config 请求配置
     * @returns {string} 请求`URL`
     */


    Axios.prototype.getUri = function getUri(config) {
      config = mergeConfig(this.defaults, config);
      return transformUrl(config);
    };

    /**
     * 默认配置
     */

    var defaults = {
      baseURL: '',
      header: {},
      method: Method.GET,
      responseType: HttpResponseType.TEXT,
      validateStatus: function validateStatus(status) {
        return status >= 200 && status < 300;
      }
    };

    var Cancel = function Cancel(message) {
      if (message === void 0) message = '';
      this.message = message;
    };

    var CancelToken = function CancelToken(executor) {
      var this$1 = this;
      var resolvePromise;
      this.promise = new Promise(function (resolve) {
        resolvePromise = resolve;
      }); // executor 括号内为 一个回调函数作为参数，该函数接收一个string类型的取消原因作为参数
      // 调用该回调函数时，会修改 Promise状态为 resolve

      executor(function (message) {
        if (this$1.reason) {
          return;
        }

        this$1.reason = new Cancel(message);
        resolvePromise(this$1.reason); // 修改 Promise状态为 resolve
      });
    };

    CancelToken.source = function source() {
      var cancel;
      var token = new CancelToken(function (fn) {
        cancel = fn;
      });
      return {
        cancel: cancel,
        token: token
      };
    };

    CancelToken.prototype.throwIfRequested = function throwIfRequested() {
      if (this.reason) {
        throw this.reason;
      }
    };

    function isCancel(val) {
      return val instanceof Cancel;
    }

    function getAxios(config) {
      var context = new Axios(config); // Axios 实例，用于给 axios继承自身属性

      var axios = Axios.prototype.request.bind(context); // 复制原型方法，并绑定函数`this`  Copy axios.prototype to instance

      extend(axios, Axios.prototype, context); // 复制实例属性 Copy context to instance

      extend(axios, context);
      return axios;
    }

    var axios = getAxios(defaults);

    axios.create = function create(config) {
      return getAxios(mergeConfig(defaults, config));
    };

    axios.CancelToken = CancelToken;
    axios.Cancel = Cancel;
    axios.isCancel = isCancel;

    axios.all = function (promises) {
      return Promise.all(promises);
    };

    axios.spread = function (callback) {
      return function wrap(arr) {
        return callback.apply(null, arr);
      };
    };

    return axios;

})));
