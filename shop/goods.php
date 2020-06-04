<?php
session_start();
include 'conn.php';
//获取URL参数中的id
$goods_id = $_REQUEST['id'];

   ?>
   <!DOCTYPE>
   <html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>商品</title>
   <link rel="stylesheet" type="text/css" href="./css/general.css">
   <link rel="stylesheet" type="text/css" href="./css/goods.css">
   <script type="text/javascript" src="./js/jquery.js"></script>
   <script type="text/javascript" src="./js/jquery.zoom.min.js"></script>
   <script type="text/javascript" src="./js/general.js"></script>
   <script type="text/javascript" src="./js/goods.js"></script>
   </head>
   <body>



   <!-- 头部开始 -->
<?php include 'header.php'; ?>
   <!-- 头部结束 -->
   <?php
   $sql = "select * from goods where id = '".$goods_id."'";

     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
         // 输出每行数据
         while($row = $result->fetch_assoc()) {

             ?>
   <!-- 主体开始 -->
   <div class="container w1100 mt10">
     <div class="gtds cut">
       <div class="gimbox fl">
         <!-- 商品图片开始 -->
         <div class="module">
           <div class="im cut">
             <div id="goods-imgarea" style="position: relative; overflow: hidden;">
               <img src="<?php echo $row['picture']?>" width="350px">
               </div>

             <i class="zoom icon"></i> </div>
           <div class="tmb mt10 cut">
             <a class="tmb-arrow lh disabled" id="tmb-back-btn"><i class="icon">&lt;</i></a>
             <div class="tmb-im cut">

             </div>
             <a class="tmb-arrow rh disabled" id="tmb-forward-btn"><i class="icon">&gt;</i></a>
           </div>
         </div>
         <!-- 商品图片结束 -->

       </div>
       <div class="gtbox cut">



         <h1>

         </h1>
         <p class="mt8 c888"></p><p style="font-size:30px">
<?php
echo $row['goods_name'];
 ?>
         </p><p></p>
         <div class="gatt module mt10 cut">
           <dl>
             <dt>商品ID:</dt>
             <dd>
<?php
  echo $row['id'];
 ?>
             </dd>
           </dl>
            <dl class="mt5">
             <dt>原价:</dt>
             <dd class="npri"><del><i>¥</i><font id="nowprice" data-price="89.00">
<?php echo $row['old_price']; ?>

             </font></del></dd>
           </dl>
            <dl class="mt5">
             <dt>现价:</dt>
             <dd class="npri"><i>¥</i><font id="nowprice" data-price="89.00">
<?php echo $row['price']; ?>

             </font></dd>
           </dl>
             <dl>
             <dt>详细介绍:</dt>
             <dd>
<?php
  echo $row['description'];
 ?>
             </dd>
           </dl>
                 </div>
                 <?php
             }
         } else {
             echo "0 个结果";
         }
        ?>
         <div class="cutline mt10"></div>
         <div class="gatt module">
          <form method="post" action="user/buy.php?gid=<?php echo $goods_id?>&uid=<?php echo $uid?>" id="buy-form">
           <dl class="mt15">
             <dt>购买数量:</dt>
             <dd >
               <input name="count" id="count" type="text">
               <font class="c999 ml5">件</font>
             </dd>
           </dl>
           <input type="submit"  value="立即购买">
           <button id="addcart" name="addcart" type="button">加入购物车</button>
           </form>

         </div>

       </div>
     </div>


   </div>
   </body>






<script type="text/javascript">
$(function(){
  $('#addcart').click(function(){

    location.href ="user/addcart.php?uid=<?php echo $uid?>&gid=<?php echo $goods_id?>&count="+$('#count').val();
  });
});
</script>

<?php
include 'db_close.php';
 ?>
