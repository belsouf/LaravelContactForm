@extends('layouts.default')

@section('title', 'Contacter Nous')

@section('stylesheets')
    <link href="{{ asset('css/parsley.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <div class="card mb-3">
                <form action="{{ route('contact.send') }}" method="post" data-parsley-validate>
                    @csrf
                    <div class="card-header"><h1>Contacter nous</h1></div>
                    
                    <div class="card-body">

                        @include('partials._messages')

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Sujet *</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description (200 caractères maximum)</label>
                            <textarea data-parsley-maxlength="200" name="description" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent" style="text-align:right;">
                        <button type="submit" class="btn btn-success">Envoyer</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="{{ asset('js/parsley.fr.js') }}"></script>
@endsection
