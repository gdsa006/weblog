<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Help;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Validator;
use Auth;
use DB;
use Carbon\Carbon;   
use Yajra\Datatables\Datatables;
use Response;
use Mail;
use Input;
use Redirect;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $post = new Blog();
        $posts = $post->limit(3)->get();
        return View('welcome', compact('posts'));
    }

    public function resources(){
        return View('resources');
    }

    public function blog(){
        $blog = new Blog();
        $posts = $blog->paginate(5);

        $blog = new Blog();
        $recent = $blog->limit(3)->orderBy('created_at', 'DESC')->get();
        
        $data = $blog->orderBy('created_at')->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('M o');
        });

        return View('blog/all', compact('posts', 'recent', 'data'));
    }

    public function blogPost($slug){
        $id = Blog::where('slug', $slug)->pluck('id');
        $post  = Blog::where('id', $id)->first();

        $blog = new Blog();
        $recent = $blog->limit(3)->orderBy('created_at', 'DESC')->get();

        $data = $blog->orderBy('created_at')->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('M o');
        });

        return View('blog/single', compact('post', 'recent', 'data'));
    }

    public function showLogin()
    {
        // show the form
        return View('admin/login');
    }
    
    public function doLogin()
    {
    // validate the info, create rules for the inputs
    $rules = array(
        'email'    => 'required|email', // make sure the email is an actual email
        'password' => 'required' // password can only be alphanumeric and has to be greater than 3 characters
    );
    
    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);
    
    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
        return Redirect::to('login')
            ->withErrors($validator) // send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    
    } else {
    
        // create our user data for the authentication
        $userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        );
    
        // attempt to do the login
        if (Auth::attempt($userdata)) {
    
            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            return Redirect::to('admin/dashboard');
    
    
        } else {        
    
            // validation not successful, send back to form 
            return Redirect::to('/login')->with('alert-danger', 'Incorrect Login');
    
        }
    }
    }
    
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('/login'); // redirect the user to the login screen
    }

    public function dashboard()
{
    if (Auth::check()){
        return View('admin/dashboard');    
    }
    else{
        return Redirect::to('login'); // redirect the user to the login screen
    }
    
}

public function addPost(){
    return View('admin/add');
}

public function addNewPost(){
    $title = Input::get('title');
    $body = Input::get('body');
    $image = Input::get('image');
    $blog = new Blog();

    $rules = array(
        'title'    => 'required',
        'body' => 'required',
        'image' => 'required',
    );
    $validator = Validator::make(Input::all(), $rules);
    
    if ($validator->fails()) { 
        return Redirect::back()->withInput()->with('alert-danger', 'The data wasn not saved successfully')->withErrors($validator);
    }
    else{
        $blog->post_title = $title;
        $blog->post_body = $body;
        $blog->image = $image;
        $blog->slug = str_replace(" ","-", $title);
        $blog->save();
    }
    return Redirect::back()->withInput()->with('alert-success', 'The data saved successfully');
}

public function editPost(){
    $posts = new Blog();
    $posts = $posts->paginate(10);
    return View('admin/edit', compact('posts'));
}

public function deletePost(){
    $posts = new Blog();
    $posts = $posts->paginate(10);
    return View('admin/delete', compact('posts'));
}

public function removePost($id){
    $blog = Blog::findOrFail($id);
    $blog->delete();
    return Redirect::back()->with('alert-success', 'The data deleted successfully');
}

public function modifyPost($id){
    $id = Blog::where('id', $id)->pluck('id');
    $post  = Blog::where('id', $id)->first();
    return View('admin/modify', compact('post'));
}

public function updatePost($id, Request $request){
    $title = Input::get('title');
    $body = Input::get('body');
    $image = Input::get('image');
    $rules = ([
        'title'    => 'required',
        'body' => 'required',
        'image' => 'required',
    ]);

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return Redirect::back()->withInput()->with('alert-danger', 'The data wasn not saved successfully')->withErrors($validator);
    }
    else{
            $blog = new Blog();
            $blog = $blog->find($id);
            $blog->post_title = $title;
            $blog->post_body = $body;
            $blog->image = $image;
            $blog->slug = str_replace(" ","-", $title);
            $blog->update();
            return Redirect::back()->withInput()->with('alert-success', 'The data saved successfully');           
        }
}

 public function action(Request $request)
    {
     $validation = Validator::make($request->all(), [
      'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);
     if($validation->passes())
     {
      $image = $request->file('select_file');
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images/uploads'), $new_name);
      return response()->json([
       'message'   => 'Image Upload Successfully',
       'uploaded_image' => '<img src="/images/uploads/'.$new_name.'" class="img-thumbnail" width="300" />',
       'class_name'  => 'alert-success',
       'file_name' => $new_name
      ]);
     }
     else
     {
      return response()->json([
       'message'   => $validation->errors()->all(),
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
     }
    }

    public function filterData($year, $month){
        $posts = Blog::whereMonth('created_at', '=', date('m', strtotime($month)))->orderBy('created_at', 'DESC')->paginate(2);
        $data =  Blog::orderBy('created_at')->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('M o');
        }); //useless
        $active = $month . $year;

        $blog = new Blog();
        $recent = $blog->limit(3)->orderBy('created_at', 'DESC')->get();

        return View('blog/all', compact('posts', 'data', 'recent', 'active'));
    }

    public function search(){
        $term = Input::get('term');
    
        $terms = explode(" ", $term);
    
        // $results = Music::where('title', 'LIKE', '%' . $term . '%')->paginate(3);
    
         $results = Blog::where(function ($query) use ($terms) {
             foreach ($terms as $term) {
                 $query->where('post_title', 'like', '%' . $term . '%');
             }
         })->paginate(5);
        return View('blog/search', compact('results', 'term'));
    }

    public function sendMail(Request $request){
        $service = Input::get('service');
        $state = Input::get('state');
        $zipcode = Input::get('zipcode');
        $yourname = Input::get('yourname');
        $youremail = Input::get('youremail');
        $telephone = Input::get('telephone');
        $rules = ([
            'service'    => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'yourname' => 'required',
            'youremail' => 'required',
            'telephone' => 'required',
        ]);
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return Response::json([
                'message'   => $validator->errors()->all(),
                ]);
            }
        else{

             Mail::send('contact-mail', array('service'=>Input::get('service'), 'state'=>Input::get('state'), 'zipcode'=>Input::get('zipcode'), 'yourname'=>Input::get('yourname'),'youremail'=>Input::get('youremail'), 'telephone'=>Input::get('telephone')), function($message){
                 $message->to('gdsa006@gmail.com', 'admin')->replyTo(Input::get('youremail'), Input::get('yourname'))->subject(Input::get('yourname').' contacted you from this.COM');
             });
                $help = new Help();
               $help->service = $service;
               $help->state = $state;
               $help->zipcode = $zipcode;
               $help->yourname = $yourname;
               $help->youremail = $youremail;
               $help->telephone = $telephone;
               $help->save();
                //return Redirect::back()->withInput()->with('alert-success', 'The data saved successfully');           
                return Response::json([
                    'message'   => 'success',
                    ]);
            
    }

}
}