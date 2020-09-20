@extends('layouts.frontend.app')
@section('title', 'Home')
@section('content')
    <!--........................table start.......................-->
    <section class="mt-4">
        <div class="container">
            <div class="row">
                @if (Session::get('message'))
                    <p>{{ Session::get('message') }}</p>
                @endif
                <form action="{{ route('insertAssessment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                    <input type="hidden" name="types_id" value="{{ $types_id }}">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered ">
                            <tbody>
                                <tr style="background-color: #1f4e78;">
                                    <td colspan="4" style="color: #ffffff;"><strong>1 Security Vision and
                                            Responsibility</strong></td>
                                    <td width="10%" style="color: #ffffff;">
                                            @php
                                                    if(!empty($status_1)){
                                                        $num_question =count($status_1);
                                                        $num_yes= 0;
                                                        foreach($status_1 as $item){
                                                            if($item=="yes"){
                                                                $num_yes++;
                                                            }
                                                        }
                                                        $c = ($num_yes/$num_question)*100;

                                   
                                                    }else{
                                                        $c=0;
                                                    }  
                                            @endphp 
                                       
                                                <strong> {{round($c,2)}}%</strong>
                                    </td>
                                </tr>
                                <tr style="background-color: #1f4e78;">
                                    <td width="10%" style="color: #ffffff;"><strong>No</strong></td>
                                    <td width="35%" style="color: #ffffff;"><strong>Question</strong></td>
                                    <td width="10%" style="color: #ffffff;"><strong>Y/N</strong></td>
                                    <td width="35%" style="color: #ffffff;"><strong>Evidence / Details</strong></td>
                                    <td width="10%" style="color: #ffffff;"><strong>Should /Must </strong></td>
                                </tr>
                                @foreach ($types as $key => $type)
                                    @if (!empty($type->question_no))
                                        <tr>
                                            <td class="text-center">{{ $type->question_no }}</td>
                                            <td>{!! html_entity_decode($type->question) !!} </td>
                                            <td>
                                            <input type="checkbox" id="statusy{{$key}}"  name="status_1[]" value="yes">
                                                <label for="male">Yes</label><br>
                                                <input type="checkbox" id="statusn{{$key}}"  name="status_1[]" value="no">
                                                <label for="female">No</label><br>
                                                
                                                
                                                @if($status_1)
                                                    @if ($status_1[$key]=="yes")
                                                    
                                                        <script>
                                                            document.getElementById("statusy"+{{$key}}).checked = true;
                                                        </script>
                                                        
                                                    @elseif($status_1[$key]=="no")
                                                        <script>
                                                             document.getElementById("statusn"+{{$key}}).checked = true;
                                                        </script>    
                                                    @endif
                                                @endif

                                            </td>
                                            <td>
                                                <textarea placeholder="Enter Evidence / Details " class="form-control"
                                                    style="border: none;" name="evidence[]" id="" cols="55"
                                                    rows="5">@if($assessments){{$assessments[$key]}}@endif</textarea>

                                            </td>
                                            <td>
                                                <input type="checkbox" id="statuss{{$key}}" name="status_2[]" value="should">
                                                <label for="should">Should</label><br>
                                                <input type="checkbox" id="statusm{{$key}}" name="status_2[]" value="must">
                                                <label for="should">Must</label><br>
                                                @if($status_2)
                                                    @if ($status_2[$key]=="should")
                                                    
                                                        <script>
                                                            document.getElementById("statuss"+{{$key}}).checked = true;
                                                        </script>
                                                        
                                                    @elseif($status_2[$key]=="must")
                                                        <script>
                                                            document.getElementById("statusm"+{{$key}}).checked = true;
                                                        </script>    
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td class="text-center">{{ $type->question_no }}</td>
                                            <td>{!! html_entity_decode($type->question) !!} </td>
                                            <td>
                                            </td>
                                            <td>
                                                <textarea placeholder="Enter Evidence / Details" class="form-control" style="border: none;" name="evidence[]" id="" cols="55" rows="5">@if($assessments){{$assessments[$key]}}@endif</textarea>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <input style="width: 200px;" type="submit" class="btn btn-outline-info  float-right "
                            value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--...........................table end..........................-->
@endsection
