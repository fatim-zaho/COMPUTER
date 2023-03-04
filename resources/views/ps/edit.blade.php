@extends('layout')
@section('content')
@section('title','edit ps')


<div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                   <h1>3dal pc </h1>
                </div>
                <div class="flex justify-center">
                   <form action=" {{route('ps.update',['p'=>$p->id])}} " method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="ps-name">ps name</label>
                        <input id="ps-name" name="ps-name" value="{{$p->name}}" type="text">
                        @error('ps-name')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div>
                    <label for="ps-origin">ps origin</label>
                        <input id="ps-origin" name="ps-origin" value="{{$p->origin}}" type="text">
                        @error('ps-origin')
                        <div class="form-error">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div>
                    <label for="ps-price">ps price</label>
                        <input  id="ps-price" name="ps-price" value="{{$p->price}}" type="text">
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