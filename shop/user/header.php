
<div class="header mt30">
  <div class="w1100">
    <!-- 头部主体开始 -->
    <div class="module cut">
      <div class="logo fl"></div>
      <!-- 头部搜索开始 -->
      <div class="top-search fl">
           <form method="get" action="../search.php">
        <?php
          if (isset($_REQUEST['uid'])) {
          ?>
          <input type="text"  style="display:none;" name="uid" value="<?php echo $_REQUEST['uid']?>">
          <?php
          }
         ?>
                    <div class="sf cut">
            <input class="fl" name="kw" type="text" value="" placeholder="搜索您想要的商品">
            <button class="fr" type="submit">搜 索</button>
          </div>
        </form>

      </div>
      <!-- 头部搜索结束 -->
      <?php
      if (isset($_REQUEST['uid'])) {
        ?>
        <!-- 头部购物车开始 -->
        <div class="top-cart fr">
          <div class="radius4 mt10">
            <i class=""><img src="../images/cart.gif" style="width: 20px"> </i>
            <a href="cart.php?uid=<?php echo $_REQUEST['uid']?>"><font>我的购物车</font></a></div>
        </div>
        <!-- 头部购物车结束 -->
        <?php
      }
       ?>

    </div>
    <!-- 头部主体结束 -->
    <div class="module mt20">
      <!-- 导航开始 -->
      <div class="nav cut">

        <div class="cross cut">
          <ul>

          <?php
          if(isset($_REQUEST['uid'])){
            $uid = $_REQUEST['uid'];
            // echo $_SESSION['uid'.$uid];
            // exit;
            if(isset($_SESSION['uid'.$uid]))
            {
              $flag=1;
	             ?>
               <li><a href="../index.php?uid=<?php echo $uid?>">首页</a></li>
               <li><a href="center.php?uid=<?php echo $uid?>">用户中心</a></li>
              <li><a href="logout.php?uid=<?php echo $uid?>">退出</a></li>
               <?php

             }
            else
            {?>
                <li><a href="../index.php">首页</a></li>
                <li><a href="login.php">登录</a></li>
                <li><a href="regist.php">注册</a></li>
                <?php

            }
           }
            ?>

			</ul>
        </div>
      </div>
      <!-- 导航结束 -->
    </div>
  </div>
</div>
