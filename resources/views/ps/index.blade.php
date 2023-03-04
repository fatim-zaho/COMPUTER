@extends('layout')
@section('content')
@section('title','ps')


<div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                   <h1>pc</h1>
                </div>

                <div class="mt-16">
                  <ul>
                  @if (count($ps)>0)
                  @foreach ($ps as $p)
                  <a href="{{route('ps.show', ['p'=>$p['id']])}}">
                 <li>{{ $p['name']}} is from {{ $p['origin']}}<strong>{{ $p['price']}} $ </strong></li> 
                 </a>
                  @endforeach
                  @else
                 <p>ma3andak walo f data almskhoot</p>
                  @endif
                  </ul>
                </div>
            </div>
@endsection