		<footer style="margin-top: -150px; padding-top: 90px">
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
		    				<h3 style="color: white">About us</h3>
								<img alt="" src="<?php blink('assets/img/img/panen.png')?>" width="28%">
		    						<div class="col-md-6 pull-right">
										<p style="margin-left:-50px;">
											Panenpangan.com menjual berbagai macam pangan yaitu Sayuran,
											Buah, Beras dengan harga terjangkau dari tangan petani langsung
											dan kualitas bahan-bahan yang terjamin mutunya.
										</p>
		    						</div>
								</div>

								<div class="col-md-6 pull-right">
								    <h3 style="color: white; margin-left: 250px">Contact Us</h3>
								    <ul>
								        <li style="color: white; margin-left: 250px">Phone : (021) 73378107 </li>
								        <li style="color: white; margin-left: 250px">E-mail : cs@panenpangan.com</li>
								    </ul>
								</div>
					</div>
				</div>
			</div>
		</footer>
	 

	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	<script src="<?php blink('assets/pentagon/js/jquery.min')?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php blink('assets/pentagon/js/jquery.easing.1.3')?>"></script>
	<!-- Bootstrap -->
	<script src="<?php blink('assets/pentagon/js/bootstrap.min')?>"></script>
	<!-- Waypoints -->
	<script src="<?php blink('assets/pentagon/js/jquery.waypoints.min')?>"></script>
	<!-- Stellar -->
	<script src="<?php blink('assets/pentagon/js/jquery.stellar.min')?>"></script>
	<!-- Superfish -->
	<script src="<?php blink('assets/pentagon/js/hoverIntent')?>"></script>
	<script src="<?php blink('assets/pentagon/js/superfish')?>"></script>
	<!-- Main JS -->
	<script src="<?php blink('assets/js/jquery-3.3.1.js')?>" type="text/javascript"></script>
	<script src="<?php blink('assets/js/jquery-ui.js')?>" type="text/javascript"></script>
	<script src="<?php blink('assets/pentagon/js/main')?>"></script>


	<!-- java cart -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var id_brg  = $(this).data("produkid");
			var nm_brg  = $(this).data("produknama");
			var harga 	= $(this).data("produkharga");
			var quantity     = $('#' + id_brg).val();
			$.ajax({
				url : "<?php echo base_url();?>index.php/user/add_to_cart",
				method : "POST",
				data : {id_brg: id_brg, nm_brg: nm_brg, harga: harga, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		// Load shopping cart
		$('#detail_cart').load("<?php echo base_url();?>index.php/user/load_cart");

		//Hapus Item Cart
		$(document).on('click','.hapus_cart',function(){
			var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
			$.ajax({
				url : "<?php echo base_url();?>User/hapus_cart",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});
</script>
<!-- akhir java cart -->

<!-- Update Status -->
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
         
        //Update Barang
        $('#btn_update').on('click',function(){
            var id_pesan=$('#status_konfirmasi').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('Tracking/konfirmasi')?>",
                dataType : "JSON",
                data : {id_pesan:id_pesan},
                success: function(data){
                    $('[name="id_pesan"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });
 
    });

    $('#mydata').dataTable();
          
        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/barang/data_barang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].barang_kode+'</td>'+
                                '<td>'+data[i].barang_nama+'</td>'+
                                '<td>'+data[i].barang_harga+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].barang_kode+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].barang_kode+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
</script>
<!-- END UPDATE STATUS -->

<!-- ambil data search -->
<script type="text/javascript">
		$(document).ready(function(){

		    $('#title').autocomplete({
                source: "<?php blink('C_DaftarBarang/get_autocomplete');?>",
     
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                    $("#form_search").submit(); 
                }
            });

		});
	</script>
	<!-- akhir ambil data -->
	</body>
</html>
