<section>
    <!-- Content -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!-- /Row -->

	<style>
		table th{
			padding: 10px;
			background-color: #dddddd;
		}

		.logo {
			margin-top: 36px;
			width: 230px;
		}

		.animate-bounce {
			animation-name: bounce;
			animation-duration: 1.2s;
    		animation-delay: 0.5s;
			animation-iteration-count: infinite;
		}

		@keyframes bounce {
			from,
			20%,
			53%,
			80%,
			to {
				-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
				animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}

			40%,
			43% {
				-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
				animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
				-webkit-transform: translate3d(0, -30px, 0);
				transform: translate3d(0, -30px, 0);
			}

			70% {
				-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
				animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
				-webkit-transform: translate3d(0, -15px, 0);
				transform: translate3d(0, -15px, 0);
			}

			90% {
				-webkit-transform: translate3d(0, -4px, 0);
				transform: translate3d(0, -4px, 0);
			}
		}
	</style>
	
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <center>
                        <img class="logo animate-bounce" src="../file/images/tudet1.jpeg"/>
                        <h1>Welcome to Hybrid</h1>
                        <h1>Learning System</h1>
                    </center>
					<br>
					<table id="float-line-cart" class="table-statistik" align="center" width="100%" border="1" style="padding: 10px;">
						<caption>Statistik Pengunjung (Seminggu Terakhir)</caption>
						<thead>
							<tr>
								<td></td>
								<th style="text-align: center;">Pengunjung</th>
								<th style="text-align: center;">Total Preview</th>
							</tr>
						</thead>
						
						<tbody>
							<?php
							$tgl_skrg = date("Y-m-d"); // dapatkan tanggal sekarang saat online

							// dapatkan 6 hari sblm tgl sekarang 
							$seminggu = strtotime("-1 week +1 day",strtotime($tgl_skrg));
							$hasilnya = date("Y-m-d", $seminggu);

							// lakukan looping sebanyak 6 kali   
							for ($i=0; $i<=6; $i++){
								$urutan_tgl   = strtotime("+$i day",strtotime($hasilnya));
								$hasil_urutan = date("d-M-Y", $urutan_tgl);

								$tgl_pengujung   = strtotime("+$i day",strtotime($hasilnya));
								$hasil_pengujung = date("Y-m-d", $tgl_pengujung);
								$query_pengujung = mysqli_num_rows(mysqli_query($con, "SELECT * FROM statistik WHERE tanggal='$hasil_pengujung' GROUP BY ip"));

								$tgl_hits   = strtotime("+$i day",strtotime($hasilnya));
								$hasil_hits = date("Y-m-d", $tgl_hits);
								$query_hits = mysqli_fetch_array(mysqli_query($con, "SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$hasil_hits' GROUP BY tanggal"));

								$hits_today = $query_hits['hitstoday'];

								if ($hits_today==""){ 
									$hits_today="0"; 
								}
							  ?>
							<tr>
								<th><?php echo $hasil_urutan ?></th>
								<td align="center"><?php echo $query_pengujung ?></td>
								<td align="center"><?php echo $hits_today ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table><br>
                </div>
            </div>
        </div>
    </div><!-- /Row -->
</section>