Hello <span style="color:red; font-weight:bold;">{{$email_data['name']}}</span>
<br><br>
Welcome to my Website!
<br>
<span style="color:green; font-weight:bold;">
Please click the below link to verify your email and activate your account!
</span>
<br><br>
<span style="font-weight:bold;">
<!-- can change link url according your project  -->
<a href="http://127.0.0.1:8000/verify?code={{$email_data['verification_code']}}" >Click Here!</a>
</spna>

<br><br>
Thank you! <br>
Regards <br>
<a href="https://amankhalsa.in" target="_blank">AmanKhalsa</a>
<br>
