<?php
header("Content-type:text/html;charset=GB2312");
$name =$_POST['name'];
$sex = $_POST['sex'];
$old = $_POST['old'];
if($con =  mysqli_connect('localhost:3306','root','root')){
    echo "���ӳɹ�";
    
}else{
    echo "����ʧ��";
}
if(mysql_select_db('php_2')){
    echo "ѡ�����ݿ�ɹ�<br/>";
}else{
    echo("ѡ�����ݿ�ʧ��<br/>");
}
 $strsql = "insert into text(name1,name2,name3) values('$name','$sex','$old')";//�����������
 $result = @mysql_query($strsql);
  if($result)
            {
                echo "��ϲ������ӳɹ�";
                exit;
                }

mysqli_close($con);
?>