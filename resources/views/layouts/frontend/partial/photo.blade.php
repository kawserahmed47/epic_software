@extends('layouts.frontend.app')
@section('title','Home')
@push('css')
@endpush
@section('content')

<div class="section mt-5">
    <div class="container">
    <div class="row">
        <div class="col">
            @if (Session::get('message'))
                <p class="text-success float-left">{{Session::get('message')}}</p>
            @endif
                        <input  style="width: 200px;" type="button" class="btn btn-outline-info  float-right " data-toggle="modal" data-target="#exampleModal"  value="Add Photo">
        </div>
    </div>
    </div>
</div>

    <!--........................table start.......................-->
    <section class="mt-4">

        <div class="container">
            <!--        <h3 class="uk-text-center">Corrective Actions</h3>-->
            <div class="row">
                @if ($photos)
                    @foreach ($photos as $photo)
                    <div class="col-sm-12 col-md-4 mb-2">
                        <div class="card" >
                            <div class="card-body">
                            <img class="card-img-top" src="{{asset('/')}}{{$photo->image}}" alt="Card {{asset('/')}}public/assets/frontend/image cap" style="height: 191px;width: 600px;">
                                <hr>
                            <h5 class="card-title"><span><a class="badge badge-danger"      href="{{route('deletePhoto',$photo->id)}}">X</a></span> {{$photo->caption}}</h5>
                            </div>
                        </div>
    
                    </div>
    
                    @endforeach

                @else
                <p>There are no photos</p>    
                @endif
                
            </div>
        </div>
    </section>
    <!--...........................table end..........................-->





<!-- Button trigger modal -->
{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
{{--    Launch demo modal--}}
{{--</button>--}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="{{route('insertPhoto')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    {{-- <div class="form-group">
                        <label for="usr">Selected Image: </label>
                        <img sizes="height:100px; width:100px" src="" alt="Preview">
                    </div> --}}
                    <div class="form-group">
                        <label for="usr">Select Image </label>
                        <input type="file" required name="image" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Caption</label>
                        <input type="text" required name="caption" class="form-control" id="pwd">
                        <input type="hidden"  name="company_id" value="{{$company->id}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
            </form>
        </div>
    </div>
</div>







@endsection

@push('script')
<script>

</script>
@endpush
