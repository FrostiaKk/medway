<form action="/order" method="POST" id="new-order-form">
    @csrf
    <div class="form-group">
        <label for="firstname">First Name:</label>
    <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : ''}}" name="firstname">
    @if($errors->has('firstname'))
        <div class="invalid-feedback">
            {{$errors->first('firstname')}}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="lastname">Last Name:</label>
    <input type="text" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : ''}}" name="lastname">
    @if($errors->has('lastname'))
        <div class="invalid-feedback">
            {{$errors->first('lastname')}}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email">
    @if($errors->has('email'))
        <div class="invalid-feedback">
            {{$errors->first('email')}}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="street">Street Address:</label>
        <input type="text" class="form-control  {{ $errors->has('street') ? 'is-invalid' : ''}}" name="street">
        @if($errors->has('street'))
        <div class="invalid-feedback">
            {{$errors->first('street')}}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="city">City:</label>
        <input type="text" class="form-control  {{ $errors->has('city') ? 'is-invalid' : ''}}" name="city">
        @if($errors->has('city'))
        <div class="invalid-feedback">
            {{$errors->first('city')}}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="zipcode">Zip-Code:</label>
        <input type="text" class="form-control  {{ $errors->has('zipcode') ? 'is-invalid' : ''}}" name="zipcode">
        @if($errors->has('zipcode'))
        <div class="invalid-feedback">
            {{$errors->first('zipcode')}}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="phonenumber">Phone Number:</label>
        <input type="text" class="form-control  {{ $errors->has('phonenumber') ? 'is-invalid' : ''}}" name="phonenumber">
        @if($errors->has('phonenumber'))
        <div class="invalid-feedback">
            {{$errors->first('phonenumber')}}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="nip">NIP:</label>
        <input type="text" class="form-control  {{ $errors->has('nip') ? 'is-invalid' : ''}}" name="nip">
        @if($errors->has('nip'))
        <div class="invalid-feedback">
            {{$errors->first('nip')}}
        </div>
    @endif
    </div>
    <button class="btn btn-block btn-primary">Send</button>
</form>