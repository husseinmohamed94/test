<?Php
require 'db.php';
$massage='';
$emptym='';


        if(isset($_POST['name']) && isset($_POST['email']) &&  isset($_POST['gernde'])){
              if(empty($_POST['name']) OR empty($_POST['email'])){
                      $emptym ='enter  name and email ';
                    } else {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $gernde = $_POST['gernde'];
            $sql = ' INSERT INTO people (name,email,gernde) VALues(:name , :email,:gernde)';
            $statement = $connection->prepare($sql);
            if ($statement->execute([':name' => $name, ':email' => $email , ':gernde' =>$gernde])) {
                $massage = 'data inserted successful';
                 }
            }
        }

?>
<?php require 'header.php' ?>

    <div class="container">
    <div class="card mt-5">
    <div class="card-header">
        <h2> create a person</h2>

    </div>
    <div class="card-body">
        <?php if(!empty($massage) || !empty($emptym)):?>
        <div class="alert alert-success">
         <?= $massage;  ?>
         <?= $emptym;  ?>
         </div>
        <?php endif; ?>

        <form method="post" >

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" >
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" id="email" class="form-control" >
            </div>
            <td>
                <label>ذكر</label>
                <input type="radio" required name="gernde" id="gernde" value="1" />
            </td>
            <td>
                <label>انثي</label>
                <input type="radio" required name="gernde" id="gernde" value="2" />
            </td>






            <div class="form-group">
            <button type="submit" class="btn btn-info">create a person</button>

        </div>

        </form>


    </div>



</div>
</div>











<?php require 'footer.php' ?>
