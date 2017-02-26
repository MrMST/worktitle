<?phpß

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * Add activity to user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addActivity(Request $request)
    {
        $activity = Activity::find($request->input('activity'));
        $user = \Auth::user();

        $user->activities()->attach($activity);
        
        return view('activity.index');
    }
}
