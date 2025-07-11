<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\addsub;
use Illuminate\Http\Request;
use App\Models\categorymodel;
use App\Models\insertProducts;
use App\Models\insertAccessories;
use Illuminate\Support\Facades\DB;

class PlantNest extends Controller
{
   public function index()
   {
      $items = insertProducts::get();
      return view('index',compact('items'));
   }

   public function flowering()
   {
      $items = insertProducts::get();
      return view('flowering',compact('items'));
   }

   public function non_flowering()
   {
      $items = insertProducts::get();
      return view('non_flowering',compact('items'));
   }

   public function outdoor()
   {
      $items = insertProducts::get();
      return view('outdoor',compact('items'));
   }

   public function indoor()
   {
      $items = insertProducts::get();
      return view('indoor',compact('items'));
    
   }
   public function carousel()
   {
      $items = insertProducts::get();
      return view('carousel',compact('items'));
    
   }

   public function succulents()
   {
      $items = insertProducts::get();
      return view('succulents',compact('items'));
   }

   public function medicinal()
   {
      $items = insertProducts::get();
      return view('medicinal',compact('items'));
   }
   public function accessories()
   {
      $items = insertAccessories::get();
      return view('accessories',compact('items'));
   }

   public function gallery()
   {
    return view("gallery");
   }

   public function login()
   {
    return view("login");
   }

   public function register()
   {
    return view("register");
   }



   


   public function insertsignup(Request $req)
   {
      $user  = new Users();
      $user->UserName =$req->name;
      $user->ContactNumber = $req->contact;
      $user->Email =$req->email;
      $user->Pass = $req->password;
      $user->ConfirmPass = $req->repass;
      $user->save();
      return redirect()->back();
   }


   public function loginUser(Request $req){
      $email = $req->email;
      $pass = $req->pass;
      $login = DB::table('users')->where(['Email'=>$email, 'Pass'=>$pass])->first();
      if($login != ""){
         return view("index");
      }
      else{
         return redirect()->back()->with("loginmessage"," Incorrect Email or Password!");
      }
   }


   public function addcategory(Request $req)
   {
      $cate = new  categorymodel();
      $cate->Category_Name = $req->myname;
      $cate->save();

      return redirect()->back();

   }


   public function addcategoryaccessories(Request $req)
   {
      $ins = new addsub();
      $ins->Name = $req->catname;
      $ins->save();
      return redirect()->back();

   }


   public function viewsub()
   {
      $sub = addsub::all();
      return view('addaccessories',compact("sub"));
   }


   public function productview_()
   {

      $caterecord = categorymodel::all();
      return view('addproduct',compact('caterecord'));
   }


   public function productfetch_()
   {
      $product = insertProducts::all();
      return view('allproducts',compact('product'));
   }


   public function accessoriesfetch_()
   {
      $product = insertAccessories::all();
      return view('allaccessories',compact('product'));
   }


   public function insertproduct(Request $pro)
   {
      $product = new insertProducts();

      $product->Name = $pro->pname;
      $product->Price = $pro->pprice;
      $product->Quantity = $pro->pquantity;
      $product->Details = $pro->pdetails;
      $product->Cat_Name = $pro->procate;
      $insert = $pro->file('pimage');
      $ext = rand(). '.' . $insert->getClientOriginalName();
      $mypro = $insert->move('product/',$ext);
      $product->Image = $mypro;
      $product->save();
      return redirect()->back();
   }



   public function insertAccessories(Request $pro)
   {
      $product = new insertAccessories();

      $product->Name = $pro->pname;
      $product->Price = $pro->pprice;
      $product->Purpose = $pro->pdetails;
      $product->Category = $pro->procate;
      $insert = $pro->file('pimage');
      $ext = rand(). '.' . $insert->getClientOriginalName();
      $mypro = $insert->move('Accessories/',$ext);
      $product->Image = $mypro;
      $product->save();
      return redirect()->back();
   }


