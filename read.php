<?php
header("Content-type:text/html;charset=GB2312");

$host = "localhost:3306";
$user = "root";//�û���
$pass = "root";//��¼����
$dbname = "student1";//���ݱ���
 if($link = mysqli_connect($host,$user,$pass))//���Ӳ�ѡ�����ݿ������
    {
        echo "���ӳɹ�";
    }
 else
    {
        echo "����ʧ��";
    }
    
if(mysql_select_db("phpmyadmin"))
    {
        echo "ѡ�����ݿ�ɹ�<br/>";
    }
else
    {
        echo("ѡ�����ݿ�ʧ��<br/>");
    }
   
 
//if(mysql_query('insert into student1(name,sex,num,score) values ("5d","4","002","99")'))//ֱ����������
$q = "SELECT * FROM $dbname";                 //SQL��ѯ���  
 mysql_query("SET NAMES GB2312");               //��������          
$result = mysql_query($q);                     //��ȡ���ݼ�  
if($result)
{
    echo"<table>
            <tr>
                <td>����</td>
                <td>�Ա�</td>
                <td>ѧ��</td>
                <td>�ɼ�</td>
            </tr>";
    while($row = mysql_fetch_row($result))//���ݶ�ȡ
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
        echo "<p>��ȡʧ��</p>";
    }
    

mysql_free_result($result); //�ر����ݼ� 

?>