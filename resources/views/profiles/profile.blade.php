@extends('layouts.master')
@section('title')
profile
@endsection

                                        {{-- PROFILE PAGE START HERE --}}

@section('profile')

<div id="row_profile">
	<div class="row">
		<div class="container">
		<div class="profile_box">
		    <div class="col-sm-2"></div>
			<div class="profile col-sm-3 col-md-3">
				<img src="{{URL::asset('images/main-qimg-d5342af4207d0ac3a7d43a4a930ea571.png')}}" alt="user image" style="width:100%;height:200px;">
				<hr>
				<div class="table-responsive">          
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Votes</th>
                                <th>Asks</th>
                                <th>Answers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               <td>1000</td>
                               <td>98</td>
                               <td>12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
			</div>
			<div class="info col-sm-4">
			<h3>Profile Info -</h3>
			<hr>
				<div class="table-responsive">          
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Deep Guru</th>
                            </tr>
                            <tr>
                                <th>Proficiency</th>
                                <th>Web Developer</th>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <th>India</th>
                            </tr>
                            <tr>
                                <th>City</th>
                                <th>Punjab</th>
                            </tr>

                            <tr>
                                <th>Gender</th>
                                <th>Male</th>
                            </tr>
                            <tr>
                                <th>DOB</th>
                                <th>07-July-1995</th>
                            </tr>

                            <tr>
                                <th>Website</th>
                                <th>HDT Community App</th>
                            </tr>

                            
                        </thead>
                    </table>
                </div>

			</div>
			<div class="col-sm-3 col-md-3">
				
			</div>
		</div>	
		</div>
	</div>
</div>


@endsection