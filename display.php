<?php
   include 'connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>





    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM crud";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $password = $row['password'];
                        echo '
    <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>@' . $email . '</td>
      <td>@' . $phone . '</td>
      <td>@' . $password . '</td>
      <td>
        <button><a href="update.php"></a>Update</button>
        <button><a href="delete.php?deleteid='.$id.'">Delete</button>
      </td>
    </tr>
            ';
                    }
                }

                ?>
            </tbody>
        </table>

    </div>

</body>

</html>