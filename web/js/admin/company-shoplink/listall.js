//打开修改页面
function openedit(id,name) {
	$.dialog({id:'shoplink_update'}).close();
	var url = editUrl + '&id='+id;
	$.dialog.open(url,{
		title: '修改网店链接--'+name,
		width: 700,
		height:400,
		lock: true,
		border: false,
		id: 'shoplink_update',
		drag:true
	});
}

/**
 * 删除用户
 */
function delopt(){
	var len = $("input[name='id']:checked").size();
	var ids = '';
	$("input[name='id']:checked").each(function(i, n){
		if(i<len-1){
			ids += $(n).val() + '-';
		}else{
			ids += $(n).val();
		}
	});
	if(ids=='') {
		window.top.art.dialog({content:'请选择至少一条数据',lock:true,width:'200',height:'50',border: false,time:1.5},function(){});
		return;
	} else {
		var paraStr = 'ids='+ids;
		$.ajax({
			url: deleteallUrl,
			type: "post",
			dataType: "text",
			data:paraStr,
			async: "false",
			success: function (data) {
				$('#pageForm').submit();
				window.top.art.dialog({
					content: '删除成功！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time:2
				}, function () {
				});
			},
			error:function(data){
				$('#pageForm').submit();
				window.top.art.dialog({
					content: '删除失败！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time:2
				}, function () {
				});
			}
		});
	}
}

/**
 * 删除一个用户
 */
function deleteCompanyShoplink(id){
	var paraStr = "";
	paraStr = "id=" + id;
	if (confirm('您确定要删除吗？')){
		$.ajax({
			url: deleteUrl,
			type: "post",
			dataType: "text",
			data:paraStr ,
			async: "false",
			success: function (data) {
				$('#pageForm').submit();
				window.top.art.dialog({
					content: '删除成功！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time:2
				}, function () {
				});
			},
			error:function(data){
				$('#pageForm').submit();
				window.top.art.dialog({
					content: '删除失败！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time:2
				}, function () {
				});
			}
		});
	}
}

/**
 * 打开用户详情
 * @param nowPage
 * @return
 */
function detail(id,shopName){
	$.dialog({id:'shoplink_detail'}).close();
	var url = detailUrl+'&id='+id;
	$.dialog.open(url,{
		title: '网店详情--'+shopName,
		width: 500,
		height:400,
		lock: true,
		border: false,
		id: 'shoplink_detail',
		drag:true
	});
}