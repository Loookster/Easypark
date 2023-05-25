<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slot Status</title>
    <style>
        body {
            background-image: url('1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
                }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center; 
            margin-top: -40px;
        }
        

        }
        .parking-container {
          margin:auto;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          overflow:hidden;
          
        }
        
        .parking-slots {
          text-align: center;
          font-weight: bold;
          color: #fff;
          margin-top: -10vh;
          margin-bottom: 5vh;
          font-size: 40px;
          font-family: 'Noto Sans JP', sans-serif;
        }
        
       
        .slots-container {
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
          margin-top: 5%;
          margin:auto;
          height:30vh; 
          width:50%;
          margin-bottom: 5vh;
          background-color:white;
          border-radius:30px;
        }
        
        
        .slot-row {
          display: flex;
          align-items: center;
          justify-content: space-between;
          width: 400px;
          margin-bottom: 8px;
          padding: 8px;
          background-color: #fff;
          border-radius: 4px;
          box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
          
        }
        
        .slot-name {
          font-size: 24px;
          font-weight: bold;
          color: #000;
        }
        
        .status-div {
          font-size: 20px;
          font-weight: bold;
          text-align: center;
          border: 2px solid #000;
          border-radius: 16px;
          padding: 8px;
        }
        
        .status-free {
          background-color: green;
          color: #fff;
        }
        
        .status-taken {
          background-color: red;
          color: #fff;
        }
       .container {
          position: fixed; 
          left: 0; 
          right: 0; 
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top: 5vh;
          flex-direction: column;
          margin-bottom: 8rem;
        }
        
        .button {
          display: inline-block;
          padding: 1rem 2rem;
          margin: 0.5rem;
          text-align: center;
          text-decoration: none;
          font-size: 18px;
          font-weight: bold;
          border: none;
          cursor: pointer;
          border-radius: 30px;
          max-width: 10000px;
          width: 40%;
          background-color: #fff;
          color: #000;
        }
        
        .button:hover {
          opacity: 0.8;
        }
        
        .button:active {
          transform: scale(0.98);
        }

        @media (max-width: 767px){
           .parking-slots{
               font-size:3vh;
               margin-bottom:5%;
           }
           .slots-container {
              display: flex;
              justify-content: center;
              flex-wrap: wrap;
              margin-top: 5%;
              margin:auto;
              height:63vh; 
              width:80%;
              margin-bottom: 5vh;
              overflow:hidden;
            }
            .header-container {
              display: flex;
              justify-content: space-between;
              align-items: center; 
              margin-top: -70px;
            }
            .container {
              position: fixed; 
              left: 0; 
              right: 0; 
              display: flex;
              justify-content: center;
              align-items: center;
              margin-top: -5vh;
              flex-direction: column;
              margin-bottom: 8rem;
              overflow:hidden;
            }
       }
        


    </style>
</head>
<body>
    <div class="header-container">
        <div class="logo-container">
            <div style="text-align: center;">
                <img src="EASYPAHABA.png" alt="Logo" width="250">
            </div>
        </div>
    </div>
    
        <div class="parking-container">
  <div class="parking-slots">Parking Slots</div>
  </div>
  <div class="slots-container" id="slot-container">
    <iframe allowtransparency=true frameborder=0 id=rf sandbox="allow-same-origin allow-forms allow-scripts" src="https://carparking-2b2cf.web.app" style="width:100%;height:100%;overflow:hidden;"></iframe>
  </div>
<div class="container">
  <a href="<?= base_url('public/UserDashboard'); ?>" class="button">Back</a>
</div>


  
</body>

</html>
