<?php

namespace App\Http\Controllers;
use App\Videos;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Helper;
class Video extends Controller
{
   public function index(){
		 $video = Helper::getVideoList();
         return view('include/main_page', [
            'content' => 'video/list-video',
            'video_list' => $video,
			
        ]); 
	}
	public function add_video(){
         return view('include/main_page', [
            'content' => 'video/add-video',
			'user' => 'yokohama',
			
        ]); 
	}
	public function list_video(){
		 $video = Helper::getVideoList();
         return view('include/main_page', [
            'content' => 'video/list-video',
            'video_list' => $video,
			
        ]); 
	}
	public function save_video(Request $request){
	ini_set('memory_limit', '-1');
	if($request->hasFile('video_file')){
		$uploaded_call_letter = $request->file('video_file');  
        //uploaded file extension
        $uploaded_call_letter_extension = $uploaded_call_letter->getClientOriginalExtension();
        //uploaded file name with extension
        $video_name = time().preg_replace('/\s+/', '_', $uploaded_call_letter->getClientOriginalName());
        //dd($uploaded_file_name);
        //uploaded file size
        $uploaded_call_letter_size = $uploaded_call_letter->getSize();
        $destinationPath = 'public/uploads/videos';
		$uploaded_call_letter->storeAs($destinationPath,$video_name); 
		
	}
	$request->validate([
        'video_file' => 'required',
        'video_name' => 'required',
        'video_tags' => 'required',
        'video_description' => 'required',
    ]);
	$uploaded_date = date("Y-m-d H:i:s");
	$Video_upload  = Videos::insert([
            ['name' => $request->video_tags, 
			'disctription' => $request->video_description, 
            'video_path' => $destinationPath, 
            'uploaded_date_time' => $uploaded_date, 
            'video_name' => $video_name]
            
        ]);
		return redirect()->route('video.index')->with('Success', 'Video Upload Successfully!');
	}
	public function delete_video(Request $request){
		$res=Videos::find($request->id)->delete();
			if ($res){
				return redirect()->route('video.index')->with('Success', 'Video Delete Successfully!');
			}else{
				return redirect()->route('video.index')->with('Success', 'Video Not Delete!');
			}
	}
	public function edit_video(Request $request){
		$video = Helper::getVideo($request->id);
		return view('include/main_page', [
            'content' => 'video/edit-video',
			'video' => $video[0],
			
        ]); 
	}
}
