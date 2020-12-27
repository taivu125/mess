<!-- Leave Room -->
    <div class="modal fade" id="leave_room" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Покидая комнату ...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h3><center>Вы уверены?</center></h3>
					<span style="font-size: 11px;"><center><i>Примечание: как только вы выйдете из комнаты и захотите вернуться, потребуется пароль для запертой комнаты.</i></center></span>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
                    <button type="submit" class="btn btn-warning" id="confirm_leave"><span class="glyphicon glyphicon-check"></span> Покинуть</button>
				
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete_room" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Удаление комнаты ...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h3><center>Вы уверены?</center></h3>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
                    <button type="submit" class="btn btn-danger" id="confirm_delete"><span class="glyphicon glyphicon-check"></span> Удалять</button>
				
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Добавить участников</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="addnewmember.php?id=<?php echo $id; ?>">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Выбрать:</span>
						<select style="width:350px;" class="form-control" name="user">
							<?php
							include('../conn.php');
								$mem=array();
								$um=mysqli_query($conn,"select * from `chat_member` where chatroomid='$id'");
								while($umrow=mysqli_fetch_array($um)){
									$mem[]=$umrow['userid'];
								}
								$users=implode($mem, "', '");
								
								$u=mysqli_query($conn,"select * from `user` where userid not in ('".$users."')");
								if(mysqli_num_rows($u)<1){
									?>
									<option value="">Нет доступных пользователей</option>
									<?php
								}
								else{
								while($urow=mysqli_fetch_array($u)){
									?>
										<option value="<?php echo $urow['userid']; ?>"><?php echo $urow['uname']; ?></option>	
									<?php
								}
								}
							
							?>
						</select>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Добавить</button>
					</form>
                </div>
            </div>
        </div>
    </div>