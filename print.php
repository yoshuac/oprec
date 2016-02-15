<html>
<head>
<title></title>
<head>
  <style>
      body {
        font-family: 'Century Gothic', serif;
        font-size: 12px;
      }
  #topdf{
	margin: 100 0 0 100px;
	}
  <style>
<body>

<?php
$number = $_POST['number'];
$name = $_POST['name'];
$address = $_POST['address'];
$nickname = $_POST['nickname'];
$place = $_POST['place'];
$date = $_POST['date'];
$religion = $_POST['religion'];
$gender=$_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$twitter = $_POST['twitter'];
$university = $_POST['university'];
$faculty = $_POST['faculty'];
$year = $_POST['year'];
$choice = $_POST['choice'];
$reason = $_POST['reason'];


require_once("dompdf/dompdf_config.inc.php");
 
$html =
  '<html>
  <head><style>
    h1   {color:#E60000}<style></head><body align=center>'.
  '<table align=center margin= 10 10 10 100px border=0 cellspacing=0 cellpadding=0 width=500 height=2200>
  <tr>
  <td align=center><img src="images/replace-image.jpg" alt="image">
  <br><h1>Form Open Reqruitment</h1></td>
  </tr>
  </table>'.
  '<table align=center margin= 100 10 10 100px border=0 cellspacing=0 cellpadding=0 width=500 height=2200>
  <tr>
  <td colspan=3 align=center></td>
  </tr>

  <tr>
  <td><br>Number </td><td><br> : </td><td><br>'.$number.'</td>
  </tr>
  <tr>
  <td>Full Name </td><td> : </td><td>'.$name.'</td>
  </tr>
  <tr>
  <td>Nickname </td><td> : </td><td>'.$nickname.'</td>
  </tr>
  <tr>
  <td>Place, Date of Birth </td><td> : </td><td>'.$place.' , '.$date.'</td>
  </tr>
  <tr>
  <td>Religion </td><td> : </td><td>'.$religion.'</td>
  </tr>
  <tr>
  <td>Gender </td><td> : </td><td>'.$gender.'</td>
  </tr>
  <tr>
  <td>Address </td><td> : </td><td>'.$address.'</td>
  </tr>
  <tr>
  <td>Phone Number </td><td> : </td><td>'.$phone.'</td>
  </tr>
  <tr>
  <td>Email </td><td> : </td><td>'.$email.'</td>
  </tr>
  <tr>
  <td>Twitter </td><td> : </td><td>@'.$twitter.'</td>
  </tr>
  <tr>
  <td>University </td><td> : </td><td>'.$university.'</td>
  </tr>
  <tr>
  <td>Faculty </td><td> : </td><td>'.$faculty.'</td>
  </tr>
  <tr>
  <td>Year </td><td> : </td><td>'.$year.'</td>
  </tr>
  <tr>
  <td>Choice </td><td> : </td><td>'.$choice.'</td>
  </tr>
  <tr>
  <td>The Reason </td><td> : </td><td>'.$reason.'</td>
  </tr>
  <tr>
  <td></td><td></td><td align=right>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
  <td colspan=3><p>Note :
<br>a.	...
<br>b.	...
<br>c.	...</p></td>
  </tr>
  <tr>
  <td></td><td></td><td align=right>Malang,&nbsp;...&nbsp;Mei&nbsp;2015</td>
  </tr>
  <tr>
  <td></td><td></td><td align=right>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
  <td></td><td></td><td align=right>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
  <td></td><td></td><td align=right>&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
  <td></td><td></td><td align=right>(_____________________)</td>
  </tr>
  <tr>
  <td></td><td></td><td align=right>Number:_____________________</td>
  </tr>
  </table>'.
  '</body></html>';
 
 
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->set_paper('a4', 'potrait');
$dompdf->stream('Form Open Recruitment_'.$name.'.pdf');
?>

<body>
</html>
