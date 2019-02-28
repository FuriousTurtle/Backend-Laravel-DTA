<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $items = DB::select("SELECT * FROM produit WHERE NOT prod_marque = 'Lens' ORDER BY RAND() LIMIT 6");
        return view('index', ['produits' => $items]);
    }

    public function product()
    {
        return view('product');
    }

    public function prodvue()
    {
        $product = DB::select("SELECT * FROM produit WHERE prod_type = 'vue'");
        return view('prodlist', ['product' => $product]);
    }

    public function prodlentille()
    {
        $product = DB::select("SELECT * FROM produit WHERE prod_type = 'lentille'");
        return view('prodlist', ['product' => $product]);
    }

    public function prodsoleil()
    {
        $product = DB::select("SELECT * FROM produit WHERE prod_type = 'soleil'");
        return view('prodlist', ['product' => $product]);
    }

    public function panier()
    {
        if (isset($_GET['id'])) {
            $userid = \Auth::user()->id;
            $prodid = $_GET['id'];
            $values = array('usr_id' => $userid, 'item_id' => $prodid);
            DB::table('usercart')->insert($values);
            $product = DB::select("SELECT * FROM usercart WHERE " . $userid . " = usr_id");
            return view('shoppingcart', ['product' => $product]);
        } else {
            $userid = \Auth::user()->id;
            $product = DB::select("SELECT * FROM usercart WHERE " . $userid . " = usr_id");
            return view('shoppingcart', ['product' => $product]);
        }
    }

    public function panierdel()
    {
        $userid = \Auth::user()->id;
        $prodid = $_GET['id'];
        $param1 = DB::table('usercart')->where('usr_id', $userid);
        DB::table('usercart')->where('item_id', $prodid)->union($param1)->delete();
        $product = DB::select("SELECT * FROM usercart WHERE " . $userid . " = usr_id");
        return view('shoppingcart', ['product' => $product]);
    }
}