<?php
        require 'db.php';
        $sql=' select * from people ' ;
       $statement = $connection ->prepare($sql);
        $statement->execute();
        $people= $statement->fetchALL(PDO::FETCH_OBJ);
?>

<?php require 'header.php' ?>

<div class="container">
<div class="card mt-5">
    <div class="card-header">

        <h2>ALL People</h2>
    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gernde</th>
                <th>Action</th>
            </tr>
            <?php foreach($people as $person): ?>

            <tr>
                <td><?= $person->id; ?></td>
                <td><?= $person->name; ?></td>
                <td><?= $person->email; ?></td>
                <td><?= $person->gernde; ?> </td>
                   <td>

                   <a href = "edit.php?id=<?= $person->id ?>" class ="btn btn-info">edit</a>
                   <a onclick="return confirm('Are you sure you want to delete this entry? ')" href = "delete.php?id=<?= $person->id ?>" class="btn btn-danger">delete</a>
                   </td>

            </tr>

            <?php endforeach; ?>
        </table>
    </div>



</div>



</div>





<?php require 'footer.php' ?>
