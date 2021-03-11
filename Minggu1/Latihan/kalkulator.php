<?php
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$res=$fn+$sn;
		break;

		case '-':
		$res=$fn-$sn;
		break;

		case 'X':
		$res=$fn*$sn;
		break;
        case '/':
        $res=$fn/$sn;
        break;
        default:
        echo "tidak ada hasilnya";
	}

}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Calculator- switch</title>

	</head>
	<body>
		<form method="post">
		<table border="1" align="center">
			
			<tr>
				<th>Masukan bil 1</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr>
			<tr>
				<th>Masukan bil 2</th>
				<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
				<th>Pilih operator</th>
				<th>
				<select name="ch">
					<option>+</option>
					<option>-</option>
					<option>X</option>
      				<option>/</option>
				</select>
				</th>
			</tr>
			<tr>
				<th>Your Result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr>
			<tr>

				<th colspan="2">
				<input type="submit"
				name="save" value="Show Result"/>
				</th>
			</tr>
		</table>
		</form>
	</body>
</html>