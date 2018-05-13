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
	<script src="<?php blink('assets/pentagon/js/main')?>"></script>
	<!-- searching js -->
	<script src="<?php blink('assets/js/jquery-3.3.1.js')?>" type="text/javascript"></script>
	<script src="<?php blink('assets/js/jquery-ui.js')?>" type="text/javascript"></script>

	<!-- DataTables JavaScript -->
<script src="<?php blink('/assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php blink('/assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<!-- Select2 -->
<script src="<?php blink('/assets/AdminLTE/plugins/select2/select2.full.min.js')?>"></script>
<!--END script PLUGINS-->
<script src="<?php blink('/assets/AdminLTE/plugins/datatables/dataTables.bootstrap.js')?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>
$('#myModal').modal('show');
</script>
	

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

		//bayar
		$(document).on('click','.pesan_cart',function(){
			var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
			$.ajax({
				url : "<?php echo base_url();?>User/pesan_cart",
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

<!-- Alert -->
<script> 
    window.setTimeout(function() {
        $(".alert-success").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); });
        $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); }); 
    }, 3000); 
</script>
<!-- end Alert -->


<script type="text/javascript">
$(document).ready( function () {
    $('#tableHistory').DataTable();
} );
</script>



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

