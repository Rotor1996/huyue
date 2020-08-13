
//正式
// const gateway="https://gateway.lianrongbao.cn";
// const user="https://user.lianrongbao.cn";
// const file="https://file.lianrongbao.cn";

//测试126
const gateway = "http://huyue.test";



const index_ajax = function (_url, type, params, callback) {
  let https = gateway+'/api';
  uni.request({
    url: https + _url,
    method: type,
    data: params,
    header: {
      'Content-Type': "application/json",
      'Accept': "application/json",
    },
    success(res) {
      uni.hideLoading();
		callback(res);
    },
    fail(res) {
      uni.hideLoading();
      showModal({
        content: "服务器异常请稍后再试"
      });
    }

  });
};


module.exports = {
  index_ajax: index_ajax,
};
