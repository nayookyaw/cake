<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Product;
use Validator;
use DB;
use Log;
use Auth;

class ProductController extends Controller
{
    public function getAll()
		{
			$products = DB::table('products')->orderBy('updated_at', 'desc')->get();

			return view('/tmp/productTmpl', compact('products', $products));
		}

		public function getDetail(Request $input, $id)
		{
			$product_id = $id;

			$product = DB::table('products')->where('id', $product_id)->first();

			return view('/admin/productDetail', compact('product', $product));
		}

		public function create(Request $inputs)
		{
			$product_name = $inputs->get('product_name');
			$product_price = $inputs->get('product_price');
			$product_file = $inputs->file('product_file');

			$input_arr = ['product_name' => $product_name, 'product_price' => $product_price];

			$validator = Validator::make($input_arr, [
				'product_name' => 'required|string|max:255',
				'product_price' => 'required|int|max:2147483647'
			]);
			if ($validator->fails()) { return response()->json($validator->messages(), 400); }

			if ($product_file) {
				$extension = $product_file->getClientOriginalExtension();
				Storage::disk('public')->put($product_file->getFilename().'.'.$extension,  File::get($product_file));
			}

			$product = new \App\Product;
			$product->name = $product_name;
			$product->price = $product_price;
			if ($product_file) { $product->file_name = $product_file->getFilename().'.'.$extension; }
			$product->save();

		}

		public function update(Request $inputs)
		{
			$product_id = $inputs->get('product_id');
			$product_img = $inputs->get('product_img');
			$product_name = $inputs->get('product_name');
			$product_price = $inputs->get('product_price');
			$product_file = $inputs->file('product_file');

			$input_arr = ['product_id' => $product_id, 'product_name' => $product_name, 'product_price' => $product_price];

			$validator = Validator::make($input_arr, [
				'product_id' => 'required|int|exists:products,id',
				'product_name' => 'required|string|max:255',
				'product_price' => 'required|int|max:2147483647',
			]);
			if ($validator->fails()) { return response()->json($validator->messages(), 400); }

			if ($product_file) {
				$extension = $product_file->getClientOriginalExtension();
				Storage::disk('public')->put($product_file->getFilename().'.'.$extension,  File::get($product_file));
				$file_flg = $product_file->getFilename().'.'.$extension;
			} else {
				$file_flg = $product_img;
			}
			\App\Product::updateOrCreate(['id' => $product_id] , ['name' => $product_name, 'price' => $product_price, 'file_name' => $file_flg] );

			return ;
		}

		public function delete(Request $inputs)
		{
			$product_id = $inputs->get('product_id');

			$product = Product::find($product_id);
      $product->delete();

			return;
		}
}
