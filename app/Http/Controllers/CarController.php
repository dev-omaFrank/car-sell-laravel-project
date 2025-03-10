<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CarController extends Controller
{
    protected $imageUploadController;

    public function __construct(imageUploadController $imageUploadController)
    {
        $this->imageUploadController = $imageUploadController;
    }

    public function index()
    {
        $cars = Car::all();
        $images = CarImage::all();
        $state = State::find(1);
        $cities = City::find(1);
        $makers = Maker::all();
        $models = Model::all();
        $carTypes = CarType::all();
        $fuelTypes = FuelType::all();
        return view('home.index', compact('cars', 'images', 'state', 'cities', 'makers', 'models', 'carTypes', 'fuelTypes'));
    }

    public function create()
    {
        $cars = Car::with('images')->get();
        $makers = Maker::all();
        $models = Model::all();
        $carTypes = CarType::all();
        $fuelTypes = FuelType::all();
        $state = State::find(1);
        $cities = City::all();

        return view('car.create', compact('cars','makers', 'models', 'carTypes', 'fuelTypes', 'state', 'cities'));
    }

  

    public function createNewCar(Request $request)
    {
        // dd(dump(request()->all()));
        $validatedData = $request->validate([
            'car_type' => 'required|string',
            'price' => 'required|numeric',
            'vin_code' => 'required|string',
            'mileage' => 'required|numeric',
            'fuel_type' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'carImage'=> 'required|image|mimes:jpg,jpeg,png,gif|max:5242880',
        ]);
        
        DB::transaction(function () use ($validatedData, $request) {
            // Log the transaction to debug if needed
           
        
            $imageName = $this->imageUploadController->imageUpload($request);
            if ($imageName) {
                $car = $this->createCar($validatedData, $request, $imageName);
                $this->createCarFeatures($car->id, $request);
                $this->createCarState($car->id, $request->state);
                $this->createImage($car->id, $imageName);
            }
        });
        

        return redirect()->route('car.index')->with('success', 'Car data uploaded successfully');
    }

    private function createCar(array $validatedData, Request $request, $imageName): Car
    {
        $publishedAt = now(); 

        if ($request->has('publish') && $request->publish) {
            $publishedAt = now();
        }
        return Car::create([
            'users_id' => $request->user_id,
            'car_type_id' => $validatedData['car_type'],
            'price' => $validatedData['price'],
            'vin' => $validatedData['vin_code'],
            'mileage' => $validatedData['mileage'],
            'fuel_type_id' => $validatedData['fuel_type'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'city_id' => $validatedData['city'],
            'maker_id' => $request->maker,
            'model_id' => $request->model,
            'year' => $request->year,
            'published_at' => $publishedAt, 
            'car_image' => $imageName, 
        ]);
    }

    private function createCarFeatures(int $carId, Request $request): void
    {
        CarFeatures::create([
            'car_id' => $carId,
            'abs' => $request->abs  ?? 0,
            'air_conditioning' => $request->air_conditioning  ?? 0,
            'power_windows' => $request->power_windows  ?? 0,
            'power_door_locks' => $request->power_door_locks  ?? 0,
            'cruise_control' => $request->cruise_control  ?? 0,
            'bluetooth_connectivity' => $request->bluetooth_connectivity  ?? 0,
            'remote_start' => $request->remote_start  ?? 0,
            'gps_navigation_system' => $request->gps_navigation_system  ?? 0,
            'heated_seats' => $request->heated_seats  ?? 0,
            'climate_control' => $request->climate_control  ?? 0,
            'rear_parking_sensors' => $request->rear_parking_sensors ?? 0,
            'leather_seats' => $request->leather_seats  ?? 0,
        ]);
    }

    private function createCarState(int $carId, string $stateName): void
    {
        State::create([
            'car_id' => $carId,
            'name' => $stateName,
        ]);
    }

    private function createImage(int $carId, string $imageName): void
    {
        CarImage::create([
            'car_id' => $carId,
            'image_path' => $imageName,
            'position' => 1,
        ]);
    }
}
