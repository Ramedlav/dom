{{ __('Hi') }} <strong>{{ $user_name }} </strong>,<br>
{{ __('You have received a new message from') }} {{ route('home') }}<br><br>
{{ __('Announcements') }}<br>
<b>{{ $post->title }}</b><br>
{{ $post->address }}<br><br>
{{ __('Name: ') }} {{ $name }} <br>
{{ __('Email: ') }} {{ $email }} <br>
{{ __('Phone: ') }} {{ $phone }} <br>
{{ __('Message: ') }} {{ $new_message }}<br>
{{ __('URL: ') }} {{ route('ShowDialogs') }}<br>
