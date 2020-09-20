@extends('layouts.frontend.app')

@section('title','Home')
{{--@section('title','')--}}


@push('css')

@endpush

@section('content')


    <!--........................table start.......................-->
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <table class="table table-bordered ">

                        <tbody>
                        <tr style="background-color: #1f4e78;">
                            <td colspan="4"  style="color: #ffffff;"><strong>1 Security Vision and Responsibility</strong></td>

                            <td width="10%" style="color: #ffffff;"><strong>50%</strong></td>
                        </tr>

                        <tr style="background-color: #1f4e78;">
                            <td width="10%" style="color: #ffffff;"><strong>No</strong></td>
                            <td width="35%" style="color: #ffffff;"><strong>Question</strong></td>
                            <td width="10%" style="color: #ffffff;"><strong>Y/N</strong></td>
                            <td width="35%" style="color: #ffffff;"><strong>Evidence / Details</strong></td>
                            <td width="10%" style="color: #ffffff;"><strong>Should /Must </strong></td>
                        </tr>
                        @foreach ($types as $type)
                        <tr>
                        <td  class="text-center">{{$type->question_no}}</td>
                        <td >{!! html_entity_decode($type->question) !!} </td>
                            <td >
                                <input type="radio"  name="status" value="yes">
                                <label for="male">Yes</label><br>
                                <input type="radio"  name="status" value="no">
                                <label for="female">No</label><br>
                            </td>

                            <td><textarea placeholder="Evidence / Details write here... " class="form-control" style="border: none;" name="" id="" cols="55" rows="5"></textarea>
                            </td>


                            <td >
                                <input type="radio"  name="status1" value="should">
                                <label for="should">Should</label><br>
                                <input type="radio"  name="status1" value="must">
                                <label for="should">Must</label><br>
                            </td>
                        </tr>                            
                        @endforeach

                        </tbody>
                    </table>
                    <input  style="width: 200px;" type="button" class="btn btn-outline-info  float-right "  value="Submit">
                </div>

            </div>
        </div>
    </section>
    <!--...........................table end..........................-->




@endsection

@push('script')

@endpush
