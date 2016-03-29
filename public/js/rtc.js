//global variables
var pc1 = new RTCPeerConnection();
var pc2 = new RTCPeerConnection();
var stream;
var video1;
var video2;

var errorCallBack = function(e){
	console.log(e);
}

//checks if browser supports getUserMedia()
function hasGetUserMedia() {
  return !!(navigator.getUserMedia || navigator.webkitGetUserMedia ||
            navigator.mozGetUserMedia || navigator.msGetUserMedia);
}

//check if browser supports getUserMedia
if (hasGetUserMedia()) {
  //here will be the code
  navigator.getUserMedia({video:true},function(stream){
  	
  	pc1.addStream(stream);
  	pc1.createOffer(gotDescription1);

  	

  },errorCallBack);
  
  	function gotDescription1(desc){
  		pc1.setLocalDescription(desc);
  		trace("Offer from pc1 \n" + desc.sdp);
  		pc2.setRemoteDescription(desc);
  		pc2.createAnswer(gotDescription2);
	}
	function gotDescription2(desc){
  		pc2.setLocalDescription(desc);
  		trace("Offer from pc1 \n" + desc.sdp);
  		pc1.setRemoteDescription(desc);
  		pc1.createAnswer(gotDescription1);
	}

} else {
  alert('getUserMedia() is not supported in your browser');
}
