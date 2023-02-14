@extends('layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('templete') }}/src/assets/css/light/apps/chat.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/apps/chat.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
        <!--  BEGIN CONTENT AREA  -->
            <div class="layout-px-spacing">
                    <div class="chat-section layout-top-spacing">
                        <div class="row">    
                            <div class="col-xl-12 col-lg-12 col-md-12">    
                                <div class="chat-system">
                                    <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                                    <div class="user-list-box">
                                        <div class="p-2">
                                        @if (isClient())
                                            <span class="p-2 m-1">{{translate('Expert')}}</span>
                                        @else
                                            <span class="p-2 m-1">{{translate('Clients')}}</span>
                                        @endif
                                        </div>
                                        <div class="search">
                                            <input type="text" class="form-control" placeholder="Search User" />
                                        </div>
                                        <div class="people">
                                        @forelse ($chat_threads as $key => $single_chat_thread)
                                            @php
                                                $num_of_message = $single_chat_thread->chats->where('seen', 0)->count();
                                            @endphp
                                                @if ($single_chat_thread->receiver != null && $single_chat_thread->sender != null)
                                                    @if (isClient())
                                                    <a href="javascript:void(0)" class="chat-user-item p-3 d-block text-inherit" 
                                                    data-url="{{ route('chat_view', $single_chat_thread->id) }}" 
                                                    data-refresh="{{ route('chat_refresh', $single_chat_thread->id) }}" onclick="loadChats(this)">
                                                    <div class="person" data-chat="person6">
                                                        <div class="user-info">
                                                            <div class="f-head">                                                                
                                                                @if ($single_chat_thread->sender->photo != null)
                                                                <img src="{{ asset($single_chat_thread->receiver->photo) }}">
                                                                @else
                                                                <img src="{{ asset('templete') }}/src/assets/img/demoprofile.png" alt="avatar">
                                                                @endif

                                                                @if(Cache::has('user-is-online-' . $single_chat_thread->receiver->id))
                                                                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                                                @else
                                                                    <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                                                @endif
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-info">
                                                                    <span class="user-name" data-name="{{ $single_chat_thread->receiver->name }}">{{ $single_chat_thread->receiver->name }}</span>
                                                                    @if ($single_chat_thread->chats->last() != null)
                                                                        @if ($single_chat_thread->chats->last()->message != null)                                                                           
                                                                            <span class="preview">{{ $single_chat_thread->chats->last()->message }}</span>
                                                                        @else
                                                                        <span class="preview">{{ translate('Attachments')}}</span>
                                                                        @endif
                                                                    @endif
                                                                    
                                                                    @if ($single_chat_thread->chats->last() != null)
                                                                        <span class="user-meta-time">{{ Carbon\Carbon::parse($single_chat_thread->chats->last()->created_at)->diffForHumans() }}</span>
                                                                    @endif
                                                                    <span class="badge badge-primary badge-circle flex-shrink-0 ml-4">{{ count($single_chat_thread->chats->where('sender_user_id', '!=', Auth::user()->id)->where('seen', 0)) }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                    @else
                                                    <a href="javascript:void(0)" class="chat-user-item p-3 d-block text-inherit"
                                                    data-url="{{ route('chat_view', $single_chat_thread->id) }}"
                                                    data-refresh="{{ route('chat_refresh', $single_chat_thread->id) }}" onclick="loadChats(this)">
                                                    <div class="person" data-chat="person1">
                                                        <div class="user-info">
                                                            <div class="f-head">
                                                                @if ($single_chat_thread->sender->photo != null)
                                                                <img src="{{ asset($single_chat_thread->sender->photo) }}">
                                                                @else
                                                                <img src="{{ asset('templete') }}/src/assets/img/demoprofile.png" alt="avatar">
                                                                @endif

                                                                @if(Cache::has('user-is-online-' . $single_chat_thread->sender->id))
                                                                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                                                @else
                                                                    <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                                                @endif
                                                            </div>
                                               
                                                            <div class="f-body">
                                                                <div class="meta-info">
                                                                    <span class="user-name" data-name="{{ $single_chat_thread->sender->name }}">{{ $single_chat_thread->sender->name }}</span>
                                                                    @if ($single_chat_thread->chats->last() != null)
                                                                    <span class="user-meta-time">{{ Carbon\Carbon::parse($single_chat_thread->chats->last()->created_at)->diffForHumans() }}</span>
                                                                    @endif
                                                                    <span class="badge badge-primary badge-circle flex-shrink-0 ml-4">{{ count($single_chat_thread->chats->where('sender_user_id', '!=', Auth::user()->id)->where('seen', 0)) }}</span>
                                                                </div>
                                                                <span class="preview">{{ $single_chat_thread->chats->last()->message }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                    @endif
                                                @endif
                                        @empty
                                            <div class=" text-center">
                                                <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                                <h4>{{ translate('Nothing Found')}}</h4>
                                            </div>
                                        @endforelse
                                                                                   
                                        </div>
                                    </div>

                                    <div class="chat-box">
                                        
                                            <div class="chat-not-selected">
                                                <p> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> {{ translate('Select a') }} @if (isClient()) {{ translate('Expert') }} @else {{ translate('Client') }} @endif {{ translate('to view chats') }}</p>
                                            </div>                                    
    
                                        <div class="chat-box-inner">
                                            <div class="chat-meta-user">
                                                <div class="current-chat-user-name"><span><img src="{{ asset('templete') }}/src/assets/img/90x90.jpg" alt="dynamic-image"><span class="name"></span></span></div>
                                                <div class="chat-action-btn align-self-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone  phone-call-screen"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video video-call-screen"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </a>    
                                                        <div class="dropdown-menu left" aria-labelledby="dropdownMenuLink-2">
                                                            <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Mail</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-conversation-box">
                                                <div id="chat-conversation-box-scroll" class="chat-conversation-box-scroll">                                                    
                                                    <div class="chat" data-chat="person6">
                                                        <div class="conversation-start">
                                                            <span>Monday, 1:27 PM</span>
                                                        </div>
                                                        <div class="bubble you">
                                                            Hi, I am back from vacation
                                                        </div>
                                                        <div class="bubble you">
                                                            How are you?
                                                        </div>
                                                        <div class="bubble me">
                                                            Welcom Back
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-footer">
                                                <div class="chat-input">
                                                    <form class="chat-form" action="javascript:void(0);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                                        <input type="text" class="mail-write-box form-control" placeholder="Your Message..."/>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>                
            </div>
        <!--  END CONTENT AREA  -->        
@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('templete') }}/src/assets/js/apps/chat.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript">
        function loadChats(el) {
            $('.selected-chat').each(function() {
                $(this).removeClass('bg-soft-primary');
                $(this).removeClass('selected-chat');
            });
            $(el).addClass('selected-chat');
            $(el).addClass('bg-soft-primary');
            $.get($(el).data('url'), {}, function(data) {
                $('#single_chat').html(data);
                AIZ.extra.scrollToBottom();

                initializeLoadMore();

                $('#send-mesaage').on('submit', function(e) {
                    e.preventDefault();
                    send_reply();
                });
            });
        }

        function send_reply() {
            var chat_thread_id = $('#chat_thread_id').val();
            var message = $('#message').val();
            var attachment = $('#attachment').val();
            if (message.length > 0 || attachment.length > 0) {
                $.post('{{ route('chat.reply') }}', {
                    _token: '{{ csrf_token() }}',
                    chat_thread_id: chat_thread_id,
                    message: message,
                    attachment: attachment
                }, function(data) {
                    $('#message').val('');
                    $('#attachment').val('');
                    $('#chat-messages').append(data);
                    AIZ.extra.scrollToBottom();
                });
            }
        }
        $(document).on('click', '.chat-attachment', function() {
            AIZ.uploader.trigger(
                this,
                'direct',
                'all',
                '',
                true,
                function(files) {
                    $('#attachment').val(files);
                    send_reply();
                }
            );
        });
        $(document).ready(function() {
            setInterval(function() {
                refreshChats();
            }, 5000);
        });

        function refreshChats() {
            var el = $('.selected-chat');
            $.get($(el).data('refresh'), {}, function(data) {
                if (data.count > 0) {
                    $('#chat-messages').append(data.messages);
                    AIZ.extra.scrollToBottom();
                }
            });
        }

        function initializeLoadMore() {
            $('.load-more-btn').on('click', function() {
                $.post('{{ route('get-old-message') }}', {
                    _token: '{{ csrf_token() }}',
                    first_message_id: $(this).data('first')
                }, function(data) {
                    if (data.first_message_id > 0) {
                        $('#chat-messages').prepend(data.messages);
                        $('.load-more-btn').data('first', data.first_message_id);
                    }
                });
            });
        }
    </script>
@endsection
