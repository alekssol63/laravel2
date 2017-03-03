<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <style>
	table {
    border-collapse: collapse;

	}
	th{
	background: gray;
	}
	td, th{
    border: 1px solid black;
	}
</style>
</head>
<body>
<form action="index.php" method="post">
	<?php if (!($filter_on)){ ?>
	<input name="ISBN" type="text" placeholder="ISBN">
	<input name="name" type="text" placeholder="Название книги">
	<input name="author" type="text" placeholder="Автор">

	<?php } else{ ?>
	<input name="ISBN" type="text" placeholder="ISBN" value="<?php echo $isbn; ?>">
	<input name="name" type="text" placeholder="Название книги" value="<?php echo $name; ?>">
	<input name="author" type="text" placeholder="Автор"value="<?php echo $author; ?>">
	<?php }; ?>


	<button type="submit" name="search" value="search">Найти</button>
	<table>
		<tr>
			<?php
			while ($row=$col_name->fetch(PDO::FETCH_ASSOC) ){
				foreach($row as $key=>$value){ ?>
				<th> <?php echo $value; ?></th>
			<?php } ?>
		<?php } ?>
		</tr>
		<?php
			if (!($filter_on)){
			while ($row=$data->fetch(PDO::FETCH_ASSOC) ){
		?>
				<tr>
				<?php foreach($row as $key=>$value){ ?>
				<td> <?php echo $value ."</br>"; ?></td>
		<?php } ?>
				</tr>
		<?php } ?>
		<?php }else {
			while ($row=$prep_q->fetch(PDO::FETCH_ASSOC) ){
			?>
				<tr>

				<?php foreach($row as $key=>$value){ ?>
				<td> <?php echo($value) ."</br>"; ?></td>
			<?php } ?>
			</tr>
		<?php } ?>
	<?php } ?>



	</table>
  </form>
</bod
