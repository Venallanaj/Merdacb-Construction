<?php  
     
namespace App\Http\Controllers;  
    
use Illuminate\Http\Request;  
use App\Mail\MyDemoMail;  
use Mail;  
     
 class HomeController extends Controller  
{  
    
    /**  
     * It will display the application dashboard.  
     *  
     * @return \Illuminate\Contracts\Support\Renderable  
     */  
    public function myDemoMail()  
    {  
        $myEmail = 'info@merdacab.com';  
     
        $details = [  
            'title' => 'Demo of Mail from Javatpoint.com',  
            'url' => 'https://www.javatpoint.com'  
        ];  
    
        Mail::to($myEmail)->send(new MyDemoMail($details));  
     
        dd("Mail Send Successfully");  
    }  
}  