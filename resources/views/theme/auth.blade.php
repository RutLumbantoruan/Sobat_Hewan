<!DOCTYPE html>
<html lang="en">
    @include('theme.auth_head')
    <body>
        @yield('content')
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/regex.js')}}"></script>
        <script src="{{asset('js/plugin.js')}}"></script>
        <script src="{{asset('js/toastr.js')}}"></script>
        <script src="{{asset('js/auth.js')}}"></script>
        <script type="text/javascript">
            $("body").on("contextmenu", "img", function(e) {
                return false;
            });
            $('img').attr('draggable', false);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script type="text/javascript">
            $("#username_login").focus();
            format_email('username_login');
            $('#form_login').on('keydown', 'input', function (event) {
                if (event.which == 13) {
                    event.preventDefault();
                    var $this = $(event.target);
                    var index = parseFloat($this.attr('data-login'));
                    $('[data-login="' + (index + 1).toString() + '"]').focus();
                }
            });
            $('#form_register').on('keydown', 'input', function (event) {
                if (event.which == 13) {
                    event.preventDefault();
                    var $this = $(event.target);
                    var index = parseFloat($this.attr('data-register'));
                    $('[data-register="' + (index + 1).toString() + '"]').focus();
                }
            });
            number_only('phone_register');
            text_only('username_register');
            format_email('email_register');
        </script>
    </body>
</html>