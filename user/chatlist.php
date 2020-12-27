<div class="col-lg-8">
    <div class="panel panel-default" style="height:50px">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;color:red"><strong><span class="glyphicon glyphicon-list"></span> Список </strong></span>
		<div class="pull-right" style="margin-right:10px; margin-top:7px;">
			<a href="#add_chatroom" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Добавить</a>
		</div>
	</div>
	<table width="100%" class="table table-striped table-bordered table-hover" id="chatRoom">
        <thead>
            <tr>
                <th>Имя комнаты</th>
				<th>Дата создания</th>
				<th><span class="glyphicon glyphicon-lock"></span> Пароль || <span class="glyphicon glyphicon-user"></span> Член</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$query=mysqli_query($conn,"select * from chatroom order by date_created desc");
			while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<input type="hidden" value="
				<?php
				$usera=array();
				$m=mysqli_query($conn,"select * from chat_member where chatroomid='".$row['chatroomid']."'");
				while($mrow=mysqli_fetch_array($m)){
					$usera[]=$mrow['userid'];
				}
				if (in_array($_SESSION['id'], $usera)){
					echo "1";
				}	
				else{
					if (!empty($row['chat_password'])){
						echo "2";
					}
					else{
						echo "3";
					}
				}
				?>
				
				"  id="status<?php echo $row['chatroomid']; ?>">
				<td>
					<?php
					$num=mysqli_query($conn,"select * from chat_member where chatroomid='".$row['chatroomid']."'");
					?>
					<span class="badge"><?php echo mysqli_num_rows($num); ?></span> <?php echo $row['chat_name']; ?>
				</td>
				<td><?php echo date('M d, Y - h:i A', strtotime($row['date_created'])); ?></td>
				<td><button value="<?php echo $row['chatroomid']; ?>" class="btn btn-info join_chat"><span class="glyphicon glyphicon-comment"></span> Заниматься</button> &nbsp;
					<?php
					if (!empty($row['chat_password'])){
						echo '<span class="glyphicon glyphicon-lock"></span>&nbsp;';
					}
					$qq=mysqli_query($conn,"select * from chat_member where chatroomid='".$row['chatroomid']."' and userid='".$_SESSION['id']."'");
					if (mysqli_num_rows($qq)>0){
						echo '<span class="glyphicon glyphicon-user"></span>';
					}
					?>
				</td>
			</tr>
			<?php
			}
		?>
        </tbody>
    </table>                     
</div>