<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="/style/styles/Login-Regis.css">
	<link rel="stylesheet" href="/style/Bootstrap/css/bootstrap.min.css">
</head>
<body>
    
    <div class="area">
        <div class="Login-Regis" id="Regis">
            <div class="form" id="Regis">
                <h1>Registration</h1>
                <form action="{{route('groups.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(session('status'))
                    <div class="alert alert-success">
                    {{session('status')}}
                    </div>
                    @endif
                    <div class="sec">
                        <h3>Leader</h3>
                        <div class="form-col">
                            <div class="form-left">
                                <div class=" form-group">
                                    <!-- Leader Full Name -->
                                    <label for="validationDefault05">Full Name</label>
                                    <input name="name" type="text" class="form-control" id="validationDefault05" placeholder="Full Name" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Leader Email -->
                                    <label for="validationDefault06 inputEmail2">Email</label>
                                    <input name="email" type="email" class="form-control" id="validationDefault07 InputEmail2" placeholder="Email" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Leader Address -->
                                    <label for="validationDefault07">Address</label>
                                    <input name="address" type="text" class="form-control" id="validationDefault07" placeholder="Address" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Leader Phone Number -->
                                    <label for="validationDefault08">Phone Number</label>
                                    <input name="phone" type="tel" class="form-control validationDefault08" placeholder="Phone Number" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Leader Git ID -->
                                    <label for="validationDefault09">Git ID</label>
                                    <input name="git" type="text" class="form-control" id="validationDefault09" placeholder="Git ID" required>
                                </div>
                            </div>
                            <div class="form-right">
                                <div class=" form-group">
                                    <!-- Leader Line ID -->
                                    <label for="validationDefault10">Line ID</label>
                                    <input name="line" type="text" class="form-control" id="validationDefault10" placeholder="Line ID" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Leader DOB -->
                                    <label for="validationDefault11">Date of Birth</label>
                                    <input name="dob" type="text" class="form-control" onfocus="(this.type='date')"id="validationDefault11" placeholder="Date of Birth" required>
                                </div>
                                <div class="form-group input-group">
                                    <!-- Leader Test -->
                                    <div class="custom-file">
                                    <input name="score" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your Test Result</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <!-- Leader Test -->
                                    <div class="custom-file">
                                    <input name="ktp" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your ID Card</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <!-- Leader Test -->
                                    <div class="custom-file">
                                    <input name="cv" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your CV</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sec">
                        <h3>Member 1</h3>
                        <div class="form-col">
                            <div class="form-left">
                                <div class=" form-group">
                                    <!-- Member1 Full Name -->
                                    <label for="validationDefault12">Full Name</label>
                                    <input name="name1" type="text" class="form-control" id="validationDefault12" placeholder="Full Name" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 Email -->
                                    <label for="validationDefault13 inputEmail3">Email</label>
                                    <input name="email1" type="email" class="form-control" id="validationDefault13 InputEmail3" placeholder="Email" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 Address -->
                                    <label for="validationDefault14">Address</label>
                                    <input name="address1" type="text" class="form-control" id="validationDefault14" placeholder="Address" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 Phone Number -->
                                    <label for="validationDefault15">Phone Number</label>
                                    <input name="phone1" type="tel" class="form-control validationDefault15" placeholder="Phone Number" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 Git ID -->
                                    <label for="validationDefault16">Git ID</label>
                                    <input name="git1" type="text" class="form-control" id="validationDefault16" placeholder="Git ID" required>
                                </div>
                            </div>
                            <div class="form-right">
                                <div class=" form-group">
                                    <!-- Member1 Line ID -->
                                    <label for="validationDefault17">Line ID</label>
                                    <input name="line1" type="text" class="form-control" id="validationDefault17" placeholder="Line ID" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member1 DOB -->
                                    <label for="validationDefault19">Date of Birth</label>
                                    <input name="dob1" type="text" class="form-control" onfocus="(this.type='date')"id="validationDefault19" placeholder="Date of Birth" required>
                                </div>
                                <div class="form-group input-group">
                                    <!-- Leader Test -->
                                    <div class="custom-file">
                                    <input name="score1" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your Test Result</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <!-- Leader Test -->
                                    <div class="custom-file">
                                    <input name="ktp1" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your ID Card</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <!-- Leader Test -->
                                    <div class="custom-file">
                                    <input name="cv1" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your CV</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sec">
                        <h3>Member 2</h3>
                        <div class="form-col">
                            <div class="form-left">
                                <div class=" form-group">
                                    <!-- Member2 Full Name -->
                                    <label for="validationDefault20">Full Name</label>
                                    <input name="name2" type="text" class="form-control" id="validationDefault20" placeholder="Full Name" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 Email -->
                                    <label for="validationDefault21 inputEmail4">Email</label>
                                    <input name="email2" type="email" class="form-control" id="validationDefault21 InputEmail4" placeholder="Email" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 Address -->
                                    <label for="validationDefault22">Address</label>
                                    <input name="address2" type="text" class="form-control" id="validationDefault22" placeholder="Address" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 Phone Number -->
                                    <label for="validationDefault23">Phone Number</label>
                                    <input name="phone2" type="tel" class="form-control validationDefault24" placeholder="Phone Number" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 Git ID -->
                                    <label for="validationDefault25">Git ID</label>
                                    <input name="git2" type="text" class="form-control" id="validationDefault25" placeholder="Git ID" required>
                                </div>
                            </div>
                            <div class="form-right">
                                <div class=" form-group">
                                    <!-- Member2 Line ID -->
                                    <label for="validationDefault26">Line ID</label>
                                    <input name="line2" type="text" class="form-control" id="validationDefault26" placeholder="Line ID" required>
                                </div>
                                <div class=" form-group">
                                    <!-- Member2 DOB -->
                                    <label for="validationDefault28">Date of Birth</label>
                                    <input name="dob2" type="text" class="form-control" onfocus="(this.type='date')"id="validationDefault28" placeholder="Date of Birth" required>
                                </div>
                                <div class="form-group input-group">
                                    <!-- Leader Test -->
                                    <div class="custom-file">
                                    <input name="score2" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your Test Result</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <!-- Leader Test -->
                                    <div class="custom-file">
                                    <input name="ktp2" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your ID Card</label>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <!-- Leader Test -->
                                    <div class="custom-file">
                                    <input name="cv2" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                    <label class="custom-file-label" for="inputGroupFile01">Upload your CV</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub">
                        <div class="extra" id="Regis">
                            <img src="/style/assets/SignUp.png" alt="">
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <a href="login">Already have an account ?</a> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="jquery.js"></script>
</body>
</html>