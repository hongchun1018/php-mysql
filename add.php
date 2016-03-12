<?php
header("Content-type:text/html;charset=GB2312");
$name =$_POST['name'];
$sex = $_POST['sex'];
$old = $_POST['old'];
if($con =  mysqli_connect('localhost:3306','root','root')){
    echo "连接成功";
    
}else{
    echo "连接失败";
}
if(mysql_select_db('php_2')){
    echo "选择数据库成功<br/>";
}else{
    echo("选择数据库失败<br/>");
}
 $strsql = "insert into text(name1,name2,name3) values('$name','$sex','$old')";//间接增添数据
 $result = @mysql_query($strsql);
  if($result)
            {
                echo "恭喜您，添加成功";
                exit;
                }

mysqli_close($con);
?>