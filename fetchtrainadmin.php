
<?php

//fetch.php
$connect = mysqli_connect("localhost", "root", "", "myrailway");
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM trains
  WHERE TrainName LIKE '%" . $search . "%' OR
        FromStation LIKE '%" . $search . "%' OR
        ToStation LIKE '%" . $search . "%'
 ";
} else {
    $query = "
  SELECT * FROM trains ORDER BY TrainNo
 ";
}
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
  <div class="table-responsive">
   <table class="center" border="9" cellpadding="10" cellspacing="10">
    <tr>
    <th>   Train No.   </th>
	<th>   Train Name   </th>
	<th>   Route  </th>
	<th>   Distance   </th>
	<th>   Business Seats   </th>
	<th>   Economical Seats   </th>
	<th>   Standard Seats   </th>
	<th>   Image   </th>
	<th> Delete</th>
  </tr>
 ';
    while ($row = mysqli_fetch_array($result)) {
		
        $output .= ' 

		
   <tbody>
   <td>' . $row["TrainNo"] . '</td>
    <td>' . $row["TrainName"] . '</td>
    <td>' . $row["FromStation"] . ' to ' . $row["ToStation"] . '</td>
	<td>' . $row["TotalDistance"] . ' km/hr</td>
    <td>' . $row["BusinessSeats"] . ' seats</td>
	<td>' . $row["EconomicalSeats"] . ' seats </td>
    <td>' . $row["StandardSeats"] . ' seats</td>
	<td><img src="' . $row["Img"] . '" alt="Train image"  height="100px" width="100px"></td>
	
	<td ><input class="btn btn-danger " type="submit" value="Delete" name="submit" /></td>
	 </tbody>
		
		
		
  ';
    }
    echo $output;
} else {
    echo 'Data Not Found';
}
?>


