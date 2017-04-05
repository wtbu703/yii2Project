
$(function(){
	$.formValidator.initConfig({
		formid:"myform",
		autotip:true,			//是否显示提示信息
		onerror:function(msg,obj){
		window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})
		}});
	// 校验模型名称

	//验证标题是否为空
	$("#title").formValidator({
				onshow:"请输入新闻标题！",
				onfocus:"请输入新闻标题！"})
			.inputValidator({               //校验不能为空
				min:1,
				onerror:"请输入新闻标题！"})


})


function edit(){
	if($.formValidator.pageIsValid()){ // 表单提交进行校验
		var paraStr = "";
		paraStr += "id="+$("#id").val();
		paraStr += "&title="+$("#title").val();
		paraStr += "&author="+$("#author").val();
		paraStr += "&content=" + encodeURIComponent(contentEditor.getData());
		paraStr += "&category=" + $("#category").val();
		paraStr += "&state=" + $("#state").val();
		paraStr += "&attachUrl=" + $("#attachUrls").val();
		paraStr += "&attachName=" + $("#attachNames").val();
		paraStr += "&picUrl=" + $("#picUrl").val();

		$.ajax({
			url: updateUrl,
			type: "post",
			dataType: "text",
			data:paraStr ,
			async: "false",
			success: function (data) {
				window.top.art.dialog({
					content: '修改成功！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time: 2
				}, function () {
				});
				art.dialog.parent.$('#pageForm').submit();
				window.top.$.dialog.get('info_update').close();
			},
			error:function(data){
				window.top.art.dialog({
					content: '修改失败！',
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