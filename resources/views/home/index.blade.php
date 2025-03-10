<x-app-layout>
    <x-header-layout />
    <!-- Home Slider -->
    <section class="hero-slider">
        <!-- Carousel wrapper -->
        <div class="hero-slides">
            <!-- Item 1 -->
            <div class="hero-slide">
                <div class="container">
                    <div class="slide-content">
                        <h1 class="hero-slider-title">
                            Buy <strong>The Best Cars</strong> <br />
                            in your region
                        </h1>
                        <div class="hero-slider-content">
                            <p>
                                Use powerful search tool to find your desired cars based on
                                multiple search criteria: Maker, Model, Year, Price Range, Car
                                Type, etc...
                            </p>

                            <button class="btn btn-hero-slider">Find the car</button>
                        </div>
                    </div>
                    <div class="slide-image">
                        <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hero-slide">
                <div class="flex container">
                    <div class="slide-content">
                        <h2 class="hero-slider-title">
                            Do you want to <br />
                            <strong>sell your car?</strong>
                        </h2>
                        <div class="hero-slider-content">
                            <p>
                                Submit your car in our user-friendly interface, describe it,
                                upload photos and the perfect buyer will find it...
                            </p>

                            <button class="btn btn-hero-slider">Add Your Car</button>
                        </div>
                    </div>
                    <div class="slide-image">
                        <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
            <button type="button" class="hero-slide-prev">
                <svg style="width: 18px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button" class="hero-slide-next">
                <svg style="width: 18px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>
    <!--/ Home Slider -->

    <main>
        <!-- Find a car form -->
        <section class="find-a-car">
            <div class="container">
                <form action="{{ route('car.search') }}" method="GET" class="find-a-car-form card flex p-medium">
                    <div class="find-a-car-inputs">
                        <div>
                            <select id="makerSelect" name="maker">
                                <option>Maker</option>
                                @foreach ($makers as $maker)
                                    <option value="{{ $maker->id }}">{{ $maker->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <select name="model" id="">
                                <option>Model</option>
                                @foreach ($models as $model)
                                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <select id="stateSelect" name="state">
                                <option>State</option>
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            </select>
                        </div>
                        <div>
                            <select name="city" id="">
                                <option>City</option>
                                    <option value="{{ $cities->state_id }}">{{ $cities->name }}</option>
                            </select>
                        </div>
                        <div>
                            <select name="car_type_id">
                                <option>Car Type</option>
                                @foreach ($carTypes as $carType)
                                    <option value="{{ $carType->id }}">{{ $carType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <input type="number" placeholder="Year From" name="year_from" />
                        </div>
                        <div>
                            <input type="number" placeholder="Year To" name="year_to" />
                        </div>
                        <div>
                            <input type="number" placeholder="Price From" name="price_from" />
                        </div>
                        <div>
                            <input type="number" placeholder="Price To" name="price_to" />
                        </div>
                        <div>
                            <select name="fuel_type_id">
                              <option>Fuel Type</option>
                              @foreach ($fuelTypes as $fuelType)
                                  <option value="{{ $fuelType->id }}">{{ $fuelType->name }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-find-a-car-reset">
                            Reset
                        </button>
                        <button class="btn btn-primary btn-find-a-car-submit">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!--/ Find a car form -->
        <!-- New Cars -->
        <section>
            <h2 style="padding-left: 80px">Latest Added Cars</h2>
            <div class="container">
                
                @foreach ($cars as $car)
                    @foreach ($car->images as $image)
                        <div class="car-items-listing" style="margin-right: 50px;flex: 1 0 21%; box-sizing: border-box;">
                            <div class="car-item card">
                                    <img src="{{ asset('uploads/' . $image->image_path) }}" alt=""
                                        class="car-item-img rounded-t" />
                                
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="m-0 text-muted">{{ $car->address }}</small>
                                        <button class="btn-heart">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" style="width: 20px">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>

                                    @php
                                        $carName = '';
                                        switch ($car->maker_id) {
                                            case 1:
                                                $carName .= 'Ford ';
                                                break;
                                            case 2:
                                                $carName .= 'BMW ';
                                                break;
                                            default:
                                                $carName .= 'Unknown Maker ';
                                        }

                                        switch ($car->model_id) {
                                            case 1:
                                                $carName .= 'Mustang';
                                                break;
                                            case 2:
                                                $carName .= 'X5';
                                                break;
                                            default:
                                                $carName .= 'Model Not Specified';
                                        }
                                    @endphp

                                    <h2 class="car-item-title">{{ $car->year }} {{ $carName }}</h2>
                                    <p class="car-item-price">${{ $car->price }}</p>
                                    <hr />
                                    <p class="m-0">
                                        @php
                                            $carType = '';
                                            switch ($car->maker_id) {
                                                case 1:
                                                    $carType = 'Convertible ';
                                                    break;
                                                case 2:
                                                    $carType = 'Sub-Urban ';
                                                    break;
                                                case 3:
                                                    $carType = 'Off-road ';
                                                    break;
                                                default:
                                                    $carType = 'Unknown Maker ';
                                            }
                                        @endphp
                                        <span class="car-item-badge">{{ $carType }}</span>

                                        @php
                                            $fuelType = '';
                                            switch ($car->maker_id) {
                                                case 1:
                                                    $fuelType = 'Electric ';
                                                    break;
                                                case 2:
                                                    $fuelType = 'Diesel ';
                                                    break;
                                                case 3:
                                                    $fuelType = 'Gasoline';
                                                    break;
                                                default:
                                                    $fuelType = 'Unknown Maker ';
                                            }
                                        @endphp
                                        <span class="car-item-badge">{{ $fuelType }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </section>
        <!--/ New Cars -->
    </main>
</x-app-layout>
