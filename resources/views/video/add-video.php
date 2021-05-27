
<div class="container" style="margin-top:35px; background: #ececec;">
<?= Form::open(array('url' => 'save_video' ,'enctype'=>'multipart/form-data')) ?>
	<div class="row">
		<div class="col-md-12 form-group">
			<?php echo Form::label('select', 'Select Video'); ?>
			<?php echo Form::file('video_file', $attributes = array('class="form-control"')); ?>
		</div>
	</div>
	<div class="row">
	
		<div class=" col-md-6 form-group">
			
			<?php echo Form::label('videoname', 'Set Video Name'); ?>
			<?php echo Form::text('video_name', $value = NULL, $attributes = array('class="form-control" placeholder="Name"')); ?>
			
		</div>
		<div class=" col-md-6 form-group">
			<?php echo Form::label('videotags', 'Set Tags'); ?>
			<?php echo Form::text('video_tags', $value = NULL, $attributes = array('class="form-control" placeholder="Tags"')); ?>
			
		</div>
	</div>
	<div class=" row form-group">
		<div class="col-md-6 form-group">
			<?php echo Form::label('description', 'Add Description'); ?>
			<?php echo Form::textarea('video_description', $value = NULL, $attributes = array('class="form-control" placeholder="Description" rows="2"')); ?>

		</div>
		<div class="col-md-6 form-group"  style="margin-top: 55px;">
			<button  type="submit"  class="btn btn-warning" style="margin-left: 418px;" >Upload Video</button>
		</div>
	</div>
<?= Form::close() ?>

</div>
<!--<div class="container" style="margin-top:35px; background: #ececec;">
<form>
	<div class="row">
		<div class="col-md-12 form-group">
			<label for="exampleFormControlInput1">Select Video</label>
			<input type="file" class="form-control" name="video_file" id="exampleFormControlInput1" placeholder="video_file">
		</div>
	</div>
  <div class="row">
	
	<div class=" col-md-6 form-group">
		<label for="exampleFormControlSelect1">Set Video Name</label>
		<input type="text" class="form-control" name="video_name" placeholder="Name" id="video_name">
	</div>
	<div class=" col-md-6 form-group">
		<label for="exampleFormControlSelect1">Set Tags</label>
		<input type="text" class="form-control" name="video_tag" placeholder="Name" id="video_tag">
	</div>
	
	
  </div>
  <div class=" row form-group">
	<div class="col-md-6 form-group">
		<label for="exampleFormControlSelect2">Add Description</label>
		<textarea class="form-control" name="video_description" placeholder="Description" id="video_description"></textarea>
	</div>
	<div class="col-md-6 form-group"  style="margin-top: 55px;">
		<button  type="submit"  class="btn btn-warning" style="margin-left: 418px;" >Upload Video</button>
	</div>
  </div>
</form>
</div>-->