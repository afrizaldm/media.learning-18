<?php
include '../config/connection';
$userid = $_SESSION['userid'];
?>
<link rel="stylesheet" href="../css/chat-style.css" type="text/css">
<script src="chat.js" type="text/javascript"></script>
<section>
    <!-- Content -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Halaman Ruang Diskusi</h1>
            </div>
        </div><!-- /Row -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" id="accordion">
                        <span class="glyphicon glyphicon-comment"></span> Ruang Diskusi
                    </div>
                    
                    <div class="panel-body">
                        <ul class="chat">
                            <div class="isi"></div>


                            <!--<li class="right clearfix"><span class="chat-img pull-right">
                                <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                            </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                        dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="message" type="text" class="form-control input-sm" placeholder="Type your message here..."/>
                            <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" readonly=""/>
                            <span class="input-group-btn">
                                <button class="btn btn-warning btn-sm" id="send" type="submit">
                                    Send
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /Page Wrapper -->
</section>
<script type="text/javascript">
    $(document).ready(function(){
        function show(){
            $.ajax({
                type: "POST",
                url: "simpan_chat.php",
                data: "action=show",
                success: function(data){
                    $('.isi').html(data);
                }
            });
        };
        
        setInterval(function(){
            show();
        },1000);
        
        $("#send").click(function(){
            var userid = $("#userid").val();
            var message = $("#message").val();
            $.ajax({
                type: "POST",
                url: "simpan_chat.php",
                data: "action=insert&userid="+userid+"&pesan="+message,
                success: function(data){
                    show();
                }
            });
            $("#userid").val(userid);
            $("#message").val("");
        });
    });
</script>