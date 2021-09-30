<x-guest-layout>
	<div class="authincation section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-5">
                            <img src="{{ Storage::url(setting()->logo) }}" alt="">
                        </div>
                        <div class="auth-form card">
                            <div class="card-header justify-content-center">
                                <h4 class="card-title">Crea tu cuenta</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" name="myform" class="signup_validate" action="{{ route('register') }}">
           							@csrf
                                    <div class="mb-3">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="username" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="hello@example.com"
                                            name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-success btn-block">Registrar</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>¿Ya tienes una cuenta? <a class="text-primary" href="{{ url('login') }}">Inicia sesión</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--removeIf(production)-->
        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">
            <a class="sidebar-right-trigger" href="javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <div class="admin-settings">
                    <div class="opt-background">
                        <p>Font Family</p>
                        <select class="form-control" name="theme_font" id="theme_font">
                            <option value="nunito">Nunito</option>
                            <option value="opensans">Open Sans</option>

                        </select>
                    </div>
                    <div>
                        <p>Primary Color</p>
                        <div class="opt-nav-header-color">
                            <span>
                                <input type="radio" name="navigation_header" value="color_1"
                                    class="filled-in chk-col-primary" id="nav_header_color_1" />
                                <label for="nav_header_color_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_2"
                                    class="filled-in chk-col-primary" id="nav_header_color_2" />
                                <label for="nav_header_color_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_3"
                                    class="filled-in chk-col-primary" id="nav_header_color_3" />
                                <label for="nav_header_color_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_4"
                                    class="filled-in chk-col-primary" id="nav_header_color_4" />
                                <label for="nav_header_color_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_5"
                                    class="filled-in chk-col-primary" id="nav_header_color_5" />
                                <label for="nav_header_color_5"></label>
                            </span>
                        </div>
                    </div>
                    <div class="opt-header-color">
                        <p>Background Color</p>
                        <div>
                            <span>
                                <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary"
                                    id="header_color_1">
                                <label for="header_color_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary"
                                    id="header_color_2">
                                <label for="header_color_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary"
                                    id="header_color_3">
                                <label for="header_color_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary"
                                    id="header_color_4">
                                <label for="header_color_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary"
                                    id="header_color_5">
                                <label for="header_color_5"></label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>