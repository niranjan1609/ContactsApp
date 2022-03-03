<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contacts Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="text-end">
      <a href="logout.php"><button type="button" class="btn btn-primary">Log out</button></a>
    </div>
    <div class="container">
      <div class="row">
        <div class="mt-5">
          <h3 class="text-center">Contact Form and Contact List Page</h3>
        </div>
        <div class="col-md-4 offset-md-4">
            <form action="contacts_form.php" method="POST" class="mt-5">
              <div class="mt-5">
                <h5 class="text-center">Add Contacts</h5>
              </div>
              <div class="mt-5 col-md-12">
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name= "name" class="form-control" id="colFormLabel">
                  </div>
                </div>
              </div>
              <div class="mt-3  col-md-12">
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">PhNo</label>
                  <div class="col-sm-10">
                    <input type="text" name= "num" class="form-control" id="colFormLabel">
                  </div>
                </div>
              </div>
              <div class="mt-3  col-md-12">
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name= "email" class="form-control" id="colFormLabel">
                  </div>
                </div>
              </div>
                <div class="mt-3 mb-5 d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-primary" name = "save" >Save</button>
                </div>
              <div class="mb-3">
                <h5 class="text-center">My Contacts</h5>
              </div>
            </form>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Ph No</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <?php
                    session_start();
                    $dbhost = "localhost";
                    $dbuser = "root";
                    $dbpass = "";
                    $db = "contactsapp";
                    $count= 1;
                    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
                    $id = $_SESSION["id"];
                    $sql = mysqli_query($conn,"SELECT * FROM contacts where user_id ='$id'");
                    while($row = mysqli_fetch_assoc($sql)){
                ?>
                    <tr>
                      <td class="ev"> <?php echo $row["name"];?></td>
                      <td class="od"><?php echo $row["num"];?></td>
                      <td class="ev"><?php echo $row["email"];?></td>
                    </tr>
                    <?php $count++;}?>
              </table>
          </div>
        </div>
    </div>
  



    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>