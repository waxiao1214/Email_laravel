@extends('app.user.layouts.default')
{{-- Web site Title --}}
@section('title') {{{ $title }}} :: @parent @stop
@section('main')
 @include('utils.errors.list')
 @include('utils.vendor.flash.message') 
<div class="content">
  <div class="panel panel-white">

    <form class="wizard-form steps-planpurchase" action="{{url('user/purchase-plan')}}" method="post"  data-parsley-validate="true">
        {!! csrf_field() !!}

            <h6>{{trans('products.choose_pacakge')}} </h6>
            <fieldset>
               <div class="col-md-12">                
                    <div class="d-flex align-items-start flex-column flex-md-row">   
                      <div class="row"> 
                        @forelse($products as $item)
                        <div class="col-xl-3 col-sm-4">
                          <label class="form-check-label" style="width: 100%;"> 
                            <div class="panel panel-default text-center">
                              <div class="panel-heading">
                                <div class="ribbon-container {{$item->package}} ">
                                  <div class="ribbon bg-indigo-400">{{trans('products.selected')}} </div>
                                </div>
                                <h1>{{$item->package}}</h1>
                              </div>
                              <div class="panel-body">
                                <p><strong>{{$item->pv}}</strong> PV</p>                                     
                                <p><strong>Endless</strong> Amet</p>
                              </div>
                              <div class="panel-footer">
                                <h3>{{$currency_sy}} {{$item->amount}}</h3>
                                <h4>{{trans('products.one_time_fee')}}</h4>                                  
                                <div class="form-check">
                                  <div class="uniform-choice border-indigo-600 text-indigo-800"><span class="checked">
                                    <input type="radio"  required="required"    name="plan" badge-class="{{$item->package}}" class="form-check-input-styled-custom" data-fouc="" data-parsley-group="block-0" value="{{$item->id}}" plan-amount="{{$item->amount}}">
                                    <span class="checkmark"></span>
                                  </div>
                                </div>
                              </div>
                            </div> 
                          </label>
                        </div>
                        @empty
                      @endforelse
                    </div>  
                  </div> 
                </div>              
              </fieldset>
            <h6>{{trans('products.choose_payment_type')}}</h6>

            <fieldset> 

              <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
                  <li class="nav-item active"><a href="#steps-planpurchase-tab1" class="nav-link  steps-plan-payment active " data-toggle="tab" data-payment='paypal' >Monthly Payment</a></li>
                  <li class="nav-item"><a href="#steps-planpurchase-tab2" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='cheque'>Annual Payment</a></li>
                
                  <!--   <li class="nav-item"><a href="#steps-planpurchase-tab4" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='paypal'>Paypal</a></li> -->
              <!--     <li class="nav-item"><a href="#steps-planpurchase-tab5" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='voucher'>Voucher</a></li> -->


                <!--   <li class="nav-item"> <a href="#steps-planpurchase-tab4" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='paypal'>PayPal</a>
                  <li class="nav-item"> <a href="#steps-planpurchase-tab5" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='bitcoin'>Bitcoin</a>
                  <li class="nav-item"> <a href="#steps-planpurchase-tab6" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='cc'>Credit Card</a>
                  </li> -->
                </ul> 

                <div class="tab-content">
                  <div class="tab-pane fade in active" id="steps-planpurchase-tab1">
                    <input type="hidden" name="steps_plan_payment" value="paypal" data-parsley-group="block-1">
                    <center>Pay With Paypal</center> 
                     
                  </div>

                   <div class="tab-pane fade" id="steps-planpurchase-tab2">
                      <center>Pay With Bank</center> 
                  </div>


                </div>
              </div>




             
                
              
            </fieldset>

             

             
          </form>
    
  </div>
  
</div>

              

@endsection

@section('scripts') @parent

<script type="text/javascript">
$(document).on('submit', 'form', function() {
   $(this).find('button:submit, input:submit').attr('disabled','disabled');
 });


</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
  $('select').select2();
</script>



<script src="https://checkout.stripe.com/checkout.js"></script>
<script type="text/javascript">
       $(document).ready(function() {
           $('#stripe_btn').on('click', function(event) {
               event.preventDefault();
               var $button = $(this),
                   $form = $button.parents('form');
               var opts = $.extend({}, $button.data(), {
                   token: function(result) {
                       $form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
                   }
               });
               StripeCheckout.open(opts);
           });
       });
</script>



@endsection







