 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1><?= $title; ?></h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active"><?= $title; ?></li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <!-- Profile Image -->
         <div class="card card-primary card-outline col-md-4">
             <div class="card-body box-profile">

                 <h3 class="profile-username text-center"><?= $user['name']; ?></h3>

                 <p class="text-muted text-center">PAMS</p>

                 <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">
                         <b>Email</b> <a class="float-right"><?= $user['email']; ?></a>
                     </li>
                     <li class="list-group-item">
                         <b>Role Id</b> <a class="float-right"><?= $user['role_id']; ?></a>
                     </li>
                 </ul>
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->
     </section>
     <!-- /.content -->
 </div>