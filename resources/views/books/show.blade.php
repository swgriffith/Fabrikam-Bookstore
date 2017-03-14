@extends('layout/template')
@section('content')
    <h1>Book Show</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Cover</label>
            <div class="col-sm-10">
                <img src="{{asset('img/'.$book->image.'.jpg')}}" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">ISBN</label>
            <div class="col-sm-10">
                <input type="text" size=0 class="form-control" id="isbn" value="{{$book->isbn}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" value="{{$book->title}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="author" value="{{$book->author}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Publisher</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" value="{{$book->publisher}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" value="{{$book->price}}" readonly>
            </div>
        </div>

        <div class="form-group">
       

            
        </div>
    </form>
     <div class="row">
            <div class="col-sm-offset-2 col-sm-1">
                <a href="{{ url('books')}}" class="btn btn-primary">Back</a>
            </div>
             <div class="col-sm-1">
                <form action="/cart" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $book->id }}">
                <input type="hidden" name="name" value="{{ $book->title }}">
                <input type="hidden" name="price" value="{{ $book->price }}">
                <input type="submit" class="btn btn-success" value="Add to Cart">
            </form>
            </div>
            </div>
@stop