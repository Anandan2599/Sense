<?php
	include('connect.php');
	$sql = "SELECT * FROM parameters";

	if ($result = $mysqli -> query($sql))
	{
		while ($row = $result -> fetch_row())
		{
			echo
			'<tr>
				<td>'.$row[0].'</td>
				<td>'.$row[1].'</td>
				<td>'.$row[2].'</td>
			</tr>'
			;
		}
		$result -> free_result();
	}
?>
