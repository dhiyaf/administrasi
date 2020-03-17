<div class="modal fade" id="delete<?php echo $row['id_user']; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
					<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times; </button>
				<h4 class="modal-title" id="logout"> Hapus User </h4>
			</div>
<!-- Modal Body -->
           	<div class="modal-body">
		        <h4>Anda yakin ingin menghapus user?</h4>
		    </div>
	        <div class="modal-footer">
	        	
		        <a href="proses_deleteuser.php?id_user=<?php echo $row['id_user']; ?>" type="button" class="btn btn-primary"> Yes </a>
		        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
		        </form>
	        </div>
        </div>
    </div>
</div>