<?php
$this->title = '添加产品';
?>

<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
    var listallUrl = "<?=yii::$app->urlManager->createUrl('company-product/find-by-attri')?>";
    var insertUrl = "<?=yii::$app->urlManager->createUrl('company-product/add-one')?>";
</script>
<script type="text/javascript" src="js/admin/company-product/add.js"></script>
</head>
<body>
    <div class="pad-lr-10">
        <form name="myform" action="" method="post" id="myform" target="iframeId">
            <div class="pad_10">
                <div style='overflow-y:auto;overflow-x:hidden' class='scrolltable'>
                    <table width="100%" cellspacing="0" class="table_form contentWrap">
                        <tr>
                            <th >企业ID：</th>
                            <td><input type="text" style="width:250px;" name="companyId" id="companyId"  class="input-text"/></td>
                        </tr>
                        <tr>
                            <th>产品名称：</th>
                            <td><input type="text" style="width:250px;" name="name" id="name"  class="input-text"/></td>
                        </tr>
                        <tr>
                            <th>产品介绍：</th>
                            <td><textarea style="width:500px;height:100px;" name="introduction" id="introduction" ></textarea></td>
                        </tr>
                        <tr>
                            <th>产品价格：</th>
                            <td><input type="text" style="width:250px;" name="price" id="price"  class="input-text"/></td>
                        </tr>
                        <tr>
                            <th>产品库存：</th>
                            <td><input type="text" style="width:250px;" name="stock" id="stock"  class="input-text"/></td>
                        </tr>
                        <tr>
                            <th>产品折扣：</th>
                            <td><input type="text" style="width:250px;" name="discount" id="discount"  class="input-text"/></td>
                        </tr>
                        <tr>
                            <th>产品状态：</th>
                            <td><select style='width:250px;height:25px; ' id="state"  name="state" class="input-text"></select></td>
                        </tr>
                    </table>
                </div>
                <div class="bk10"></div>
            </div>
        </form>
        <div class="table-list">
            <div class="rightbtn">
                <input type="button" class="buttonsave" value="增加" name="dosubmit" onclick="add()" />
                <input type="button" class="buttonclose" value="关闭" name="dosubmit"  onclick="window.top.$.dialog.get('product_add').close();"/>
            </div>
        </div>
    </div>
</body>
</html>
