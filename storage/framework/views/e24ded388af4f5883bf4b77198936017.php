<!DOCTYPE html>
<html lang="ja">
 
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎</title>
 </head>
 
 <body>
    <table>
      <tr>
        <th>ID</th>
        <td><?php echo e($posts->id); ?></td>
      </tr>
      <tr>
        <th>タイトル</th>
        <td><?php echo e($posts->title); ?></td>
      </tr>
      <tr>
        <th>本文</th>
        <td><?php echo e($posts->content); ?></td>
      </tr>    
      <tr>
        <th>作成日時</th>
        <td><?php echo e($posts->created_at); ?></td>            
      </tr>
      <tr>
        <th>更新日時</th>
        <td><?php echo e($posts->updated_at); ?></td>
      </tr>      
    </table>
 </body>
 
</html><?php /**PATH C:\xampp\htdocs\laravel-basic-kadai\resources\views/posts/show.blade.php ENDPATH**/ ?>