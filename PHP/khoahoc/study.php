<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
		<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
		<!-- Or if you want a more recent canary version -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/hls.js@canary"></script> -->
		<video id="video"></video>
		<script>
		  var video = document.getElementById('video');
		  if(Hls.isSupported()) {
			var hls = new Hls();
			hls.loadSource('https://video-dev.github.io/streams/x36xhzz/x36xhzz.m3u8');
			hls.attachMedia(video);
			hls.on(Hls.Events.MANIFEST_PARSED,function() {
			  video.play();
		  });
		 }
		 // hls.js is not supported on platforms that do not have Media Source Extensions (MSE) enabled.
		 // When the browser has built-in HLS support (check using `canPlayType`), we can provide an HLS manifest (i.e. .m3u8 URL) directly to the video element throught the `src` property.
		 // This is using the built-in support of the plain video element, without using hls.js.
		 // Note: it would be more normal to wait on the 'canplay' event below however on Safari (where you are most likely to find built-in HLS support) the video.src URL must be on the user-driven
		 // white-list before a 'canplay' event will be emitted; the last video event that can be reliably listened-for when the URL is not on the white-list is 'loadedmetadata'.
		  else if (video.canPlayType('application/vnd.apple.mpegurl')) {
			video.src = 'https://video-dev.github.io/streams/x36xhzz/x36xhzz.m3u8';
			video.addEventListener('loadedmetadata',function() {
			  video.play();
			});
		  }
		</script>

	<script src="./study_files/custom.js.tải xuống"></script>
	<script src="./study_files/bootstrap.js.tải xuống"></script>
	<script src="./study_files/dash.js.tải xuống"></script>
	<script src="./study_files/modernizr.js.tải xuống"></script>
	<script src="./study_files/player.js.tải xuống"></script>
	<script src="./study_files/socket.io.js.tải xuống"></script>
	<script src="./study_files/connection.js.tải xuống"></script>
	<script src="./study_files/hls1.js.tải xuống"></script>
</body>
</html>