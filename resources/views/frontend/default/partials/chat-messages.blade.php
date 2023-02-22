<div class="chat-box-wrap h-100">
    <div class="attached-top bg-white border-bottom chat-header d-flex justify-content-between align-items-center p-3 shadow-sm">
        <div class="media align-items-center">
            @if (isClient())
                <span class="avatar avatar-sm mr-3 flex-shrink-0">
                    @if ($chat_thread->receiver->photo != null)
                        <img src="{{ asset($chat_thread->receiver->photo) }}">
                    @else
                        <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                    @endif
                </span>
                <div class="media-body">
                    <h6 class="fs-15 mb-1">
                        {{ $chat_thread->receiver->name }}
                        @if(Cache::has('user-is-online-' . $chat_thread->receiver->id))
                            <span class="badge badge-dot badge-success badge-circle"></span>
                        @else
                            <span class="badge badge-dot badge-secondary badge-circle"></span>
                        @endif
                    </h6>
                </div>
            @else
                <span class="avatar avatar-sm mr-3 flex-shrink-0">
                    @if ($chat_thread->sender->photo != null)
                        <img src="{{ asset($chat_thread->sender->photo) }}">
                    @else
                        <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                    @endif
                </span>
                <div class="media-body">
                    <h6 class="fs-15 mb-1">
                        {{ $chat_thread->sender->name }}
                        @if(Cache::has('user-is-online-' . $chat_thread->sender->id))
                            <span class="badge badge-dot badge-success badge-circle"></span>
                        @else
                            <span class="badge badge-dot badge-secondary badge-circle"></span>
                        @endif
                    </h6>
                </div>
            @endif
        </div>
        <div class="d-flex align-items-center">
            <button class="aiz-mobile-toggler d-lg-none aiz-all-chat-toggler mr-2" data-toggle="class-toggle" data-target=".chat-user-list-wrap">
                <span></span>
            </button>
            <button class="btn btn-icon btn-circle btn-soft-primary chat-info" data-toggle="class-toggle" data-target=".chat-info-wrap"><i class="las la-info-circle"></i></button>
        </div>
    </div>
    <div class="chat-list-wrap c-scrollbar-light scroll-to-btm" id="parentDiv">
        @if (count($chats) > 0)
            <div class="chat-coversation-load text-center">
                <button class="btn btn-link load-more-btn" data-first="{{ $chats->last()->id }}" type="button">{{ translate('Old Chat') }}</button>
            </div>
        @endif
        <div class="chat-list px-4" id="chat-messages">
            @include('frontend.default.partials.chat-messages-part',['chats' => $chats])
        </div>
    </div>
   

</div>
