<!-- Logout-->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Выход из ...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<center><strong><span style="font-size: 15px;">Имя пользователя: <?php echo $user; ?></span></strong></center>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
                    <a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Выйти</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Загрузка фото ...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<form method="POST" enctype="multipart/form-data" action="update_photo.php">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Фото:</span>
						<input type="file" style="width:350px;" class="form-control" name="image">
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-upload"></span> Загрузить</button>
					</form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Мой счет</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="update_account.php">
					<div style="height: 10px;"></div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Имя:</span>
						<input type="text" style="width:350px;" class="form-control" name="mname" value="<?php echo $srow['uname']; ?>">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Имя пользователя:</span>
						<input type="text" style="width:350px;" class="form-control" name="musername" value="<?php echo $srow['username']; ?>">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Пароль:</span>
						<input type="password" style="width:350px;" class="form-control" name="mpassword" value="<?php echo $srow['password']; ?>">
					</div>
					<hr>
					<span>Введите текущий пароль, чтобы сохранить изменения:</span>
					<div style="height: 10px;"></div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Пароль:</span>
						<input type="password" style="width:350px;" class="form-control" name="cpassword">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Ещё раз:</span>
						<input type="password" style="width:350px;" class="form-control" name="apassword">
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Обновить</button>
				</form>
                </div>
            </div>
        </div>
    </div>
