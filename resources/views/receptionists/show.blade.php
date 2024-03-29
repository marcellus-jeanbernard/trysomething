@extends('layouts.admin')
@section('page')


      <section class="card">
        <header class="card-header card-header-lg">
          Pharmacist
        </header>
        <div class="card-block invoice">
          <div class="row">
            <div class="col-lg-6 company-info">
              


              <div class="invoice-block">
                <h2>{{$pharmacist->name}}:</h2>

                
                <div>
                  <img src="{{$pharmacist->image}}"  height="180" width="180" class="img-rounded" alt="Visa">
                 
                </div>
              </div>
            </div>
            <div class="col-lg-6 clearfix invoice-info">
             

              <div class="payment-details">
                <strong>Informations'Details</strong>
               


                <table>
                  <tr>
                    <td>Email:</td>
                    <td>{{$pharmacist->email}}</td>
                  </tr>
                  <tr>
                    <td>Address:</td>
                    <td>{{$pharmacist->address}}</td>
                  </tr>
                  <tr>
                    <td>Phone:</td>
                    <td>{{$pharmacist->phone}}</td>
                  </tr>
                  <tr>
                    <td>Sexe:</td>
                    <td>{{$pharmacist->sexe}}</td>
                  </tr>

                </table>


              </div>
            </div>
          </div>




          


          
          <div class="row">
            
            <div class="col-lg-7 terms-and-conditions">
              <strong>Terms and Conditions</strong>
              Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.
            </div>
             
            <div class="col-lg-5 clearfix">
              <div class="total-amount">
                
          
                <div class="actions">

                  <a href="{{ url('admin/pharmacists')}}" class="btn btn-primary">Back</a>
                  <!--<button class="btn btn-rounded btn-inline">Send</button> -->
                  <button class="btn btn-inline btn-secondary btn-rounded">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop