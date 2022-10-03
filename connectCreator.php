<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOLStudy</title>
    <link rel="icon" href="images/logo.webp">

    <!-- update the version number as needed -->
    <script defer src="/__/firebase/9.8.3/firebase-app-compat.js"></script>
    <!-- include only the Firebase features as you need -->
    <script defer src="/__/firebase/9.8.3/firebase-auth-compat.js"></script>
    <script defer src="/__/firebase/9.8.3/firebase-database-compat.js"></script>
    <script defer src="/__/firebase/9.8.3/firebase-firestore-compat.js"></script>
    <script defer src="/__/firebase/9.8.3/firebase-functions-compat.js"></script>
    <script defer src="/__/firebase/9.8.3/firebase-messaging-compat.js"></script>
    <script defer src="/__/firebase/9.8.3/firebase-storage-compat.js"></script>
    <script defer src="/__/firebase/9.8.3/firebase-analytics-compat.js"></script>
    <script defer src="/__/firebase/9.8.3/firebase-remote-config-compat.js"></script>
    <script defer src="/__/firebase/9.8.3/firebase-performance-compat.js"></script>
    <!-- 
      initialize the SDK after all desired features are loaded, set useEmulator to false
      to avoid connecting the SDK to running emulators.
    -->
    <script defer src="/__/firebase/init.js?useEmulator=true"></script>

    <style>
              *{
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: sans-serif;
    box-sizing: border-box;
  }
  
  body{
    min-height: 100vh;
    background-image: linear-gradient(120deg,#3498db,#8e44ad);
  }
  
  .login-form{
    width: 360px;
    background: #f1f1f1;
    height: 580px;
    padding: 50px 40px;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
  }
  
  .login-form h1{
    text-align: center;
    margin-bottom: 20px;
  }
  
  .txtb{
    position: relative;
  }
  
  .txtb input{
    font-size: 15px;
    color: #333;
    border: none;
    width: 100%;
    outline: none;
    padding: 0 5px;
    height: 40px;

  }

  
  .txtb span::before{
    content: attr(data-placeholder);
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    z-index: -1;
    transition: .5s;
  }
  
  .txtb span::after{
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    transition: .5s;
  }
  
  .focus + span::before{
    top: -5px;
  }
  .focus + span::after{
    width: 100%;
  }
  
  .logbtn{
    display: block;
    width: 100%;
    height: 50px;
    border: none;
    background: linear-gradient(120deg,#3498db,#8e44ad,#3498db);
    background-size: 200%;
    color: #fff;
    outline: none;
    cursor: pointer;
    transition: .5s;
  }
  
  .logbtn:hover{
    background-position: right;
  }
  
  .bottom-text{
    margin-top: 60px;
    text-align: center;
    font-size: 13px;
  }

  .custom-select select{
    margin-bottom: 20px;
    border-radius: 20px;
  }

  .login-form video {
  height: 250px;
  width: 250px;
  display:none;
}

.preview video{
  float: right;
}

.ig_li{
  border: 1.7px solid #333;
  border-radius: 5px;
  height: 23px;
  margin-bottom: 15px;
}

    </style>
  </head>
  <body>

    <form action="upload.php" method="post" enctype="multipart/form-data" name="Creator Submission">
      <div class="custom-select">
        Grade: <select name="grade" id="grade">
          <option value="none" selected="selected">Select a grade</option>
          <option value="grade_11">11</option>
        </select>
      </div>

      <div class="custom-select">
        Page: <select name="page" id="page">
          <option value="none" selected="selected">Select a page</option>
          <option value="page_10">page 10</option>

        </select>
      </div>

      <div class="custom-select">
        Class: <select name="class" id="class">
          <option value="none" selected="selected">Select a class</option>
          <option value="history">history</option>

        </select>
      </div>





              <div class="txtb">
          <input type="file" id="file-ip-1" name="file-ip-1" accept="video/mp4">
        </div>


        <div class="preview">
          <video id="file-ip-1-preview" src="">
        </div>


      <input type="submit" value="Publish" name="submit">
  </form>

    
    <script src="connectCreator.js"></script>
  </body>
</html>
