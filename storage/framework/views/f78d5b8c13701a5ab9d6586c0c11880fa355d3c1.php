<!DOCTYPE html>
<html>
<body>
<table>
  <tr>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Номер</th>
  </tr>


<?php foreach($contacts as $contact): ?>
<tr>
  <td><?php echo e($contact->name); ?></td>
  <td><?php echo e($contact->surname); ?></td>
  <td><?php echo e($contact->phonenumber); ?></td>
  <td><a href="<?php echo e(route('contactShow',['id'=>$contact->id])); ?>">Изменить</a></td>
  <td><a href="<?php echo e(route('deleteRecord',['id'=>$contact->id])); ?>">Удалить</a></td>

</tr>
<?php endforeach; ?>
</table>


<td><a href="<?php echo e(route('getForm')); ?>">Добавить</a></td>
</body>
</html>
