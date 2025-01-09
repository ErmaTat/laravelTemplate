@extends('backend.layouts.app')
@section('title','Notifications')
@section('page-title', 'Notifications')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12">
      <div class="card user-list-item">
        <div>
          <div class="avatar avatar-online">
            <a href="settings.html"
              ><img
                src="{{ asset('backend/assets/img/profiles/avatar-02.jpg')}}"
                class="rounded-circle"
                alt="image"
            /></a>
          </div>
        </div>
        <div class="users-list-body">
          <div class="name-list-user">
            <h6>
              Lex Murphy <span>requested access to </span>UNIX directory
              tree hierarchy
            </h6>
            <div class="follow-btn">
              <a href="javascript:;" class="btn btn-primary">Accept</a>
              <a href="javascript:;" class="btn btn-outline-primary"
                >Reject</a
              >
            </div>
            <span class="time">Today at 9:42 AM</span>
          </div>
          <div class="chat-user-time">
            <span class="chats-delete">
              <a
                href="javascript:;"
                data-bs-toggle="modal"
                data-bs-target="#notification-delete"
                ><i class="fe fe-trash"></i
              ></a>
            </span>
          </div>
        </div>
      </div>
    
    </div>
  </div>


@endsection