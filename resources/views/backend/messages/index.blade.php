@extends('backend.layouts.master')

@section('page_title')
    {{$page_title}}
@endsection
@section('nav_title')
    {{$nav_title}}
@endsection

@section('content')


<h3 class="text-left font-weight-bold  py-4"> 
    {{ucfirst($page_title)}}
</h3>

@if(count($rows))
    <div class="card">
        <div id="table">
            <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Username</th>
                <th class="text-center">Email</th>
                <th class="text-center">Mobile</th>
                <th class="text-center">Message</th>
                <th class="text-center" style="width: 18%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td class="pt-3-half">{{$row->id}}</td>
                        <td class="pt-3-half">{{$row->username}}</td>
                        <td class="pt-3-half">{{$row->email}}</td>
                        <td class="pt-3-half">{{$row->mobile}}</td>
                        <td class="pt-3-half">{{$row->message}}</td>
                        <td class="pt-3-half">
                            @include('backend.messages.buttons.replay')
                            @include('backend.shared.buttons.delete')
                        </td>
                    
                    </tr>
                @endforeach
               
            </tbody>
            </table>
            <div class="d-flex justify-content-center"></div>
        </div>
        </div>
    </div>
@endif
@endsection