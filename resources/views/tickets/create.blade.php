@extends('layouts.app')


@section('content')
<div class="container col-md-6 col-md-offset-2">
    @include('layouts.alerts')
    
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="card">
        <form class="form-horizontal" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
                <div class="card-header"><legend>Submit a new ticket</legend></div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="5" id="content" name="content"></textarea>
                            <span class="help-block">Feel free to ask us any question.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection

