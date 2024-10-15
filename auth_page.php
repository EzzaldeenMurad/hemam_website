<!-- ------------------- Login Modal ------------------------ -->
<div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <div class="login-heading">
                    <h5 class="modal-title mb-2" id="loginModalLabel">Login</h5>
                    <p>Don't have account <a href="user_signup.html" data-bs-toggle="modal" data-bs-target="#userSignUpModal">Create Account</a></p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closeButton"></button>
            </div>
            <form action="php/login.php" method="post">
                <div class="modal-body">
                    <div class="gender">
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="user" id="user" value="user" checked>
                            <label class="form-check-label" for="user">
                                user
                            </label>
                        </div>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="country" id="country" value="country">
                            <label class="form-check-label" for="country">
                                country
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" value="remember">
                        <label class="form-check-label" for="remember">
                            Remember me check
                        </label>
                    </div>
                    <script>
                        var country = document.getElementById('country');
                        var user = document.getElementById('user');
                        country.addEventListener("click", function() {
                            country.checked = true;
                            user.checked = false;
                        });
                        user.addEventListener("click", function() {
                            user.checked = true;
                            country.checked = false;
                        });
                    </script>
                </div>
                <div class="modal-footer">
                    <a href="index.php" data-bs-toggle="modal" data-bs-target="#forgetPasswordModal">Forget you password?</a>
                    <div class="blue-button w-auto ms-5">
                        <button type="submit" class="">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





<!-- ----------------- Forget Password Modal ------------------------- -->
<div class="modal fade" id="forgetPasswordModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <div class="section-heading mb-0">
                    <h5 class="modal-title mb-2" id="loginModalLabel">Forgot Password</h5>
                    <p>Go back to <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Sign In</a></p>
                    <p>Don't have account <a href="user_signup.html" data-bs-toggle="modal" data-bs-target="#userSignUpModal">Create Account</a></p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closeButton"></button>
            </div>
            <div class="modal-body">
                <div class="forget-password">
                    <div class="container">
                        <!-- <h2 class="text-center">Forgot Password</h2> -->
                        <form class="d-grid">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 ">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--         sign up user             -->

<div class="modal fade" id="userSignUpModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">User Sign up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/user_signup.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="first-name" class="col-form-label">First Name:</label>
                                    <input type="text" name="firstName" class="form-control" id="first-name">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="last-name" class="col-form-label">Last Name:</label>
                                    <input type="text" name="lastName" class="form-control" id="last-name">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="phone-number" class="col-form-label">Phone Number:</label>
                                    <div class="content-phone">
                                        <select name="countryCode" id="country-code" class="form-control country-code">
                                            <option value="+966" selected>+966</option>
                                        </select>
                                        <input type="text" name="phoneNumber" class="form-control" id="phone-number">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Confirm Password:</label>
                                    <input type="password" name="confirmPassword" class="form-control" id="password">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="birth-date" class="col-form-label">birth Date:</label>
                                    <input type="date" name="birthDate" class="form-control" id="birth-date">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="national-id" class="col-form-label">National Id:</label>
                                    <input type="text" name="nationalId" class="form-control" id="national-id">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">City:</label>
                                    <select name="city" id="city" class="form-select">
                                        <option value="Mecca">Mecca</option>
                                        <option value="Riyadh">Riyadh</option>
                                        <option value="Jeddah">Jeddah</option>
                                        <option value="Dammam">Dammam</option>
                                        <option value="Madinah">Madinah</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="province" class="col-form-label">provinces:</label>
                                    <select name="province" id="province" class="form-select">
                                        <option value="Mobility">Mobility disability</option>
                                        <option value="Mobility">سمعية</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-group ">
                                    <label for="street" class="col-form-label">street:</label>
                                    <input type="text" class="form-control" name="street" id="street">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="qualification" class="col-form-label">qualification:</label>
                                    <div class="content-phone">
                                        <select name="qualification" id="qualification" class="form-select">
                                            <option>ثانوي</option>
                                            <option>دبلوم</option>
                                            <option>بكالوريوس</option>
                                            <option>ماجستير</option>
                                            <option>دكتوراه</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="birth-date" class="col-form-label">gender:</label>
                                <div class="gender">
                                    <div class="form-group">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="certificate" class="col-form-label">issue disability
                                        certificate:</label>
                                    <input type="file" accept=".pdf" name="pdfFile" class="form-control" id="certificate">
                                </div>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="modal-footer">
                    <div class="blue-button w-auto me-3">
                        <button type="submit" name="signup">Sign up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!--         sign up company             -->

<div class="modal fade" id="companySignUpModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Company Sign up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="php/company_signup.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="company-name" class="col-form-label">Company Name:</label>
                                    <input type="text" name="companyName" class="form-control" id="company-name">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="confirm-password" class="col-form-label">Confirm Password:</label>
                                    <input type="password" name="ConfirmPassword" class="form-control" id="confirm-password">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="phone-number" class="col-form-label">Phone Number:</label>
                                    <div class="content-phone">
                                        <select name="countryCode" id="country-code" class="form-control country-code">
                                            <option value="+966" selected>+966</option>
                                        </select>
                                        <input type="text" name="phoneNumber" class="form-control" id="phone-number">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="industry" class="col-form-label">industry</label>
                                    <select name="industry" id="industry" class="form-select">
                                        <option value="it">IT</option>
                                        <option value="law">Law</option>
                                        <option value="finance">Finance</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="city" class="col-form-label">City:</label>
                                    <select name="city" id="city" class="form-select">
                                        <option value="Mecca">Mecca</option>
                                        <option value="Riyadh">Riyadh</option>
                                        <option value="Jeddah">Jeddah</option>
                                        <option value="Dammam">Dammam</option>
                                        <option value="Madinah">Madinah</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="province" class="col-form-label">provinces:</label>
                                    <select name="province" id="province" class="form-select">
                                        <option value="Mobility">Mobility disability</option>
                                        <option value="Mobility">سمعية</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="mowama-certificate" class="col-form-label">issurance mowama
                                        certificate:</label>
                                    <input type="file" name="pdfFile" class="form-control" id="mowama-certificate">
                                </div>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="modal-footer">
                    <div class="blue-button w-auto me-3">
                        <button type="submit" name="signup">Sign up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>