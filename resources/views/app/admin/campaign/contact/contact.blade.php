@extends('app.admin.layouts.default')

{{-- Web site Title --}}
@section('title') {{{ $title }}} :: @parent @stop

@section('page_class', 'sidebar-main-hidden ') 

@section('styles')
@parent
@endsection
@section('sidebar')
@parent
@include('app.admin.campaign.sidebar')
@endsection





{{-- Content --}}
@section('main')
 
<!-- Basic datatable -->
<div class="col-sm-8">
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Contact Gruop</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        
    
    
        
    
    <table class="table datatable-basic table-striped table-hover" id="contact-groups-table" data-search="false">
            <thead>
                <tr>
                    <th>
                        {{trans('ticket_departments.name')}}
                    </th>           
                    <th>
                        {{trans('ticket_departments.description')}}
                    </th>                                    
                    <th>
                        {{trans('ticket_departments.actions')}}
                    </th>
                    
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

       

        </div>

    </div>
</div>
<div class="col-sm-4">
    <div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Create Contact Gruop</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        {!! Form::open(array('action' => 'Admin\Marketing\Contacts\ContactsController@creategruop' , 'method' => 'post','class'=>'form-vertical departmentsform ','data-parsley-validate'=>'true','role'=>'form') )!!}


                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                   <div class="required form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          {!! Form::label('name', trans("contact.gruop_name"), array('class' => 'control-label')) !!} 
                          {!! Form::text('name', Input::old('name'), ['class' => 'form-control','required' => 'required','data-parsley-required-message' => trans("contact.gruop_name")]) !!}                                           
                    </div>                    

                    <div class="required form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          {!! Form::label('description', trans("contact.gruop_description"), array('class' => 'control-label')) !!} 
                          {!! Form::text('description', Input::old('description'), ['class' => 'form-control','required' => 'required','data-parsley-required-message' => trans("contact.gruop_description")]) !!}                                           
                    </div>           

                                     
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary submit-department"><b><i class=" icon-folder-plus2"></i></b> {{trans('contact.add_gruop')}}</button>
                    </div>
                </form>
    </div>
</div>
</div>

@endsection		 

{{-- Scripts --}}
@section('scripts')
@parent
<script type="text/javascript">
</script>
@stop
