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
            <h6>{{trans('products.choose_payment')}}</h6>
            <fieldset> 

              <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
                  <li class="nav-item active"><a href="#steps-planpurchase-tab1" class="nav-link  steps-plan-payment active " data-toggle="tab" data-payment='cheque' >{{trans('products.cheque')}}</a></li>
                  <li class="nav-item"><a href="#steps-planpurchase-tab2" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='ewallet'>{{trans('products.ewallet')}}</a></li>
                   <li class="nav-item"><a href="#steps-planpurchase-tab3" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='Stripe'>Stripe</a></li>
                    <li class="nav-item"><a href="#steps-planpurchase-tab4" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='paypal'>Paypal</a></li>
                  <li class="nav-item"><a href="#steps-planpurchase-tab5" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='voucher'>Voucher</a></li>


                <!--   <li class="nav-item"> <a href="#steps-planpurchase-tab4" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='paypal'>PayPal</a>
                  <li class="nav-item"> <a href="#steps-planpurchase-tab5" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='bitcoin'>Bitcoin</a>
                  <li class="nav-item"> <a href="#steps-planpurchase-tab6" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='cc'>Credit Card</a>
                  </li> -->
                </ul> 

                <div class="tab-content">
                  <div class="tab-pane active  " id="steps-planpurchase-tab1">
                    <input type="hidden" name="steps_plan_payment" value="cheque" data-parsley-group="block-1">
                     {{trans('products.send_your_payment_checque_to_the_company')}}  <code>{{trans('products.order_will_process_after_payment_received')}}  </code>, {{trans('product.thanks')}}.
                     <br><br>

                     <button type="submit" class="btn btn-info" style="margin-left: 400px;">Confirm</button>
                     
                  </div>

                  <div class="tab-pane fade" id="steps-planpurchase-tab2">
                     Your current<code><b> balance is  {{$currency_sy}}{{$balance}}</b></code>
                     {{trans('products.ewallet_comment')}}
                     <br><br>

                       <button type="submit" class="btn btn-info" style="margin-left: 400px;">Confirm</button>
                  </div>

                    <div class="tab-pane fade" id="steps-planpurchase-tab3">

                       <div class="row">
                            <div class="col-sm-6 center col-sm-offset-3">
                              <input  type="button"
                                      id="stripe_btn"
                                      class="btn btn-primary"
                                      value="Pay with Card"
                                      data-key="{{config('services.stripe.key')}}"
                                      data-amount=""
                                      data-currency="USD"
                                      data-bitcoin="false"
                                      data-name="binary-ath"
                                      data-description="info@solidus.cc"
                                      data-locale="auto"
                                      />
                            </div>
                        </div>

                           <div class="row stripe_div" >    
                            All transactions are handled securely with <a href="https://stripe.com" >https://stripe.com</a>   
                        </div>
                    
                  </div>



                  <div class="tab-pane fade" id="steps-planpurchase-tab5">
                    <div class="table-responsive div-vouher-payment">                      
                      <table class="table table-dark bg-slate-600 table-vouher-payment">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Voucher code</th>
                            <th>Amount  used</th>
                            <th>Voucher balance</th>
                            <th>Remaining</th>
                            <th>Validate Voucher</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td><input type="text" name="voucher[]" class="form-control"></td>
                            <td><span class="amount"></span></td>
                            <td><span class="balance"></span></td>                             
                            <td><span class="remaining"></span></td>                             
                            <td class="td-validate-voucher"><button class="btn btn-info validatevoucher" onclick="return false;">Validate</button></td>
                          </tr>
                          </tbody>
                        </table>
                    </div>
                      
                  </div>

                  <div class="tab-pane fade" id="steps-planpurchase-tab4">
                   Paypal Payment
                  </div>

                  <div class="tab-pane fade" id="steps-planpurchase-tab5">
                    Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                  </div>

                   <div class="tab-pane fade" id="steps-planpurchase-tab6">
                    Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
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







