<?php
use App\Services\Page;

$user = new \App\Controllers\User();
$user = $user->getUser($_POST['id']);
?>
<html lang="en">
<?php
Page::part('head');
?>
<body>
<?php Page::part('navbar'); ?>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Телефон</th>
                            <th>Почта</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $user->name; ?></td>
                                <td><?php echo $user->phone; ?></td>
                                <td><?php echo $user->email; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
Page::part('footer');
?>
</body>



</html>