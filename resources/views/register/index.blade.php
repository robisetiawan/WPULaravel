@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Registration FOrm</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

                </form>

                <small class="d-block text-center">Already Rgisted? <a href="/login">Login Now</a></small>
            </main>
        </div>
    </div>
@endsection