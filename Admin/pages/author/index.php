<?php 
$authors = [
    [
        'first_name' => 'Deshmukh',
        'last_name' => 'Prohaska',
        'email'=>'@Genelia',
    ],
    [
        'first_name' => 'Deshmukh',
        'last_name' => 'Gaylord',
        'email'=>'@Ritesh',

    ],
    [
        'first_name' => 'Sanghani',
        'last_name' => 'Gusikowski',
        'email'=>'@Govinda',

    ],
    [
        'first_name' => 'Roshan',
        'last_name' => 'Rogahn',
        'email'=>'@Hritik',

    ],
    [
        'first_name' => 'Joshi',
        'last_name' => 'Hickle',
        'email'=>'@Maruti',

    ],
    [
        'first_name' => 'Nigam',
        'last_name' => 'Eichmann',
        'email'=>'@Sonu',

    ],
  ];
?>


<?php include('../../assets/layout/header.php') ?>
<?php include('../../assets/layout/sidebar.php') ?>
<div class="page-wrapper">
    <?php include('../../assets/layout/breadcrumb.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-content-center">
                            <h4 class="card-title">Auther Table</h4>
                            <button class="btn btn-success text-light float-end">Create</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">First Name</th>
                                        <th class="border-top-0">Last Name</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($authors as $index => $author): ?>
                                    <tr>
                                        <td><?= $index+1 ?></td>
                                        <td><?= $author['first_name'] ?></td>
                                        <td><?= $author['last_name'] ?></td>
                                        <td><?= $author['email'] ?></td>                                        
                                        <td> <button class="btn btn-danger"><i class="fa fa-trash"></i></button> 
                                        <button class="btn btn-primary"><i class="fa fa-pencil-alt"></i></button>
                                    </td>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include('../../assets/layout/footer.php') ?>