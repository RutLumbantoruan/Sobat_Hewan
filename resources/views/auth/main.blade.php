@extends('theme.auth',["title" => "Authentication"])
@section('content')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form id="form_login" class="sign-in-form">
                <h2 class="title">Masuk</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" name="email" id="username_login" data-login="1" autocomplete='off'/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" id="password_login" data-login="2" autocomplete='off'/>
                </div>
                <button id="tombol_login" onclick="auth('#tombol_login','#form_login','login','Login');" type="button" class="btn solid" data-login="3">Masuk</button>
            </form>
            <form id="form_register" class="sign-up-form">
                <h2 class="title">Daftar</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nama lengkap" name="name" id="username_register" data-register="1" autocomplete='off'/>
                </div>
                <div class="input-field">
                    <i class="fas fa-phone"></i>
                    <input type="tel" placeholder="Nomor HP" name="notelp" id="phone_register" data-register="2" maxlength="14" autocomplete='off'/>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" id="email_register" data-register="3" autocomplete='off'/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" id="password_register" data-register="4" autocomplete='off' />
                </div>
                {{-- <div class="input-field"> --}}
                    {{-- </div> --}}
                <img src={{ 'data:image/jpeg;base64,' . $captchaImage }} />
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="hidden" value="{{base64_decode($captchaImage)}}" name="realcaptcha" />
                    <input type="text" placeholder="Captcha" autocomplete="off" name="captchainput" />
                </div>
                <button id="tombol_register" onclick="auth('#tombol_register','#form_register','register','Sign Up');" type="button" class="btn" data-register="5">Daftar</button>
            </form>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3 style="margin-top:30px;">
                    Belum punya akun ?
                    <a href="javascript:void(0);" id="sign-up-btn" style="color:rgb(0, 110, 255);text-decoration: none;"> Daftar</a>
                </h3>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
            </div>
            <h1 class="image">SobatHewan</h1>
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3 style="margin-top:30px;">
                    Sudah punya akun ?
                    <a href="javascript:void(0);" id="sign-in-btn" style="color:rgb(0, 110, 255);text-decoration: none;"> Masuk</a>
                </h3>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
            </div>
            <h1 class="image">SobatHewan</h1>
        </div>
    </div>
</div>
@endsection
