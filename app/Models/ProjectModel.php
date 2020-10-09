<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class ProjectModel extends Model
{
    use HasFactory;
    public static function add($res)
    {
       return DB::table('projects')->insert($res);
    }
    public static function get()
    {
       return DB::table('projects')->paginate(10);
    }

}