   public function loginAdmin(Request $reque){
      $Email = $reque->email;
      $Pass = $reque->pass;
      $login = DB::table('admin_logins')->where(['email'=>$Email, 'password'=>$Pass])->first();
      if($login != ""){
         return view("categoryinsert");
      }
      else{
         return redirect()->back()->with("loginmessage"," Incorrect Email or Password!");
      }
   }


   

   //delete data code by product id

   public function destroy(insertProducts $product,Request $request)
   {
       $id = $request->Product_id;
       $product = insertProducts::find($id);
       $product->delete();
       return response()->json('success');
   }




   public function viewcategory()
   {
      $category = categorymodel::all();
      return view('adminviewcategory',compact("category"));
   }

   public function viewacccategory()
   {
      $category = addsub::all();
      return view('accdelcategory',compact("category"));
   }


   public function deleteCategory($cateid)
   {
      $catemodel = categorymodel::find($cateid);
      $catemodel->delete();
      return redirect()->back();
   }

   public function deleteAcc($accid)
   {
      $accmodel = addsub::find($accid);
      $accmodel->delete();
      return redirect()->back();
   }


   public function deleteProduct($productid)
   {
      $promodel = insertProducts::find($productid);
      $promodel->delete();
      return redirect()->back();
   }


   public function editdataProduct($proid)
   {
      $category = categorymodel::all();
       $edit = insertProducts::find($proid);
       return view('editProduct' , compact(["edit","category"]));
   }


   public function deleteAccessory($accessid)
   {
      $accessmodel = insertAccessories::find($accessid);
      $accessmodel->delete();
      return redirect()->back();
   }


   public function editdataAccessory($accessid)
   {
      $category = addsub::all();
       $edit = insertAccessories::find($accessid);
       return view('editaccessories' , compact(["edit","category"]));
   }


   public function editAccess($accid, Request $edt)
   {
    
       $editrecord = insertAccessories::find($accid);
       $editrecord ->Name = $edt ->aname;
       $editrecord->Price = $edt->aprice;
       $editrecord->Category = $edt->apurpose;
       $editrecord->Purpose = $edt->acccate;
       $editrecord->update();
       return redirect("allaccessories");
       
       
   }

   public function edit($proid, Request $edt)
   {
    
       $editrecord = insertProducts::find($proid);
       $editrecord ->Name = $edt ->pname;
       $editrecord->Price = $edt->pprice;
       $editrecord->Quantity = $edt->pquantity;
       $editrecord->Cat_Name = $edt->pdetails;
       $editrecord->Details = $edt->procate;
       $editrecord->update();
   
       
       return redirect("allproducts");
       
       
   }
   public function deleteuser($userid)
   {
      $usermodel = Users::find($userid);
      $usermodel->delete();
      return redirect()->back();
   }

   public function usersregistered()
   {
      $users = Users::all();
      return view('usersregistered',compact('users'));
   }
   function addtocart($id)
   {
         $pdt = insertProducts::findorFail($id);
         $Cart = session()->get("Cart",[]);

         if(isset($Cart[$id]))
         {
            $Cart[$id]['quantity']+=1;
            session()->put("Cart",$Cart);
         }
         else
         {
            $Cart[$id]=[

               'name'=>$pdt->name,
               'price'=>$pdt->price,
               'Description'=>$pdt->Description,
               'image'=>$pdt->image,
               'quantity'=> 1
            ];

            session()->put("Cart",$Cart);
         }
         return redirect()->back()->with("itemadded","Your item has been successfully added");

   }

   function remove($id)
   {

            
      if(isset($id))
      {
            $Cart = session()->get("Cart"); 
               unset($Cart[$id]);
               session()->put('Cart',$Cart);
               return redirect()->back()->with("delete","Item deleted successfully");
         }
      
   }

   public function searchget(Request $req)
   {
      $searchtext = $req->search;
      $items = Products::where("name","like",$searchtext."%")->get();

      if($items != null)
      {
         return view("searcheditems",compact('products'));

      }
      
   }
}
