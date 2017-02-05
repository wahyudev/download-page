<!DOCTYPE html>
<html>
<?php
error_reporting(1); 
include 'koneksi.php';
$ip=$_SERVER['REMOTE_ADDR'];
$sql=mysql_query("INSERT INTO kunjungan(ip_address) VALUES('$ip') ");
$kun=mysql_num_rows(mysql_query("SELECT *FROM kunjungan"));
$file=mysql_fetch_array(mysql_query("SELECT* FROM file_download where id_file='$_GET[id_file]'"));
$total=mysql_num_rows(mysql_query("SELECT *FROM pendownload where file_download='$_GET[id_file]'"));
if($_GET[mode]=='catat')
{
	$id=$_POST[id_file];
	$sql=mysql_query("INSERT INTO pendownload(ip,file_download) VALUES('$ip','$id')");
	
	
}
?>
<head>
	<title>Download Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.1.11.3.min.js"></script>
    <script src="js/bootstrap-3.1.1.min.js"></script>
</head>
<body>
<hr>
	<center><h2>Download Page</h2></center>
<hr>
<div class="container">
	<div class="row">
		<div class=" col-lg-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Advertise
					</div>
				</div>
				<div class="panel body">
					space iklan
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Download File
					</div>
				</div>
				<div class="panel-body">
					<?php if(count($file)>0)
					{ ?>
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-3 ">Total Download</label>
							<label class="col-sm-6 "><?php echo $total; ?></label>
						</div>
						<div class="form-group">
							<label class="col-sm-3 ">ID File</label>
							<label class="col-sm-6 "><?php echo $file[id_file]; ?></label>
						</div>
						<div class="form-group">
							<label class="col-sm-3 ">File</label>
							<label class="col-sm-6 "><?php echo $file[nama_file]; ?></label>
						</div>
						<div class="form-group">
							<label class="col-sm-3 ">Deskripsi File</label>
							<label class="col-sm-6 "><?php echo $file[preview_file]; ?></label>
						</div>
						<div class="form-group">
							<label class="col-sm-3 "></label>
							<label class="col-sm-6 "><button type=" button" onclick="catat('<?php echo $file[id_file]; ?>')" > Download!</button></label>
						</div>
					</div>
					<?php 
					}
					else
					{
						echo "<div class='alert alert-danger'> No files To download </div>";
					}
					?>
					<blockquote>
						<i style="font-size: 10px ">Semua aplikasi yang saya upload adalah  buatan saya sendiri , kalaupun ada yang bukan akan saya sampaikan di deskripsi file, silahkan di download dipergunakan seperlunya, namun hargailah karya saya dengan tidak merubah nama creatornya :D 	</i>
					</blockquote>
				</div>
			</div>
		</div>
		<div class=" col-lg-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						Advertise
					</div>
				</div>
				<div class="panel body">
					space iklan
				</div>
			</div>
		</div>
		
	</div>
	<div class="row">
		<center><span class="label label-info">Total <?php echo $kun ; ?> Kunjungan</span> </center><hr>
		<center>Created by <a href="https://web.facebook.com/wahyu.budimanthirty">Wahyu Budiman</a> </center><hr>
	</div>
	<script type="text/javascript">
		function catat(idfile) {
			$.ajax({
				type:'post',
				url:"index.php?mode=catat",
				data:{id_file:idfile},
				success:function (hasil) {
					window.location.href="<?php echo $file[url_file]; ?>";
					console.log(hasil);
				}
			})
		}
	</script>
</div>
</body>
</html>