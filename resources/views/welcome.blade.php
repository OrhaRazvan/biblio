@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bine ati venit!</div>

                <div class="panel-body">
                  
                    <style>
                        #poza {
                            width: 900px;
                        }    
                    </style>
                    <img id="poza" src="{{ asset('img/books.jpg') }}"  />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
