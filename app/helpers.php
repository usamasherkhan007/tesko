<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Carbon\Carbon;

class Helper{
	
    public static function getVideoList(){
        $query_result = DB::table('videos')->paginate(8);
        return $query_result;
    }
	public static function getVideo(int $video_id){
        $query_result = DB::table('videos')->where('id', $video_id)->get();

        return $query_result;
    }
}


