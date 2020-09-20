@extends('layouts.frontend.app')
@section('title','Home')
@section('content')
  <!--........................table start.......................-->
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <table class="table table-bordered ">



                        <tbody>
                        <tr style="background-color: #1f4e78;" >
                            <td  style="color: #ffffff;"><strong>Section</strong></td>
                            <td  style="color: #ffffff;"><strong>Description</strong></td>
                            <td  style="color: #ffffff;"><strong>Score</strong></td>
                        </tr>
                        @php
                            $total_result = 0;
                            $num_yes=0;
                            $num_question=0;
                            $c1=0;
                            $c2=0;
                            $c3=0;
                            $c4=0;
                            $c5=0;
                            $c6=0;
                            $c7=0;
                            $c8=0;
                            $c9=0;
                            $c10=0;
                            $c11=0;
                            $c12=0;
                        @endphp

                        @foreach ($results as $key=>$result)
                        <tr>
                        <td  class="text-center">{{++$key}}</td>
                            <td>
                                @if($result->types_id==1)
                                Security Vision
                                @elseif($result->types_id==2)
                                Risk Assessment
                                @elseif($result->types_id==3)
                                Business Partner Security
                                @elseif($result->types_id==4)
                                Cybersecurity
                                @elseif($result->types_id==5)
                                CIIT Security
                                @elseif($result->types_id==6)
                                Seal Security
                                @elseif($result->types_id==7)
                                Procedural Security
                                @elseif($result->types_id==8)
                                Agricultural Security
                                @elseif($result->types_id==9)
                                Physical Access Controls
                                @elseif($result->types_id==10)
                                Physical Security
                                @elseif($result->types_id==11)
                                Personnel Security
                                @elseif($result->types_id==12)
                                Education, Training and Awareness
                                @endif    
                            </td>
                            <td>
                                @php
                                    $status = json_decode($result->status_1, true);
                                if(!empty($status)){
                                   $num_question =count($status);
                                   $num_yes= 0;
                                   foreach($status as $item){
                                       if($item=="yes"){
                                           $num_yes++;
                                       }
                                   }
                                   
                                }
                                @endphp


                                 @if($result->types_id==1)
                                 @php
                                 if ($num_question!=0) {
                                    $c1 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c1; 
                                 @endphp
                                 
                                 {{round($c1,2)}} %
                                 @elseif($result->types_id==2)
                                 @php
                                 if ($num_question!=0) {
                                    $c2 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c2; 
                                 @endphp
                                 {{round($c2,2)}} %
                                 @elseif($result->types_id==3)
                                 @php
                                 if ($num_question!=0) {
                                    $c3 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c3; 
                                 @endphp
                                 {{round($c3,2)}} %
                                 @elseif($result->types_id==4)
                                 @php
                                 if ($num_question!=0) {
                                    $c4 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c4; 
                                 @endphp
                                 {{round($c4,2)}} %
                                 @elseif($result->types_id==5)
                                 @php
                                 if ($num_question!=0) {
                                    $c5 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c5; 
                                 @endphp
                                 {{round($c5,2)}} %
                                 @elseif($result->types_id==6)
                                 @php
                                 if ($num_question!=0) {
                                    $c6 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c6; 
                                 @endphp
                                 {{round($c6,2)}} %
                                 @elseif($result->types_id==7)
                                 @php
                                 if ($num_question!=0) {
                                    $c7 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c7; 
                                 @endphp
                                 {{round($c7,2)}} %
                                 @elseif($result->types_id==8)
                                 @php
                                 if ($num_question!=0) {
                                    $c8 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c8; 
                                 @endphp
                                 {{round($c8,2)}} %
                                 @elseif($result->types_id==9)
                                 @php
                                 if ($num_question!=0) {
                                    $c9 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c9; 
                                 @endphp
                                 {{round($c9,2)}} %
                                 @elseif($result->types_id==10)
                                 @php
                                 if ($num_question!=0) {
                                    $c10 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c10; 
                                 @endphp
                                 {{round($c10,2)}} %
                                 @elseif($result->types_id==11)
                                 @php
                                 if ($num_question!=0) {
                                    $c11 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c11; 
                                 @endphp
                                 {{round($c11,2)}} %
                                 @elseif($result->types_id==12)
                                 @php
                                 if ($num_question!=0) {
                                    $c12 = ($num_yes/$num_question)*100;
                                 }
                                 $total_result = $total_result+$c12; 
                                 @endphp
                                 {{round($c12,2)}} %
                                 @endif 
                            </td>

                        </tr>
        
                        @endforeach
                 

                        <tr style="background-color: #999b9b;">

                            <td colspan="2" style="color: #ffffff; font-weight: bold">RATING</td>
                            <td  style="color: #ffffff; font-weight: bold">
                            
                                @php
                               
                                    $num_types =count($results);
                                     $num_questionverage_result = $total_result/$num_types;
                                  
                                @endphp
                                {{round($num_questionverage_result,2)}} %
                            </td>

                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{asset('/')}}public/assets/frontend/image/chart.png" alt="" style="    height: 440px;
    width: 541px;">
                </div>
            </div>
        </div>
    </section>
    <!--...........................table end..........................-->




@endsection

@push('script')

@endpush
