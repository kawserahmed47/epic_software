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
            <form action="{{route('insertReport')}}" method="post">
                @csrf
            <input type="hidden" name="company_id" value="{{$company->id}}">
                <div class="col-sm-12 col-md-12">
                    <table class="table table-bordered ">
                        <tbody>
                        <tr style="background-color: #1f4e78;" >
                            <td colspan="2" style="color: #ffffff;"><strong>Location Information</strong></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9">Company Name</td>
                        <td><input type="text" class="form-control" name="name" value="{{$company->name}}" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9" >Address</td>
                            <td><textarea class="form-control" name="adderss" id="" cols="30" rows="3">{{$company->adderss}}</textarea></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9">Town/City</td>
                            <td><input type="text" class="form-control" name="city" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9">State/Province</td>
                            <td><input type="text" class="form-control" name="state" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9">Postal Code</td>
                            <td><input type="text" class="form-control" name="postal_code" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9">Country</td>
                            <td><input type="text" class="form-control" name="country" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9">Geolocation - Latitude</td>
                            <td><input type="text"  class="form-control " name="geolocation" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9">Phone </td>
                            <td><input type="text"  class="form-control " name="phone" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9">Other Phone </td>
                            <td><input type="text"  class="form-control " name="other_phone" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9">SCAN ID </td>
                            <td><input type="text"  class="form-control " name="csan_id" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9"> Point of Contact Name</td>
                            <td><input type="text"  class="form-control " name="point_of_contact_name" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9">Location Added By </td>
                            <td><input type="text"  class="form-control " name="location_added_by" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9"> Website</td>
                            <td><input type="text"  class="form-control " name="website" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9"> Point of Contact Email</td>
                            <td><input type="text"  class="form-control " name="point_of_contact_email" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9">Audit Date </td>
                            <td><input type="text"  class="form-control " name="audit_date" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9">Audit Stage </td>
                            <td><input type="text"  class="form-control " name="audit_stage" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9"> Assigned Auditor Name </td>
                            <td><input type="text"  class="form-control " name="assigned_auditor_name" ></td>
                        </tr>
                        <tr height="35px;">
                            <td colspan="2" class="mt-5"></td>
                        </tr>

                        <tr style="background-color: #1f4e78;" >
                            <td colspan="2" style="color: #ffffff;"><strong>Business Variables</strong></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9;" width="35%"> Does the facility participate in any government, local customs, or World Customs Organization (WCO) accredited facility security program?</td>
                            <td width="65%"><input type="text"  class="form-control " name="wco" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;" style="background-color: #d9d9d9"> Do you hold a Certification? </td>
                            <td><input type="text"  class="form-control " name="hole_certification" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Has the facility been reviewed or audited by this program? </td>
                            <td><input type="text"  class="form-control " name="has_the_facility" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Primary Industry of Operations </td>
                            <td><input type="text"  class="form-control " name="primary_industry" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Product Type / Commodity </td>
                            <td><input type="text"  class="form-control " name="product_type" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;"> Year Established</td>
                            <td><input type="text"  class="form-control " name="year_established" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Grounds Size (Square Meters) </td>
                            <td><input type="text"  class="form-control " name="grounds_size" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Number of Buildings </td>
                            <td><input type="text"  class="form-control " name="number_of_buildings" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Facility Size (Square Meters) </td>
                            <td><input type="text"  class="form-control " name="facility_size" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Number of access points? (i.e. gates, exterior doors) </td>
                            <td><input type="text"  class="form-control " name="number_of_access" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;"> Hours of Operation</td>
                            <td><input type="text"  class="form-control " name="hours_of_operation" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Number of Employees </td>
                            <td><input type="text"  class="form-control " name="number_of_employees" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Number of Contract Employees </td>
                            <td><input type="text"  class="form-control " name="number_of_contract_employees" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Number of Security Guards </td>
                            <td><input type="text"  class="form-control " name="number_of_security_guards" ></td>
                        </tr>
                        <tr>
                            <td style="background-color:#d9d9d9;">Number of Migrant Workers </td>
                            <td><input type="text"  class="form-control " name="number_of_migrant_workers" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9;">Annual Revenue </td>
                            <td><input type="text"  class="form-control " name="annual_revenue" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9;">Currency </td>
                            <td><input type="text"  class="form-control " name="currency" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9;">Number of shipments to USA </td>
                            <td ><input type="text"  class="form-control " name="number_of_shipments_to_usa" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9;">Port of embarkation </td>
                            <td><input type="text"  class="form-control " name="port_of_embarkation" ></td>
                        </tr>

                        <tr>
                            <td style="background-color:#d9d9d9;"> Port(s) of arrival</td>
                            <td><input type="text"  class="form-control " name="port_of_arrival" ></td>
                        </tr>
                        </tbody>
                    </table>
                    <input  style="width: 200px;" type="submit" class="btn btn-outline-info  float-right "  value="Submit">
                </div>
            </form>
            </div>
        </div>
    </section>
    <!--...........................table end..........................-->




@endsection

@push('script')

@endpush
