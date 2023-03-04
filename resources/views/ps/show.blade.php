@extends('layout')
@section('content')
@section('title','show ps')


<div class="max-w-7xl mx-auto p-6 lg:p-8">
<div class="flex justify-center">
                   <h1>pc</h1>
                </div>
                

<div class="mt-16">
<h3>{{ $p['name']}}({{ $p['origin']}})-<strong>{{ $p['price']}} $</strong></h3>
                </div>
 <a class="edit-btn" href="{{route('ps.edit',$p->id)}}">edit</a>
 <form action="{{route('ps.destroy',$p->id)}}" method='post'>
    @csrf
    @method('DELETE')
 <input type="submit" value="delete" >
 </form>


            </div>
@endsection