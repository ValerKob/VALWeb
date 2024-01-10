@extends('layouts.main')

@section('title', 'VALWeb')

@section('content')
{{-- SGlav BLog --}}
<section class="adminSectionContent">
  <div class="container">
    <div class="adminTitle txt">
        Все заявки
    </div>
    <div class="cardsAdmin">
        <div class="cardAdmin">
            <div class="cardAdminName">Имя</div>
            <div class="cardAdminPhone">Phone</div>
            <div class="cardAdminEmail">Email</div>
            <div class="cardAdminText">Text</div>
            <div class="cardAdminBtn">Button</div>
        </div>
        @foreach ($items as $item)
        <div class="cardAdmin">
            <div class="cardAdminName">{{ $item->name }}</div>
            <div class="cardAdminPhone">{{ $item->phone }}</div>
            <div class="cardAdminEmail">{{ $item->email }}</div>
            <div class="cardAdminText">{{ $item->text }}</div>
            <form action="deleteApplications" method="POST">
                @csrf
                <input type="text" name="id" value="{{ $item->id }}" style="display: none;">
                <button type="submit" class="btnAdminDelete">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
  </div>
</section>
<!-- EndGlav Blog -->
@endsection
