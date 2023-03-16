<!DOCTYPE html>
<html>
<head>
	<title>Шахматная доска</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			margin: auto;
		}
		td {
			width: 50px;
			height: 50px;
			text-align: center;
		}
		.black {
			background-color: #696969;
			color: #fff;
		}
		.white {
			background-color: #f0f0f0;
			color: #000;
		}
		.column-label {
			font-weight: bold;
			font-size: 20px;
			color: #000;
		}
		.row-label {
			font-weight: bold;
			font-size: 20px;
			color: #000;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td></td>
			<?php for ($col=0; $col<8; $col++) { ?>
				<td class="column-label"><?php echo chr(65 + $col); ?></td>
			<?php } ?>
			<td></td>
		</tr>
		<?php for ($row=1; $row<=8; $row++) { ?>
			<tr>
				<td class="row-label"><?php echo $row; ?></td>
				<?php for ($col=1; $col<=8; $col++) { ?>
					<?php $total = $row + $col; ?>
					<?php if ($total % 2 == 0) { ?>
						<td class="white"></td>
					<?php } else { ?>
						<td class="black"></td>
					<?php } ?>
				<?php } ?>
				<td class="row-label"><?php echo $row; ?></td>
			</tr>
		<?php } ?>
		<tr>
			<td></td>
			<?php for ($col=0; $col<8; $col++) { ?>
				<td class="column-label"><?php echo chr(65 + $col); ?></td>
			<?php } ?>
			<td></td>
		</tr>
	</table>
</body>
</html>
