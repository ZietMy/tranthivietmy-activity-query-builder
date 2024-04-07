<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','description'];
    //mysqlCRUD
     public function create($title, $description){
        $post =  DB::insert('INSERT INTO posts (title, description) VALUES (?, ?)', [$title, $description]);
    }
    
    public function updatePost($id, $data){
        $data[] = $id;
        DB::update('UPDATE posts SET title = ?, description = ? WHERE id = ?', $data);
    }
    
    public function deletePost($id){
        DB::delete('DELETE FROM posts WHERE id = ?', [$id]);
    }
    // PDOCRUD
    public function getOnePost($id){
        $post = DB::table('posts')->where('id', $id)->get();
        return $post; 
    }
    public function createPDO($data){
        DB::table('posts')->insert($data);
    }
    
    public function updatePostPDO($id, $data){
        DB::table('posts')->where('id', $id)->update($data);
    }
    public function deletePostPDO($id){
        DB::table('posts')->where('id', $id)->delete();
    }
}
