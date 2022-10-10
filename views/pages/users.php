<?php
use App\Services\Page;
use App\Controllers\User;
$users = new User();

?>
<html lang="en">
<?php
Page::part('head');
?>
<body>
<?php Page::part('navbar'); ?>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <ul class="list-inline d-inline-flex">
        <li class="tr-remove"><a href="user_new" class="btn btn-block btn-success"><i class="fa fa-remove margin-r-5"></i> Создать пользователя</a></li>
    </ul>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Почта</th>
                            <th>Телефон</th>
                            <th class="tr-header-buttom" style="width: 100px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users->getUsers() as $user){ ?>
                        <tr>
                            <td><?php echo $user['name']?></td>
                            <td><?php echo $user['phone']?></td>
                            <td><?php echo $user['email']?></td>
                            <td>  <img src="" alt=""></td>
                            <td>
                                <ul class="list-inline d-inline-flex">
                                    <form action="user" method="post" enctype="multipart/form-data">
                                        <input type="text" name="id" value="<?php echo $user['id']; ?>" hidden>
                                        <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-edit margin-r-5"></i> Посмотреть</button>
                                    </form>
                                    <form action="user/delete" method="post">
                                        <input type="text" name="id" value="<?php echo $user['id']; ?>" hidden>
                                        <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-edit margin-r-5"></i> Удалить</button>
                                    </form>
                                </ul>
                            </td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>



</html>