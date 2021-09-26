<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\Banners;
use App\Models\Country;
use App\Models\Category;
use App\Models\Products;

class UsersController extends Controller
{
    public function register(Request $request){

        if($request->isMethod('post'))
        {
            $data=$request->all();
            $userCount = User::where('email',$data['email'])->count();
            if($userCount>0){
                return redirect()->back()->with('flash_message_error','Email is already exist');
            }
            elseif($data['password']!=$data['confirm'])
            {
                return redirect()->back()->with('flash_message_error','Please match your Password and Confirm Password ');
            }

            else{
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->	mobile = $data['mobile'];
                $user->address = $data['address'];
                $user->	city = $data['city'];
                $user->	country = $data['country_id'];
                $user->password = bcrypt($data['password']);
                $user->	subscribe = $data['newsletter'];
                $user->save();

                $email = $data['email'];
                $messageData = ['email'=>$data['email'],'name'=>$data['name'],
                'code'=>base64_encode($data['email'])];
                Mail::send('E-com.email.confirm',$messageData,function($message) use($email){
                  $message->to($email)->subject('Account Activation For Wayshop');
                });
                  return redirect()->back()->with('flash_message_error','Please Confirm Your Email To Activate Your Account !');




               // return redirect()->back()->with('flash_message_success','Regisration Confirm');

            }


        }

        return view('E-com.users.register');
    }

    public function account(Request $request){
        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id);
        $countries = Country::get();
        if($request->isMethod('post')){
            $data = $request->all();
            if(!empty($data['new-password'] && $data['old-password']))
            {
                $old_pwd = User::where('id',Auth::User()->id)->first();
                $current_password = $data['old-password'];
                if(Hash::check($current_password,$old_pwd->password)){
                    
                    if($data['new-password']== $data['new-confirm'])
                    {
                        $new_pwd = bcrypt($data['new-password']);
                        User::where('id',Auth::User()->id)->update(['password'=>$new_pwd]);
                        return redirect()->back()->with('flash_message_success','Yours Password is Changed Now!');
                    }
                    return redirect()->back()->with('flash_message_error','Confirm Password does not match with New Password ');

                }
                else
                {
                 return redirect()->back()->with('flash_message_error','Old Password is Incorrect!');
                }                
            }
            $user = User::find($user_id);
            $user->name = $data['name'];
            $user->address = $data['address'];
            $user->city = $data['city'];
            $user->country = $data['country'];
            $user->mobile = $data['mobile'];
            $user->save();
            return redirect()->back()->with('flash_message_success','Account Details Has Been Updated!');
        }          
        return view('E-com.users.account')->with(compact('userDetails','countries'));
    }

    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data=$request->all();

            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
            {
                $userStatus = User::where(['email'=>$data['email']])->first();
                if($userStatus->status == 0)
                {
                    return redirect()->back()->with('flash_message_error','Your Account is not activated ! Please confirm your email to activate your account.');
                }
                Session::put('frontSession',$data['email']);
                return redirect('/');
            }
            else {
                return redirect()->back()->with('flash_message_error','Invalid username and password!');
            }
        }
        return view('E-com.users.login');
    }
    public function confirmAccount($email){
        $email = base64_decode($email);
        $userCount = User::where(['email'=>$email])->count();
        if($userCount > 0){
          $userDetails = User::where(['email'=>$email])->first();
            if($userDetails->status == 1){
                return redirect('/register_page')->with('flash_message_error','Your Account is already activated. You can simply login now.');
            }else{
              User::where(['email'=>$email])->update(['status'=>1]);
              //Send Welcome to Users
                  $messageData = ['email'=>$email,'name'=>$userDetails->name];
                  Mail::send('E-com.email.welcome',$messageData,function($message) use($email){
                    $message->to($email)->subject('Welcome To Wayshop Website');
                  });
              return redirect('/register_page')->with('flash_message_success','Congrats! Your Account is now Activated');
            }
        }else{
            abort(404);
        }
     }
     public function logout(){
        Session::forget('frontSession');
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        $banners = Banners::where('status','1')->orderby('sort_order','asc')->get();
        return view('E-com.index')->with(compact('banners'));
    }
    public function search(Request $request)
    {
        $product_search=$request->input('search');
        $products=Products::where('name','like','%'.$product_search.'%')->where('status',1)->get();
        return view('E-com.search_product')->with(compact('products'));
    }
    public function categories($category_id){

        $products = Products::where(['category_id'=>$category_id])->get();
        $product_name = Products::where(['category_id'=>$category_id])->first();
        return view('E-com.categories')->with(compact('products','product_name'));
    }
    public function category($category_id){

        $cat=Category::where(['parent_id'=>$category_id])->get();
        foreach($cat as $cat)
        {
            $products[]=Products::where(['category_id'=>$cat->id])->get();
            $product_name[]=Products::where(['category_id'=>$cat->id])->first();
        }
        return view('E-com.category')->with(compact('products','product_name'));

    }




    public function compose(View $view)
    {
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $view->with('categories', $categories);
    }
    

}
