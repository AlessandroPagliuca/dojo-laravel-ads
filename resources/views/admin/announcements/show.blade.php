@extends('layouts.app')
@section('content')
    <section class="container">
        <h3 class="py-5">My Announcements : {{ $announcement->title }}</h3>
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
                <tr>
                    <th scope="row">{{ $announcement->id }}</th>
                    <td>{{ $announcement->title }}</td>
                    <td>{{ $announcement->duration }}</td>
                    <td>{{ $announcement->price }}</td>
                    <td>{{ $announcement->plan }}</td>
                    <td>{{ $announcement->description }}</td>
                    <td>{{ $announcement->contract }}</td>
                    <td> <a href="{{ route('admin.announcements.index') }}" class="bg-light text-uppercase">
                            index
                        </a>
                    </td>
                    <td> <a href="{{ route('admin.announcements.cookie') }}" class="bg-light text-uppercase">
                        cookie
                    </a>
                </td>
                </tr>
            </tbody>
        </table>

    </section>
@endsection
