@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="mt-4"> {{ $post->title }} <span class="lead"> by <a href="#"> {{ $post->user->name }} </a></span> </h3>
                <p>Posted {{ $post->created_at->diffForHumans() }} </p>
                <hr>
                <p class="lea"> {{ $post->body }} </p>
                <hr>

                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea rows="3" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection