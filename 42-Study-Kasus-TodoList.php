<?php
$todos = [];

if (file_exists('todo.txt')) {
  $file = file_get_contents('todo.txt');
  $todos = unserialize($file);
}

function simpanData($todos)
{
  file_put_contents('todo.txt', serialize($todos));
  header('location:42-Study-Kasus-TodoList.php');
}

if (isset($_POST['todo'])) {
  $data = $_POST['todo'];
  $todos[] = [
    'todo' => $data,
    'status' => 0
  ];
  simpanData($todos);
}

if (isset($_GET['status'])) {
  $todos[$_GET['key']]['status'] = $_GET['status'];
  simpanData($todos);
}

if (isset($_GET['hapus'])) {
  unset($todos[$_GET['key']]);
  simpanData($todos);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TodoList</title>
</head>

<body>
  <!-- form todo -->
  <form method="post">
    <label for="">Input Tugas Hari ini</label>
    <input type="text" name="todo">
    <button type="submit">Simpan</button>
  </form>

  <!-- list todo -->
  <ul>
    <?php foreach ($todos as $key => $value): ?>
      <li>
        <input type="checkbox" name="todo" onclick="window.location.href='42-Study-Kasus-TodoList.php?status=<?php echo $value['status'] == 1 ?  '0' :  '1'; ?>&key=<?php echo $key; ?>'" <?php if ($value['status'] == 1) echo 'checked' ?> />
        <label>
          <?php
          if ($value['status'] == 1) {
            echo "<del>{$value['todo']}</del>";
          } else {
            echo $value['todo'];
          }
          ?>
        </label>
        <a href="42-Study-Kasus-TodoList.php?hapus=1&key=<?php echo $key; ?>" onclick="return confirm('Apakah kamu yakin?')">Hapus</a>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>