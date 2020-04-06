<?php
require_once 'pdo_connect.php';
?>

<html>
<head>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
</head>
<body>

<?php
include 'nav-admin.php';
?>


<h2>
    <h1 class="text-center">Ours last article</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Image Link</th>
            <th scope="col">Content</th>
            <th scope="col">User</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $reponse = $pdo->query('SELECT * FROM annonce');
        while ($data = $reponse->fetch())
        {
            ?>
            <tr>
                <td><?php echo($data['id']); ?></td>
                <td><?php echo($data['title']); ?></td>
                <td><?php echo($data['image_link']); ?></td>
                <td><?php echo($data['content']); ?></td>
                <td><?php echo($data['name_surname_user']); ?></td>
                <td>
                    <img style="max-width: 140px;" src="<?php echo('images/planets/'.$data['image']); ?>"
                         alt="Planet image <?php echo($data['name']); ?>"/>
                </td>


            </tr>
            <?php
        }
        $reponse->closeCursor();
        ?>

        </tbody>
    </table>
</h2>
</body>
</html>
