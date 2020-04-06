<?php
require_once 'pdo_connect.php';
?>
<html>
<head>
    <head>
        <?php
        require_once 'stylesheets.php';
        ?>
    </head>
</head>
<body>

<?php
include 'nav.php';
?>


<h2>
    <h1 class="text-center">Ours last articles</h1>

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
                         alt="Image de la planète <?php echo($data['name']); ?>"/>
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
