//打开添加页面
function openadd(){
	$.dialog({id:'build_add'}).close();
	$.dialog.open(addUrl, {
		title: '添加物流配送体系建设情况',
		width: 800,
		height:500,
		lock: true,
		border: false,
		id: 'build_add',
		drag:true
	});
}

//查询功能
function search(){
	if(str_is_null($('#published').val())) {
        window.top.art.dialog({
            content: '查询条件不能为空',
            lock: true,
            width: 250,
            height: 80,
            border: false,
            time: 2
        }, function () {});
		return ;
	}
	var paraStr = "&published="+$('#published').val();
	$('#iframeId').attr('src',listallUrl+paraStr);
}
