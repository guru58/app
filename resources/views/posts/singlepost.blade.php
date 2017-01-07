@extends('layouts.master')
@section('title')
singlepost
@endsection

                {{-- SINGLE POST PAGE --}}
@section('singlepost')
<div class="rowQuestion">
  <div class="row">
    <div class="container">
   

                                       <!-- CONATINER FOR SINGLE POST -->
   
      <div class="question_box col-sm-9 col-md-9">
        <h2>Recent Questions</h2>
        <hr>
        <div class="panel panel-default">
          <div class="panel-heading">

          <img src="{{URL::asset('images/main-qimg-d5342af4207d0ac3a7d43a4a930ea571.png')}}" alt="user image" style="width:80px;height:80px;border-radius:0;">
            &nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit? 
            <span class="timediff">Laravel 5.3</span>
          </div>
          <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis quia optio minus quasi quae assumenda consectetur minima quos quaerat aspernatur! Vel quasi repellendus debitis. Placeat quas tenetur illo ratione veniamnihil imperdiet doming id quod mazim placerat facer possim
            assum. Typi non habent claritatem insitam; est usus legentis
            in iis qui facit eorum claritatem. Investigationes
            demonstraverunt lectores legere me lius quod ii legunt saepius.
            Claritas est etiam processus dynamicus, qui sequitur mutationem
            consuetudium lectorum. Mirum est notare quam littera gothica,
            quam nunc putamus parum claram, anteposuerit litterarum formas
            humanitatis per seacula quarta decima et quinta decima. Eodem
            modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
            
            <hr>
            <div class="col-sm-3" >
             <p class="votes">posted -> 20 mintue ago</p>              
            </div>
            <div class="col-sm-3">
              <p class="answers" >answers->2</p>
            </div>
            <div class="col-sm-4">
              <p class="views" >view -> 12</p>
            </div>
            <div class="col-sm-2"><span class="username badge"  >posted by guru</span>
            </div>
          </div>
        </div>
                                                  {{-- No answer  Notification --}}

        <div class="alert alert-dismissible alert-info">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>No Answer Yet!</strong> 
        </div>
        <hr>

                                                   {{-- ANSWER BOX --}}



        <div class="answer_box">
            <h2>Answer</h2>
            <hr/>
        	<form>
                <div class="form-group">
                    <label for="answer">Enter your answer:</label>
                    <textarea name="textarea" class="form-control ">
                    	
                    </textarea>

                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form> 
        </div>
                                                    {{-- ANSWER BOX STOP HERE --}}


      </div>
                                                     <!-- CONTAINER FOR CATEGORY -->
      <div class="col-sm-3 col-md-3">
        <h3>Question Categories</h3>
        <hr>
        <div class="links list-group">
          <h4>Web Designing</h4>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> HTML</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> CSS</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> BOOTSTARP</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> JAVASCRIPT</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> JQUERY</a>
          <h4>Web Development</h4>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> PHP</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> MYSQL</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> .NET</a>
             
          <h4>Web Frameworks</h4>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> LARAVEL</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> CODIGNITOR</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> CAKEPHP</a>
          <h4>Others</h4>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> Blogs</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> Fan Club </a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> Downloads</a>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection
