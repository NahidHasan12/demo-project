@extends('layouts.front')
@section('title')
    Register
@endsection
@push('styles')

@endpush
@section('content')

    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="register-form">
                        <div class="title">
                            <h3>No Account? Register</h3>
                            <p>Registration takes less than a minute but gives you full control over your orders.</p>
                        </div>
                        <form class="row" method="post" action="{{ route('signup.store') }}">
                            @csrf

                            <div class="col-sm-6">
                                <x-front.inputbox labelName="First Name" required="required" name="first_name" error="first_name"/>
                            </div>

                            <div class="col-sm-6">
                                <x-front.inputbox labelName="Last Name" required="required" name="last_name" error="last_name"/>
                            </div>

                            <div class="col-sm-6">
                                <x-front.inputbox type="email" required="required" labelName="Email" name="email" error="email"/>
                            </div>

                            <div class="col-sm-6">
                                <x-front.inputbox type="tel" labelName="Phone" optional="(Optional)" name="phone" error="phone"/>
                            </div>

                            <div class="col-sm-6">
                                <x-front.inputbox type="password" required="required" labelName="Password" name="password" error="password"/>
                            </div>

                            <div class="col-sm-6">
                                <x-front.inputbox type="password" labelName="Confirm Password" name="password_confirmation"/>
                            </div>

                            <div class="button">
                                <button class="btn" type="submit">Register</button>
                            </div>

                            <p class="outer-link">Already have an account? <a href="{{ url('signin') }}">Login Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush
