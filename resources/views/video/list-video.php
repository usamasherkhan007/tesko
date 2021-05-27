
	
	<div class="container-fluid">
	<div class="row">
           <div class="col-lg-12 col-xlg-12 col-md-12">
		<?php if ($message = Session::get('success')){?>
               <div class="alert alert-success">
                   <p><?php echo $message; ?></p>
               </div>
           <?php  } ?>
           </div>
    </div>	<div class="row">
    
					<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">disctription</th>
                                <th scope="col">status</th>
                                <th scope="col">uploaded_date_time</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
							
                            <?php foreach ($video_list as $all_video){ ?>
							<tr>
								<td><?php echo $all_video->id ; ?></td>
                                <td><?php echo $all_video->name ; ?></td>
								<td><?php echo $all_video->disctription ; ?></td>
                                <td><?php echo $all_video->status ; ?></td>
                                <td><?php echo $all_video->uploaded_date_time ; ?></td>
                                <td>
									<a href="<?= url('delete_video'); ?>/<?php echo $all_video->id ; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
									<a href="<?= url('edit_video'); ?>/<?php echo $all_video->id ; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
								</td>
								
							</tr>
							<?php } ?>
                            
						</tbody>
					</table>
		</div>
		<?php echo $video_list->links('pagination.custom'); ?>
	</div>