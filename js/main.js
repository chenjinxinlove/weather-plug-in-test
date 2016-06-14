var data = require("./data");
var $ = require("jquery");
var cookies = require('browser-cookies');
var mainC = function(){

};

mainC.prototype.clCss = function(shuxing,color){
    $("#preview").css(shuxing,color);

}
var mainC = new mainC();
var task = new Array();

function taskCl(task){
	cookie(task);
	for (key in task) {
	switch (key){
			case 'color':
				mainC.clCss('color',task[key]);
				break;
			case 'fsize':
				mainC.clCss('font-size',task[key]+"px");
			break;
			default:
				break;
		}
	}
}

function cookie(task){
	cookies.erase('task'); // Removes cookie
	var str = "";
	for(key in task){

			str += "&"+key+"="+task[key];
	}
	cookies.set('task', str);
  // cookies.set('task', strstrtask.toJSONString());

}



$('.con-font-color').on("change",function(){
	var color = $('.con-font-color').val();
	task['color'] = color;
//	mainC.clCss('color',color);
	taskCl(task);
});


$('.con-font-size').on("change",function(){
	var fsize = $('.con-font-size').val();
	task['fsize'] = fsize;
	taskCl(task);
});



$('#button').on('click',function(){
	$.ajax({
		type:"post",
		url:"chuli.php",
		async:true,
		data:cookies.get('task'),
		success:function(d){
			$('.text').html("http://127.0.0.1/weather-plug-in-test/c/"+d+".js");
		}
	
		});
	
})


var $_GET = (function(){
    var url = window.document.location.href.toString();
    var u = url.split("?");
    if(typeof(u[1]) == "string"){
        u = u[1].split("&");
        var get = {};
        for(var i in u){
            var j = u[i].split("=");
            get[j[0]] = j[1];
        }
        return get;
    } else {
        return {};
    }
})();

taskCl($_GET);


