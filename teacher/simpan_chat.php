<?php
include '../config/connection.php';
$nama = $_SESSION['nama1'];

if(isset($_POST['action'])){
    $action = $_POST['action'];
    if($action == "show"){
        $sql = "SELECT * FROM v_chat order by waktu desc ";
        $hasil  = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($hasil)){
            if($row['first_name']==$nama){
                echo "<li class=\"left clearfix\">
                    <span style=\"color: blue;\" class=\"fa fa-user-circle fa-fw fa-lg\"></span>
                    <div class=\"chat-body clearfix\">
                        <div class=\"header\">
                            <strong style=\"color: blue;\" class=\"primary-font\">You</strong> 
                            <small style=\"color: blue;\" class=\"pull-right text-muted\">
                                <span class=\"glyphicon glyphicon-time\"></span>".$row['waktu']."
                            </small>
                        </div>
                        <p style=\"color: blue;\">".$row['chat']."</p>
                    </div>
                </li>";
            }
			elseif($row['level'] == "teacher" || $row['level'] == "teacher3"){
				echo "<li class=\"left clearfix\">
                    <span class=\"fa fa-user-circle fa-fw fa-lg\"></span>
                    <div class=\"chat-body clearfix\">
                        <div class=\"header\">
                            <strong class=\"primary-font\">".$row['first_name']." (Guru)</strong> 
                            <small class=\"pull-right text-muted\">
                                <span class=\"glyphicon glyphicon-time\"></span>".$row['waktu']."
                            </small>
                        </div>
                        <p>".$row['chat']."</p>
                    </div>
                </li>";
			}
            else{
                echo "<li class=\"left clearfix\">
                    <span class=\"fa fa-user-circle fa-fw fa-lg\"></span>
                    <div class=\"chat-body clearfix\">
                        <div class=\"header\">
                            <strong class=\"primary-font\">".$row['first_name']."</strong> 
                            <small class=\"pull-right text-muted\">
                                <span class=\"glyphicon glyphicon-time\"></span>".$row['waktu']."
                            </small>
                        </div>
                        <p>".$row['chat']."</p>
                    </div>
                </li>";
            }            
        }
    }
    
    elseif($action == "insert"){
        $d = date("Y-m-d H:i:s");
        $sql = "INSERT INTO chatbox(userid, chat, waktu) VALUES('$_POST[userid]','$_POST[pesan]','$d')";
        $query = mysqli_query($con, $sql);
    }
}
?>