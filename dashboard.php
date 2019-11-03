<?php 
@session_start();
if(!isset($_SESSION['adminID'])){
  header('Location: login.php');
}
include('include/header.php') ?>
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
          <h3 class="card-title">Welcome to our Dashboard</h3>

          <div class="card-tools" style="min-height: 90vh">
            
          </div>
        </div>
      </div>
    </section>
  <?php include('include/footer.php') ?>