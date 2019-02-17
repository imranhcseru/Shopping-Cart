@extends('admin.layout')
@section('addAdminContent')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                
                @if(Session::has('emailError'))
                    <p style = "color:red;">*{{Session::get('emailError')}}</p>
                    {{Session::put('emailError',null)}}
                
                @elseif(Session::has('passwordError'))
                    <p  style = "color:red;">*{{Session::get('passwordError')}}</p>
                    {{Session::put('passwordError',null)}}
                @endif
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{url('/admin/addadmin')}}" method="post" enctype = "multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">First Name</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead"  name = "fname">
                            </div>
                        </div> 
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Last Name</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead"  name = "lname">
                            </div>
                        </div>             
                        <div class="control-group">
                        <label class="control-label" for="typeahead">Email</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name = "email">
                        </div>
                        </div>
                        <div class="control-group">
                        <label class="control-label" for="typeahead">Password</label>
                        <div class="controls">
                            <input type="password" class="span6 typeahead" id="typeahead"  name = "password">
                        </div>
                        </div>
                        <div class="control-group">
                        <label class="control-label" for="typeahead">Confirm Password</label>
                        <div class="controls">
                            <input type="password" class="span6 typeahead" id="typeahead"  name = "con_password">
                        </div>
                        </div>
                        <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name = "submit" value= "publish">Add Admin</button>
                        </div>
                    </fieldset>
                </form>  
            </div>
        </div>
    </div>
@endsection