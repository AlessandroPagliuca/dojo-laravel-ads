@extends('layouts.app')
@section('content')
    <section>
        <h3>Announcements</h3>
        <!--loop for print annoucement in page-->
        @foreach ($announcements as $announcement)
            <div class="">{{ $announcement->title }}</div>
        @endforeach
    </section>
@endsection
