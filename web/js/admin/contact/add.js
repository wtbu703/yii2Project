
//页面校验
$(function(){
	$.formValidator.initConfig({
		formid:"myform",
		autotip:true,			//是否显示提示信息
		onerror:function(msg,obj){
		window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})
		}});
	// 校验模型名称					
	$("#truename").formValidator({
		onshow:" ",
		onfocus:"请输入姓名！"})
		.inputValidator({               //校验不能为空
			min:1,
			onerror:"请输入姓名！"})
	$("#content").formValidator({
				onshow:" ",
				onfocus:"请输入内容！"})
			.inputValidator({               //校验不能为空
				min:1,
				onerror:"请输入内容！"})
})

/**
 * 添加过滤
 * @param path
 * @return
 */
function add(){
	if($.formValidator.pageIsValid()){ // 表单提交进行校验
		var paraStr = "";
		paraStr += "&truename=" + $("#truename").val();
		paraStr += "&gender=" + $("#gender").val();
		paraStr += "&mobile=" + $("#mobile").val();
		paraStr += "&email=" + $("#email").val();
		paraStr += "&QQ=" + $("#QQ").val();
		paraStr += "&content=" + encodeURIComponent(contentEditor.getData());
		$.ajax({
			url: insertUrl,
			type: "post",
			dataType: "text",
			data:paraStr ,
			async: "false",
			success: function (data) {
				if(data == "success"){
					window.top.art.dialog({
						content: '添加成功！',
						lock: true,
						width: 250,
						height: 80,
						border: false,
						time: 2
					}, function () {
					});
					window.top.$.dialog.get('contact_add').close();
					art.dialog.parent.document.getElementById("iframeId").src=listallUrl;
				}else{
					window.top.art.dialog({
						content: '添加失败！',
						lock: true,
						width: 250,
						height: 80,
						border: false,
						time: 2
					}, function () {
					});
				}

			},
			error:function(data){
				window.top.art.dialog({
					content: '添加失败！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time: 2
				}, function () {
				});
			}
		});

	}
}