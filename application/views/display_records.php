
<html>
<head>
<title>Display records</title>
</head>
 
<body>
  
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Name</th>
    <th>Email</th>
    <th>phone</th>
    <th>Dob</th>
  </tr>
  <?php
  $i=0;
  foreach($data as $row)
  {
    $i++;
  echo "<tr>";
  
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->phone."</td>";
  echo "<td>".$row->dob."</td>";
  echo "</tr>";
 
  }
  echo "<h1>".$i."</h1>"
   ?>
   <h1></h1>
</table>
</body>
</html>