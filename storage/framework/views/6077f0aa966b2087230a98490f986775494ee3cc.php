<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo e(route('contactChange', [$record->id])); ?>">
  <table>
    <tr>
      <td><label for="name">Имя</label></td><td><input name="name" type="text"  value="<?php echo e($record->name); ?>"></td>
    </tr>
    <tr>
      <td><label for="surname">Фамилия</label></td><td><input name="surname" type="text"  value="<?php echo e($record->surname); ?>"><td>
    </tr>
    <tr>
	     <td><label for="phonenumber">Номер</label></td><td><input name="phonenumber" type="text"  value="<?php echo e($record->phonenumber); ?>"></td>
    </tr>

</table>
<button name ="change" type="submit"value="change">Готово</button>
<?php echo e(csrf_field()); ?>


</form>
</body>
</html>
