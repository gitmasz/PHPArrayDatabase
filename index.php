<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <meta name="author" content="Marcin Szczepkowski">
  <title>PHP Array Database</title>
  <style>
    body {
      font-family: "Open Sans", sans-serif;
      font-size: 18px;
      line-height: 30px;
      font-weight: 400;
      background: #fff;
      color: #000;
      margin: 0;
    }

    a {
      color: #0088aa;
      text-decoration: none;
    }

    a:hover,
    a:focus {
      color: #0088aa;
      text-decoration: underline;
    }

    .fullpage-message {
      display: flex;
      align-items: center;
      justify-content: center;
      background: #00aad4;
      color: #fff;
      height: 100vh;
      padding: 32px;
      box-sizing: border-box;
      overflow: auto;
    }

    .fullpage-message__content {
      max-width: 600px;
    }

    .content h1 {
      font-size: 25px;
      line-height: 28px;
      margin: 0px;
      font-weight: bold;
      text-align: center;
    }

    .content p {
      margin: 10px 0 0 0;
      text-align: center;
    }

    .content table {
      width: 100%;
      text-align: left;
      border: 1px dashed #fff;
      margin-top: 10px;
    }

    .content table td,
    .content table th {
      padding: 5px 10px;
      border-bottom: 1px dashed #fff;
    }

    .content table tr:last-child td,
    .content table tr:last-child th {
      border-bottom: none;
    }
  </style>
</head>

<body>
  <div class="fullpage-message">
    <div class="content fullpage-message__content">
      <h1>PHP Array Database</h1>
      <?php

      @include 'database/array-column.php';
      @include 'database/associative-array-data.php';

      if (in_array($parameter, array_column($user_database, 'hash'))) {
        echo '<p>Data for: ' . $user_database[$hash]['name'] . ' ' . $user_database[$hash]['surname'] . '</p>';
        echo '<table>';
        echo '<tr><th>ID:</th><td>' . $id[$hash] . '</td></tr>';
        echo '<tr><th>Name:</th><td>' . $name[$hash] . '</ptd></tr>';
        echo '<tr><th>Surname:</th><td>' . $surname[$hash] . '</td></tr>';
        echo '<tr><th>Phone:</th><td>' . $phone[$hash] . '</td></tr>';
        echo '<tr><th>Email:</th><td>' . $email[$hash] . '</td></tr>';
        echo '<tr><th>Website:</th><td>' . $url[$hash] . '</td></tr>';
        echo '</table>';
      } else {
        echo '<p>No data in the database for given hash.</p><p>Add "hash" url parameter "a1", "b2" or "c3" to display data.</p>';
      }
      ?>
    </div>
  </div>
</body>

</html>