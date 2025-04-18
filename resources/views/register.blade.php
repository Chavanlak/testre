<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome (ถ้ายังใช้) -->
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
/>
<!-- Material Design Icons -->
<link
href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css"
rel="stylesheet"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
<link
href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;500;600;700&display=swap"rel="stylesheet"/>
  <title>register</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome CDN link for icons -->
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" /> --}}
 
  <style>
    /* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
    @import url("https://fonts.googleapis.com/css?family=Fira+Sans"); */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  display: flex;
  align-items: center;
  justify-content: center;
  /* width: 640; */
  height: 100vh;
  padding: 15px;
  /* background: #d0ebff; */
  background-image: url(images/bg1.jpg);
  background-size: cover; /* ขยายภาพให้เต็มพื้นที่ โดยรักษาสัดส่วน */
  background-repeat: no-repeat;
  background-position: center;
  overflow: hidden;
  font-family: "Noto Sans Thai", sans-serif;
}
.wrapper {
  /* max-width: 500px; */
  max-width: 360px;
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
}
.wrapper .title {
  height: 100px; /* ลดจาก 120px */
  background: #5aaeec;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 24px; /* ลดจาก 30px */
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Noto Sans Thai", sans-serif;
}
.wrapper form {
  /* padding: 25px 35px; */
  padding: 20px 25px; /* ลด padding */
}
.wrapper form .row {
  height: 50px; /* ลดจาก 60px */
  margin-top: 15px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input {
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
  margin-bottom: 10px;
}
form .row input:focus {
  border-color: #5aaeec;
}
form .row input::placeholder {
  color: #999;
}
.wrapper form .row i {
  position: absolute;
  width: 45px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #5aaeec;
  border: 1px solid #5aaeec;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass {
  margin-top: 12px 0;
}
.wrapper form .pass a {
  color: #5aaeec;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover {
  text-decoration: underline;
}
.wrapper form .button input {
  margin-top: 20px;

  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #5aaeec;
  border: 1px solid #5aaeec;
  cursor: pointer;
}
.wrapper form .row select {
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
  color: #555;
  appearance: none; /* ซ่อนลูกศร dropdown (optionally) */
  background-color: #fff;
}

form .button input:hover {
  background: #5aaeec;
}

  </style>
</head>
<body>
  <div class="wrapper">
    <div class="title"><span>ลงทะเบียนผู้ใช้</span></div>
    <form action="/registerpost" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <i class="fas fa-user"></i>
        {{-- <input type="text" placeholder="Email or Phone" required /> --}}
        <input type="text" placeholder="ชื่อจริง" name="firstname" required />
      </div>
      <div class="row">
        <i class="fas fa-user"></i>
        {{-- <input type="text" placeholder="Email or Phone" required /> --}}
        <input type="text" placeholder="นามสกุล" name="lastname" required />
      </div>
      <div class="row">
        <i class="fas fa-user"></i>
        {{-- <input type="text" placeholder="Email or Phone" required /> --}}
        <input type="text" placeholder="เเผนก" name="department"required />
      </div>
      <div class="row">
        <i class="mdi mdi-account-box"></i>
        {{-- <input type="text" placeholder="Email or Phone" required /> --}}
        <input type="text" placeholder="รหัสพนักงาน" name="username" required />
      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        {{-- <input type="text" placeholder="Email or Phone" required /> --}}
        <input type="text" placeholder="รหัสผ่าน" name="password" required />
      </div>
      <div class="row">
        <i class="mdi mdi-phone text-primary"></i>
        {{-- <input type="text" placeholder="Email or Phone" required /> --}}
        <input type="text" placeholder="เบอร์โทรติดต่อ" name="phone" required />
      </div>
      {{-- <div class="row">
     

        <select name="userType" id="">
          <option value="" disabled selected>ประเภทผู้ใช้</option>
          <option value="admin">Admin</option>
          <option value="member">Member</option>
        </select>
      </div> --}}
     
      {{-- <div class="pass"><a href="#">Forgot password?</a></div> --}}
      <div class="row button">
        <input type="submit" value="ลงทะเบียน" />
      </div>

    </form>
  </div>
</body>
</html>