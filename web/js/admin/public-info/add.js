// 加载字典信息
$(document).ready(function(){

	generateDict('DICT_PUBLICINFO_STATE','state','信息状态');
	generateDict('DICT_CATEGORY','category','信息类别');
});
//页面校验
$(function(){
	$.formValidator.initConfig({ formID: "myform",autotip:true, onError: function () { alert("校验没有通过，具体错误请看错误提示") } });

	// 校验模型名称					
	$("#title").formValidator({
				onshow: "请输入信息标题",
				onfocus: "标题不超过32个字",
				oncorrect: "输入正确"
			})
			.regexValidator({
				regexp: "^.{1,32}$",
				onerror: "标题不能超过32个字!"
			});
	$("#author").formValidator({
				onshow: "请输入信息作者",
				onfocus: "不超过16个字",
				oncorrect: "输入正确"
			}).regexValidator({
				regexp:"^.{1,16}$",
				onerror: "作者不能超过16个字!"
			});
	$("#category").formValidator({
				onshow: "选择不能为空",
				onfocus: "（必填）请选择选项",
				oncorrect: "输入正确"
			}).inputValidator({
		min: 1,  //开始索引
		onerror: "你是不是忘记选择信息类别了!"
	});
});
/**
 * 添加过滤
 * @param path
 * @return
 */
function add(){
	if($.formValidator.pageIsValid()){ // 表单提交进行校验
		var paraStr = "";
		paraStr += "&title=" + $("#title").val();
		paraStr += "&author=" + $("#author").val();
		paraStr += "&content=" + encodeURIComponent(contentEditor.getData());
		paraStr += "&state=" + $("#state").val();
		paraStr += "&category=" + $("#category").val();
		paraStr += "&attachUrl=" + $("#attachUrls").val();
		paraStr += "&attachName=" + $("#attachNames").val();
		paraStr += "&datetime=" + $("#datetime").val();

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
					window.top.$.dialog.get('info_add').close();
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