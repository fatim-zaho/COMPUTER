@extends('layout')
@section('content')
@section('title','create ps')


<div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                   <h1>chakcham pc ljdid </h1>
                </div>
                <div class="flex justify-center">
                   <form action=" {{route('ps.store')}} " method="post">
                    @csrf
                    <div>
                        <label for="ps-name">ps name</label>
                        <input id="ps-name" name="ps-name" value="{{old('ps-name')}}" type="text">
                        @error('ps-name')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div>
                    <label for="ps-origin">ps origin</label>
                        <input id="ps-origin" name="ps-origin" value="{{old('ps-origin')}}" type="text">
                        @error('ps-origin')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div>
                    <label for="ps-price">ps price</label>
                        <input  id="ps-price" name="ps-price" value="{{old('ps-price')}}" type="text">
                        @error('ps-price')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div>
                    <button type='submit'>ajouter</button>
                    </div>

                   </form>
                </div>
               
            </div>
@endsection