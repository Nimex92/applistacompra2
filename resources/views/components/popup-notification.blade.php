@if(session('popup_notification'))
    <div class="popup-notification {{ session('popup_notification.type') }}">
        <p>{{ session('popup_notification.message') }}</p>
    </div>
@endif