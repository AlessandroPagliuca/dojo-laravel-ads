@extends('layouts.app')
@section('content')
    <section class="container">
        <h3 class="py-5">My Announcements</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Price</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Description</th>
                    <th scope="col">Contract</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <!--loop for print annoucement in page-->
                @foreach ($announcements as $announcement)
                    <tr>
                        <td>{{ $announcement->id }}</td>
                        <td>{{ $announcement->title }}</td>
                        <td>{{ $announcement->duration }}</td>
                        <td>{{ $announcement->price }}</td>
                        <td>{{ $announcement->plan }}</td>
                        <td>{{ $announcement->description }}</td>
                        <td>{{ $announcement->contract }}</td>
                        <td> <a href="{{ route('admin.announcements.show', $announcement->slug) }}"
                                class="bg-light text-uppercase">
                                show
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>
@endsection
