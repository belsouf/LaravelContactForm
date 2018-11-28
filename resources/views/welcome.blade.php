@extends('layouts.default')

@section('title', 'Laravel Contact Form')


@section('content')
    
        <div class="content">
            <div class="title m-b-md">
                Laravel Contact Form
            </div>

            <div>
                <a href="{{ route('contact.show') }}" class="btn btn-success btn-lg mt-3">Afficher le formulaire de contact</a>
            </div>
        </div>
        
@endsection