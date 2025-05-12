@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div>
        {{-- <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a> --}}

        <div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-light">
            <div class="card shadow-lg rounded-4 p-4" style="min-width: 400px; max-width: 500px; width: 100%;">
                <div class="card-body">
                    <div class="text-center mb-5 mt-5">
                        <h4 class="fw-bold">Welcome</h4>
                    </div>
                    <form>
                        <div class="mb-4">
                            <label class="form-label fw-semibold fs-5" for="site">Site</label>
                            <input type="text" id="site" class="form-control form-control-lg" placeholder="Site" required />
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold fs-5" for="username">Username</label>
                            <input type="text" id="username" class="form-control form-control-lg" placeholder="Username"
                                required />
                        </div>

                        <div class="mb-5">
                            <label class="form-label fw-semibold fs-5" for="password">Password</label>
                            <div class="input-group">
                                <input type="password" id="password" class="form-control form-control-lg"
                                    placeholder="Password" required />
                                <span class="input-group-text" onclick="togglePassword()" style="cursor: pointer;">
                                    <i class="bi bi-eye-slash" id="toggleIcon"></i>
                                </span>
                            </div>
                        </div>


                        <div class="d-grid mb-3 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
                        </div>

                        {{-- <div class="text-center">
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div> --}}

                        <div>
                            {{-- <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1> --}}
                            <p class="text-center">©May 2025</p>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        {{-- <div id="register" class="animate form registration_form">


            <section class="login_content">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms
                            </p>
                        </div>
                    </div>
                </form>
            </section>
        </div> --}}

    </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const toggleIcon = document.getElementById("toggleIcon");

            const isPassword = passwordInput.type === "password";
            passwordInput.type = isPassword ? "text" : "password";
            toggleIcon.classList.toggle("bi-eye");
            toggleIcon.classList.toggle("bi-eye-slash");
        }
    </script>

@endsection
