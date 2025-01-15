@extends('backend.layouts.app')
@section('title','Notifications')
@section('page-title')
Notifications<span class="not-number">4</span>
@endsection
@section('css')
<style>
 .not-number {
    width: 30px;  
    height: 30px; 
    padding: 0;   
    border-radius: 50%; 
    cursor: pointer;
    color: #fff;
    background-color: #7539ff;
    display: inline-flex; 
    justify-content: center; 
    align-items: center; 
    font-size: 14px; 
    margin-left: 3px;

}

</style>
@endsection
@section('not-btns')
<div class="noti-action-btns d-flex align-items-center justify-content-sm-end">
  <a href="#" class="btn btn-white btn-mark-read"><i class="fa-solid fa-check me-1"></i>Mark all as read</a>
  {{-- <a href="#" class="btn btn-white btn-delete-all" data-bs-toggle="modal" data-bs-target="#notification-delete"><i class="fe fe-trash-2 me-1"></i>Delete all</a> --}}
</div>
@endsection

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
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor cupiditate maxime vel ipsa, fuga labore a. Mollitia perferendis cum provident libero corrupti veritatis consectetur, optio delectus, laudantium facere neque dicta!
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga est quaerat cumque placeat ipsa saepe pariatur veritatis suscipit sed dolor voluptates facilis accusamus optio explicabo exercitationem perspiciatis, excepturi et quia?
            </h6>
            {{-- <div class="follow-btn">
              <a href="javascript:;" class="btn btn-primary">Accept</a>
              <a href="javascript:;" class="btn btn-outline-primary"
                >Reject</a
              >
            </div> --}}
            <span class="time">Today at 9:42 AM  
              <span class="badge  bg-success-light">read</span>
              <span class="badge  bg-danger-light">Unread</span>
            </a>
           
          </span>
          </div>
          
        </div>
      </div>
    </div>
  </div>


@endsection
