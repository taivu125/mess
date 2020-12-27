<nav class="navbar navbar-default" >
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" ></a>
		</div>
		
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-list"></span> Сообщение</a></li>
			<li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Пользователи</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Обновить фото</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Выйти</a></li>
                    </ul>
			</li>
		</ul> 
    </div>
</nav>