 <div class="form-group">
     {!! Form::label('country', 'Country : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('country', $contact->country ?? '' , ['class' => 'form-control','placeholder'=>'Enter country name']) !!}
 </div>
  <div class="form-group">
      {!! Form::label('address', 'Address : ', ['class' => 'font-weight-bold']) !!}
      {!! Form::text('address', $contact->address ?? '' , ['class' => 'form-control','placeholder'=>'Enter address']) !!}
  </div>
 <div class="form-group">
     {!! Form::label('address_one', 'Address One : ', ['class' => 'font-weight-bold']) !!}
     {!! Form::text('address_one', $contact->address_one ?? '' , ['class' => 'form-control','placeholder'=>'Enter address']) !!}
 </div>
<div class="form-group">
    {!! Form::label('phone_number_one', 'Phone Number One : ', ['class' => 'font-weight-bold']) !!}
    {!! Form::text('phone_number_one', $contact->phone_number_one ?? '' , ['class' => 'form-control','placeholder'=>'Enter phone number']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone_number_two', 'Phone Number Two : ', ['class' => 'font-weight-bold']) !!}
    {!! Form::text('phone_number_two', $contact->phone_number_two ?? '' , ['class' => 'form-control','placeholder'=>'Enter phone number']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone_number_three', 'Phone Number Three : ', ['class' => 'font-weight-bold']) !!}
    {!! Form::text('phone_number_three', $contact->phone_number_three ?? '' , ['class' => 'form-control','placeholder'=>'Enter phone number']) !!}
</div>

<div class="form-group">
    {!! Form::label('phone_number_four', 'Phone Number Four : ', ['class' => 'font-weight-bold']) !!}
    {!! Form::text('phone_number_four', $contact->phone_number_four ?? '' , ['class' => 'form-control','placeholder'=>'Enter phone number']) !!}
</div>



<div class="form-group">
    {!! Form::label('email_one', 'Email One : ', ['class' => 'font-weight-bold']) !!}
    {!! Form::text('email_one', $contact->email_one ?? '' , ['class' => 'form-control','placeholder'=>'Enter email']) !!}
</div>

<div class="form-group">
    {!! Form::label('email_two', 'Email Two : ', ['class' => 'font-weight-bold']) !!}
    {!! Form::text('email_two', $contact->email_two ?? '' , ['class' => 'form-control','placeholder'=>'Enter email']) !!}
</div>

 <div class="form-group">
     <input type="submit" class="btn btn-success btn-md float-right mb-3" value="{{ $button_text }}">
     <a href="{{ route('backend.contacts') }}" class="btn btn-primary float-left">Cancel</a>
 </div>


 </div>

