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
	 

<script src="<?php echo base_url('assets/AdminLTE/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

	<!-- DataTables JavaScript -->
<script src="<?php blink('/assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php blink('/assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<!-- Select2 -->
<script src="<?php blink('/assets/AdminLTE/plugins/select2/select2.full.min.js')?>"></script>
<!--END script PLUGINS-->
<script src="<?php blink('/assets/AdminLTE/plugins/datatables/dataTables.bootstrap.js')?>"></script>

<script type="text/javascript">
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

		$('#item').load("<?php echo base_url();?>index.php/user/load_item");

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

