<?php 
@session_start();
if(!isset($_SESSION['adminID'])){
  header('Location: login.php');
}
require_once('class/AdminClass.php');
$admin=new AdminClass();
if(isset($_POST['email'])){
  $admin->add_admin($_POST);
}
if(isset($_GET['id'])){
$d=$admin->get_admin($_GET['id']);
$data=mysqli_fetch_assoc($d['edit']);
// echo "<pre>";
// var_dump($data);
// echo "</pre>";
}

?>
<?php include('include/header.php') ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">New Admin </h3>
        <div class="card-body">
            <form action="" method="post">
            <table class="table table-bordered">
              <?php if(isset($data)){ ?>
  <input type="hidden" name="id" value="<?php echo @$data['id'] ?>">
              <?php } ?>
              <tr>
                <th>Name</th>
                <td><input type="text" class="form-control" name="name" value="<?php echo @$data['name'] ?>"></td>
                <th>Email</th>
                <td><input type="text" class="form-control" name="email" value="<?php echo @$data['email'] ?>"></td>
              </tr>
              <tr>
                <th>Password</th>
                <td colspan="2"><input type="password" class="form-control" name="password" value="<?php echo @$data['password'] ?>"></td>
                <td><input type="submit" class="btn btn-block btn-primary" value="Save"></td>

              </tr>
            </table>
            </form>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> Admin List</h3>
        <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
              </tr>
             <?php
             $d=$admin->get_admin();
             $i=0;
             while ($r=mysqli_fetch_assoc($d['list'])) {
             ?>
  <tr>
    <td><?php echo ++$i; ?></td>
    <td><?php echo $r['name'] ?></td>
    <td><?php echo $r['email'] ?></td>
    <td>
      <a href="admin_list.php?id=<?php echo $r['id'] ?>" class="btn btn-success">Edit</a>
      <a href="delete_admin.php?id=<?php echo $r['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
  </tr>
             <?php } ?>
            </table>
        </div>
      </div>
    </div>
  </section>
  <?php include('include/footer.php') ?>