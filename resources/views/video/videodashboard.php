<div class="container-fluid pb-video-container">
    <div class="col-md-10 offset-md-1">
        <h3 class="text-xs-center">Video Dashboard</h3>
        <div class="row pb-row">
			<?php foreach ($video_list as $all_video){ ?>
            <div class="col-md-3 pb-video">
                <video class="inlineVideo pb-video-frame" controls="controls" playsinline width="100%" height="230" src="../<?php echo $all_video->video_path ; ?>/<?php echo $all_video->video_name ; ?>" frameborder="0" allowfullscreen></video>
                <label class="form-control label-warning text-xs-center"><?php echo $all_video->name ; ?></label>
            </div>
			
			<?php } ?>
        </div>
    </div>
<?php echo $video_list->links('pagination.custom'); ?>
</div>

<style>
    .pb-video-container {
        padding-top: 20px;
		padding-bottom: 49px;	
        background: #bdc3c7;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

        .pb-video:hover {
            background: #2c3e50;
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }
</style>
