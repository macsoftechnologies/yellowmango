<html>
  <head>
    <title>Scanner</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="css/camstyle.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="instascan.min.js"></script>
	<script src="js/jquery3.6.min.js"></script>
	
  </head>
  <body>

    <div id="app">
		
      <div class="preview-container">
        <span v-if="cameras.length === 0" class="empty"> No cameras found </span> <br/>
		
        <video id="preview" style="width:97%;margin-bottom:20px;"></video>
		
        <section class="scans" style="color:white;width:100%;margin:20px 0px padding:10px 10px;">
          <h2 style="padding:0px 15px;color:red;">Scans</h2>
          <ul v-if="scans.length === 0">
            <li class="empty">No scans yet</li>
          </ul>
          <transition-group name="scans" tag="ul">
            <li v-for="scan in scans" :key="scan.date" :title="scan.content">
			{{ scan.content }}</li>
          </transition-group>
        </section>
		
      </div>
    </div>
    <script type="text/javascript" src="app.js"></script>
  </body>
</html>
