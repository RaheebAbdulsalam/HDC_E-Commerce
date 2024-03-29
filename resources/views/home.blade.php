@extends('layouts.template')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <section class="cards">
        <h2 class="title">{{ __('Welcome') }} {{ Auth::user()->name }} </h2>
        <div class="content">

            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-user" style="color: rgb(84, 0, 0)"></i>
                </div>
                <div class="info">
                    <h3>Profile</h3>
                    <div class="customer-card">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Account No:</th>
                                <td>{{ Auth::user()->id }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Name: </th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Email Address:</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Phone Number:</th>
                                <td>{{ Auth::user()->phone }}</td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
