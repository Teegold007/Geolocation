@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="jumbotron">
             <div class="card">   
                <div class="card-header">Landmarks
                     <button href="#" class="btn-primary float-right"><i class="fa fa-home" data-toggle="modal" data-target="#add-landmark">Add Landmark</i> </button> 
                </div>

                 <div class="card-body">
                    
                </div>
               </div> 
            </div>
            
        </div>
    </div>
</div>
<!-- Add landmark Modal -->
<div id="add-landmark" tabindex="-1" role="dialog" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="pull-left" aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title float-right">Fill Payment Details</h5>
                </div>
                
                    <div class="modal-body">

                            <div class="form-group row">
                                
                                    <label for="Title">Title: </label>
                                    <input type="text" class="form-control" name="title" >                                              
                               
                                    <label for="Description">Description: </label>
                                    <TEXTAREA  name="description" class="form-control" ></TEXTAREA>
                                

                                    
                                    <div class="coordinates hidden"></div>

                                    <button id="get-coordinate">Get Location Coordinates</button> 


                                

                            

                        </div>
                        <button class="btn btn-success " type="submit">
                            Submit <i class="fa fa-credit-card"></i>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                
            </div>
        </div>
    </div>
@endsection
