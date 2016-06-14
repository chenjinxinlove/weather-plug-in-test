var $ = require("jquery");
var data = function(citycity){


};
data.prototype.ajax = function(citycity){
   	var weatherdata = new Array();
	$.getScript("http://d1.weather.com.cn/dingzhi/101010200.html",function(data){
		weatherdata['city'] = cityDZ101010200.weatherinfo.city;
		weatherdata['weather'] =cityDZ101010200.weatherinfo.weather;
		weatherdata['temp'] = cityDZ101010200.weatherinfo.temp;
		weatherdata['ws'] = cityDZ101010200.weatherinfo.ws;
		// weatherdata.call(show);
		// console.log(weatherdata);
		// return  weatherdata;
	})
   }

// data.prototype.show = function(arr){
//
// 	console.log(arr);
// }
function show(arr){
 	console.log(arr);
 }
module.exports = data;
