@extends('layouts.backoffice')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Showroom</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('showroom.store') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="title" placeholder="Title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <textarea id="description" placeholder="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus></textarea>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="price" placeholder="0 000.00" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="miles" placeholder="0 000.00" type="number" class="form-control{{ $errors->has('miles') ? ' is-invalid' : '' }}" name="miles" value="{{ old('miles') }}" required autofocus>

                                    @if ($errors->has('miles'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('miles') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="kilometres" placeholder="0 000.00" type="number" class="form-control{{ $errors->has('kilometres') ? ' is-invalid' : '' }}" name="kilometres" value="{{ old('kilometres') }}" required autofocus>

                                    @if ($errors->has('kilometres'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('kilometres') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="model" placeholder="Car model" type="text" class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" value="{{ old('model') }}" required autofocus>

                                    @if ($errors->has('model'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('model') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="chassis" placeholder="Chassis Prefix" type="text" class="form-control{{ $errors->has('chassis') ? ' is-invalid' : '' }}" name="chassis" value="{{ old('chassis') }}" required autofocus>

                                    @if ($errors->has('chassis'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('chassis') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="manufacture" placeholder="Date of manufacture" type="number" class="form-control{{ $errors->has('manufacture') ? ' is-invalid' : '' }}" name="manufacture" value="{{ old('manufacture') }}" required autofocus>

                                    @if ($errors->has('manufacture'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('manufacture') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="color" placeholder="Color" type="text" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{ old('color') }}" required autofocus>

                                    @if ($errors->has('color'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('color') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <select id="fueltype" class="form-control" name="fueltype" required autofocus>
                                        <option value="petrol">Petrol</option>
                                        <option value="diesel">Diesel</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <select id="transmission" class="form-control" name="transmission" required autofocus>
                                        <option value="automatic">Automatic</option>
                                        <option value="manual">Manual</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="exteriorfeature" class="form-control" name="exteriorfeature" value="alloy" autofocus>Alloy Wheels
                                    <input type="checkbox" id="exteriorfeature" class="form-control" name="exteriorfeature" value="spoiler" autofocus>Rear Spoiler
                                    <input type="checkbox" id="exteriorfeature" class="form-control" name="exteriorfeature" value="diffuser" autofocus>Rear Diffuser
                                    <input type="checkbox" id="exteriorfeature" class="form-control" name="exteriorfeature" value="hardtop" autofocus>Hard Top
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="interiorfeature" class="form-control" name="interiorfeature" value="climate" autofocus>Climate Control
                                    <input type="checkbox" id="interiorfeature" class="form-control" name="interiorfeature" value="lock" autofocus>Power Locks
                                    <input type="checkbox" id="interiorfeature" class="form-control" name="interiorfeature" value="steering" autofocus>Power-Assisted Steering
                                    <input type="checkbox" id="interiorfeature" class="form-control" name="interiorfeature" value="windows" autofocus>Power Windows
                                    <input type="checkbox" id="interiorfeature" class="form-control" name="interiorfeature" value="ac" autofocus>Air Conditioning
                                    <input type="checkbox" id="interiorfeature" class="form-control" name="interiorfeature" value="leather" autofocus>Leather Interior
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="safetyfeature" class="form-control" name="safetyfeature" value="abs" autofocus>Anti-Lock Brakes ( ABS )
                                    <input type="checkbox" id="safetyfeature" class="form-control" name="safetyfeature" value="passengerairbag" autofocus>Passenger Airbag
                                    <input type="checkbox" id="safetyfeature" class="form-control" name="safetyfeature" value="driverairbag" autofocus>Driver Airbag
                                    <input type="checkbox" id="safetyfeature" class="form-control" name="safetyfeature" value="xenon" autofocus>Xenon Headlights
                                    <input type="checkbox" id="safetyfeature" class="form-control" name="safetyfeature" value="traction" autofocus>Traction Control
                                    <input type="checkbox" id="safetyfeature" class="form-control" name="safetyfeature" value="4wd" autofocus>4 Wheel Drive
                                    <input type="checkbox" id="safetyfeature" class="form-control" name="safetyfeature" value="sensor" autofocus>Rear Sensor
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="checkbox" id="audiofeature" class="form-control" name="audiofeature" value="cd" autofocus>CD Player
                                    <input type="checkbox" id="audiofeature" class="form-control" name="audiofeature" value="sound" autofocus>Premium Sound System
                                    <input type="checkbox" id="audiofeature" class="form-control" name="audiofeature" value="bluetooth" autofocus>Bluetooth
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Toevoegen') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection