<?Php
require 'db.php';
$id = $_GET['id'];
$sql = ' select * from people where  id=:id ' ;
$statement = $connection ->prepare($sql);
$statement->execute([ ':id' => $id]);
$person= $statement->fetch(PDO::FETCH_OBJ);


if(isset($_POST['name']) && isset($_POST['email'])  &&  isset($_POST['gernde'])){
if(empty($_POST['name']) OR empty($_POST['email'])){
    $emptym ='enter  name and email ';
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gernde = $_POST['gernde'];

    $sql = 'UPDATE people SET name =:name , email=:email , gernde =:gernde WHERE id = :id ';

    $statement = $connection->prepare($sql);
    if ($statement->execute([':name' => $name, ':email' => $email, ':gernde'=>$gernde, ':id' => $id])) {
        header("Location: index.php");

    }
}
}

?>
<?php require 'header.php' ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2> updata person</h2>

        </div>
        <div class="card-body">

            <form method="post" >

                <div class="form-group">
                    <label for="name">Name</label>
                    <input  type="text" value="<?= $person->name; ?>" name="name" id="name" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control" >
                </div>
                <td>
                    <label>ذكر</label>
                    <input type="radio" required name="gernde" id="gernde" value="<?= $person->gerndr; ?>" />
                </td>
                <td>
                   <label>انثي</label>
                    <input type="radio" required name="gernde" id="gernde" value="<?= $person->gerndr; ?>" />
                </td>


                <div class="form-group">
                    <button type="submit" class="btn btn-info">update</button>

                </div>

            </form>


        </div>



    </div>
</div>











<?php require 'footer.php' ?>
