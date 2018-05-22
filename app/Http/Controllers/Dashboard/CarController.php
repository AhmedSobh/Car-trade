<?php
namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Car;
use Session;
use Storage;
use App\Make;
use App\Ticket;
use Auth;

class CarController extends Controller
{

  public function __construct()
  {
    return $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(20);
        return view('cars.index')
          ->withCars($cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'name'  =>'required|string',
          'model' =>  'required|string',
          'type'  =>  'required|string',
          'year'  =>  'required',
          'price' =>  'required',
          'file'        =>  'file|image'
        ]);

        $car  = new Car();
        $car->name  = $request->name;
        $car->model = $request->model;
        $car->type  = $request->type;
        $car->year  = $request->year;
        $car->price = $request->price;
        if ($request->hasFile('file')) {
           $file = Storage::disk('cars')->putFile( 'cars', $request->file('file'));
           $car->image   =   $file;
        }
        $car->save();
        Session::flash('success','Car Added Successfully');

        return redirect()->route('cars.show',$car->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car  = Car::find($id);
        return view('cars.show')
          ->withCar($car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $car  = Car::find($id);
      return view('cars.edit')
        ->withCar($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'name'  =>'required|string',
        'model' =>  'required|string',
        'type'  =>  'required|string',
        'year'  =>  'required',
        'price' =>  'required',
        'file'  =>  'file|image'
      ]);

      $car  = Car::find($id);
      $car->name  = $request->name;
      $car->model = $request->model;
      $car->type  = $request->type;
      $car->year  = $request->year;
      $car->price = $request->price;
      if ($request->hasFile('file')) {
         $file = Storage::disk('cars')->putFile( 'cars', $request->file('file'));
         $car->image   =   $file;
      }
      $car->save();
      Session::flash('success','Car Updated Successfully');

      return redirect()->route('cars.show',$car->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car  = Car::find($id);
        $car->delete();
        Session::flash('success','Car Deleted Successfully!');
        return redirect()->route('cars.index');
    }

    public function request()
    {
      return view('cars.request');
    }

    public function make(Request $request)
    {
        $make=new Make();
        $make->type=$request->type;
        $make->user_id=Auth::user()->id;
        $make->save();
        return redirect()->route('dashboard');
    }

    public function list()
    {
      $makes = Make::paginate(10);
      return view('cars.list')
        ->withMakes($makes);
    }

    public function change( $make, $state)
    {
      $make = Make::find($make);
      $make->approve  = $state;
      $make->save();
      return redirect()->route('cars.request.list');
    }

    public function ticket()
    {
      return view('cars.ticket');
    }

    public function makeTicket(Request $request)
    {
      $ticket = new Ticket();
      $ticket->message=$request->message;
      $ticket->user_id= Auth::user()->id;
      $ticket->save();
      return redirect()->route('dashboard');
    }

    public function listTickets()
    {
      $tickets  = Ticket::paginate(10);
      return view('cars.listTickets')
        ->withTickets($tickets);
    }
}
