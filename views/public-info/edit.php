<?php
$this->title = "修改信息";
?>

<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script>
    var updateUrl = "<?=yii::$app->urlManager->createUrl('public-info/update-one')?>";
</script>
<script language="javascript" type="text/javascript" src="js/admin/public-info/edit.js" charset="utf-8"></script>
</head>
<body id="_body" scroll="no">
    <div class="pad-lr-10">
    <form name="myform" action="" method="post" id="myform" target="center_frame">
        <div class="pad-10">
            <div class="col-tab">
                <ul class="tabBut cu-li">
                    <li id="tab_setting_1" class="on" onclick="">修改信息</li>
                </ul>
                <div id="div_setting_1" class="contentList pad-10">
                    <div style='overflow-y:auto;overflow-x:hidden' class='scrolltable'>
                        <table width="90%" cellspacing="0" class="table_form contentWrap">
                            <tbody>
                            <tr>
                                <th width="100">标题：</th>
                                <td><input type="text" id="title"  class="input-text" style="width:270px;" value="<?=$publicInfo->title?>"/></td>
                                <input type="hidden" id="id" value="<?=$publicInfo->id?>" />
                            </tr>
                            <tr>
                                <th width="100">作者：</th>
                                <td><input type="text" id="author"  class="input-text" style="width:270px;" value="<?=$publicInfo->author?>" /></td>
                            </tr>
                            <tr>
                                <th width="100">内容：</th>
                                <td><textarea style="width:500px;height:100px;" name="content" id="content" ><?=$publicInfo->content?></textarea></td>
                            </tr>
                            <tr>
                                <th width="100">类别：</th>
                                <td><select style="width:270px;" id="period">
                                        <?foreach($cateGory as $key => $val){?>
                                            <?if(intval($val->dictItemCode) == $publicInfo->category){?>
                                                <option name="period" value="<?=$val->dictItemCode?>" selected><?=$val->dictItemName?></option>
                                            <?}else{?>
                                                <option name="period" value="<?=$val->dictItemCode?>"><?=$val->dictItemName?></option>
                                            <?}?>
                                        <?}?>
                                    </select></td>
                            </tr>
                            <tr>
                                <th width="100">附件：</th>
                                <td>
                                    <input type="text" style="display:none;" name="attachUrls" id="attachUrls" class="input-text"/>
                                    <input type="text" style="display:none;" name="attachNames" id="attachNames" class="input-text"/>
                                    <iframe frameborder=0 width="100%" height=20px scrolling=no src="<?=yii::$app->urlManager->createUrl('public-info/upload')?>"></iframe>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bk10"></div>
                    <div class="rightbtn">
                        <input type="button" class="buttonconfirm" id="dosubmits" name="dosubmits" value="保存" onclick="edit()"/>
                        &nbsp;&nbsp;<input type="button" class="buttondel" name="dosubmit" value="关闭" onclick="window.top.$.dialog.get('info_update').close();"/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</body>
</html>