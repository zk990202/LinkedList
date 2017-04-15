<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function push()
    {
        return view('pushweb');
    }


    public function R_push(Request $request)
    {
        $data =  $request->input('data');
        $max = DB::table('LinkedList')
            ->max('id');
        DB::table('LinkedList')
            ->insert(
        ['id' => $max + 1 ,'name' => $data]
        );
        return view('push_success', ['data' => $data]);
    }

    public function print_list()
    {
        $print = DB::table('LinkedList')->get();
        return view('print_success', ['print' => $print]);
    }

    public function delete()
    {
        return view('deleteweb');
    }

    public function R_delete(Request $request)
    {
        $index =  $request->input('index');
        DB::table('LinkedList')
        ->where('id', $index)
        ->delete();

        $max = DB::table('LinkedList')
            ->max('id');
        for($i = $index + 1; $i <= $max; $i++)
        {
            DB::table('LinkedList')
                ->where('id', $i)
                ->decrement('id');
        }
        return view('delete_success',['index' => $index, 'max' => $max]);
    }

    public function truncate()
    {
        DB::table('LinkedList')
            ->truncate();
        echo '已清空链表';
    }

    public function insert()
    {
        return view('insertweb');
    }

    public function R_insert(Request $request)
    {
        $index =  $request->input('index');
        $data = $request->input('data');

        $max = DB::table('LinkedList')
            ->max('id');

        if($index < $max)
        {
            for($i = $max; $i >= $index; $i--)
            {
                DB::table('LinkedList')
                    ->where('id', $i)
                    ->increment('id');
            }
            DB::table('LinkedList')
                ->insert(
                    ['id' => $index, 'name' => $data]
                );
        }
        return view('insert_success', ['index' => $index, 'data' => $data, 'max' => $max]);
    }

    public function pop()
    {
        $max = DB::table('LinkedList')
            ->max('id');
        $pop = DB::table('LinkedList')//bug
            ->where('id', $max)
            ->get();
        DB::table('LinkedList')
            ->where('id', $max)
            ->delete();
        return view('pop_success', ['data' => $pop]);
    }

    public function size()
    {
        $count = DB::table('LinkedList')
            ->count();
        return view('size_success', ['size' => $count]);
    }

    public function construct()
    {
        DB::table('LinkedList')
            ->truncate();
        return view('constructweb');
    }

    public function R_construct(Request $request)
    {
        $str = $request->input('list');
        $list = explode(" ", $str);
        $size = count($list);
        for($i = 1; $i <= $size; $i++)
        {
            DB::table('LinkedList')
                ->insert(
                    ['id' => $i, 'name' => $list[$i-1]]
                );
        }
       return view('construct_success');
    }

    public function welcome()
    {
        return view('welcome');
    }

}