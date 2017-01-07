@extends('layouts.master')

@section('title')
updateprofile
@endsection

                                                {{-- UPDATE PAGE START HERE --}}

@section('updateprofile')

<div id="row_updateprofile">
	<div class="row">
		<div class="container">
			<div class="updateprofile">
				<div class="col-sm-2">
					
				</div>
				<div class="update col-sm-8">
				<h3>Update Profile</h3>
				<hr>
					<form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Username:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Enter username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Proficiency:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="proficiency" placeholder="Enter proficiency">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="qualification">Qualification:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="qualification" placeholder="Enter qualification">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="location">Location:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="location" placeholder="Enter location">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-2" for="location">City:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="city" placeholder="Enter city">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="image">Image:</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="image">
                            </div>
                        </div>

                     

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="dob">DOB:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="dob">
                            </div>
                        </div>

  
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                    </form>
				</div>
				<div class="col-sm-2">
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection