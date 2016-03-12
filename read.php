<?php
header("Content-type:text/html;charset=GB2312");

$host = "localhost:3306";
$user = "root";//用户名
$pass = "root";//登录密码
$dbname = "student1";//数据表名
 if($link = mysqli_connect($host,$user,$pass))//连接并选择数据库服务器
    {
        echo "连接成功";
    }
 else
    {
        echo "连接失败";
    }
    
if(mysql_select_db("phpmyadmin"))
    {
        echo "选择数据库成功<br/>";
    }
else
    {
        echo("选择数据库失败<br/>");
    }
   
 
//if(mysql_query('insert into student1(name,sex,num,score) values ("5d","4","002","99")'))//直接增添数据
$q = "SELECT * FROM $dbname";                 //SQL查询语句  
 mysql_query("SET NAMES GB2312");               //编码类型          
$result = mysql_query($q);                     //获取数据集  
if($result)
{
    echo"<table>
            <tr>
                <td>姓名</td>
                <td>性别</td>
                <td>学号</td>
                <td>成绩</td>
            </tr>";
    while($row = mysql_fetch_row($result))//数据读取
    {
        echo"<tr>
                 <td>".$row[0]."</td>
                 <td>".$row[1]."</td>
                 <td>".$row[2]."</td>
                 <td>".$row[3]."</td>
            </tr>";
    }
    echo "</table>";
}
else
    {
        echo "<p>读取失败</p>";
    }
    

mysql_free_result($result); //关闭数据集 

?>