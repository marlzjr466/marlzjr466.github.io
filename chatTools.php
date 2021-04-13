<?php 
	header ("Access-Control-Allow-Origin: *");
	header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
	header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
	header ("Access-Control-Allow-Headers: *");
?>

<style>
    :root {

  --chat-container-bottom: 30px;
  --chat-container-right: 40px;
  --chat-container-left: 40px;
  
  --chat-container-top: 50%;
  --chat-container-left: 40px;
  --chat-container-marginTop: -30px;
  --chat-container-right: 40px;
  
  --send-message-container-marginTop: 20px;
  --send-message-container1-marginTop: 20px;

  --chat-btn-width: 65px;
  --chat-btn-height: 60px;
  --chat-btn-img-scale: scale(1.27);
  --chat-btn-active: scale(.95);
  
  --otherChatBtn-width: 150px;
  --otherChatBtn-height: 40px;
  --otherChatBtn-border: 30px;

  --chat-box-radius: 15px;
  --chat-box-border: 7px solid #5fcd8c;
  --chat-container-width: 335px;
  --chat-container-height: 550px;

  --chatView-minimize-width: 30px;
  --chatView-minimize-height: 15px;
  --chatView-minimize-margin: 45px 0 0 15px;
  --chatView-agentImg-size: 60px;
  --chatView-agentImg-margin: 20px 20px 0 15px;
  --chatView-agentName-fSize: 18px;
  --chatView-agentName-margin: 30px 0 0 0;
  --chatView-agentPos-fSize: 11px;
  --chatView-agentPos-marginTop: -5px;
  --chatView-message-fSize: 13px;
  --chatView-textarea-height: 30px;
  --chatView-textarea-fSize: 15px;
  --chatView-button-width: 90px;
  --chatView-button-height: 30px;
  --chatView-button-fSize: 14px;
  --chatView-button-margin: 0 20px 15px 30px;
  --chatView-textarea-margin: 10px 0 0 5%;
  --chatView-message-border: 15px;
  --chatView-icon-size: 15px;
  --chatView-icon-margin: 5px;
  --chatView-message-padding: 15px;
  --chatView-arrow-width: 15px;
  --chatView-arrow-height: 25px; 
  --chatView-message-margin: 0 0 0px -1px;
  --chatView-message-margin2: 0 -1px 0 0;
  --chatView-li-marginTop: 5px;

  --closeChat-btn-size: 16px;
  --closeChat-btn-marginTop: -471px;
  --closeChat-toolTip-fSize: 11px;
  --closeChat-toolTip-padding: 3px 6px;
  --closeChat-toolTip-margin: -466px 20px 0 0;

  --closePopup-height: 120%;
  --closePopup-marginTop: -580px;
  --closePopup-panel-height: 100px;
  --closePopup-panel-margin: 200px 0 0 10%;
  --closePopup-fSize: 12px;
  --closePopup-p-padding: 25px 0 15px 0;
  --closePopup-button-padding: 3px 0;
  --closePopup-button-width: 50px;
  
  --endPopup-panel-padding: 10px 0 12px 0;
  --endPopup-p-margin: 0 0 10px 5%;
  --endPopup-p-indent: 15px

  --animation-from-height: 0px;
  --animation-to-height: 550px;

  --animation-from-width: 0px;
  --animation-to-width: 335px;

  --animation-from-height2: 550px;
  --animation-to-height2: 0px;

  --animation-from-width2: 335px;
  --animation-to-width2: 0px;

  --minimize-btn-width: 50px;
  --minimize-btn-height: 25px;
  --minimize-btn-padding: 7px;
  --minimize-btn-scale: scale(.95);

  --h5-margin: 200px;
  --agent-panel-height: 220px;
  --agent-panel-margin: -105px auto;
  --h5-font-size: 14px;

  --minimize-margin: 30px;
  --agent-tl-radius: 15px;
  --agent-tr-radius: 15px;
  --agent-shadow: 0px -12px 15px -5px rgba(68,68,68,.3);
  --agent-image-width: 60px;
  --agent-image-height: 60px;

  --image-container-margin: -30px;

  --message-panel-height: 200px;
  --message-panel-margin: 60px;

  --agent-p-size: 15px;
  --agent-p-padding: 35px 0px 0px 0px;

  --chat-icon-width: 40px;
  --chat-icon-height: 40px;
  --chat-icon-margin: 0px auto;

  --client-form-padding: 15px;
  --client-form-input: 25px;
  --client-form-fsize: 12px;
  --client-form-bradius: 15px;
  --client-form-margin: 0px;
  --client-form-indent: 15px;
  --client-form-border: 1px solid rgba(0,0,0,.2);

  --message-button-height: 30px;
  --message-button-width: 90px;
  --message-button-radius: 15px;
  --message-button-fsize: 12px;
  --message-button-margin: 30px 20px;

  --message-panel-p: 11px;
  
  --waiting-height: 65px;
  --waiting-marginTop: 0;
  --waiting-loader-width: 80px;
  --waiting-loader-height: 40px;
  --waiting-loader-marginTop: -22px;
  
  --concernBTN-margin: 40px 5% 0 0;
  
  --chatView-header-height: 100px;
  --conversationPanel-height: 355px;
  --send-message-container-height: 100px;
  
  --client-info-form-height: 30px !important;
  --client-info-form-padding: 0 !important;
}

/* On screens that are 980px wide or less */
@media screen and (max-width: 980px) {

	.chat-tool-container { transform: scale(.9);}

}

/* On screens that are 480px wide or less */
@media screen and (max-width: 480px) {

	:root {
	  --chat-container-bottom: 0px;
	  --chat-container-right: 0px;
      --chat-container-left: 20px;
      
      --send-message-container1-marginTop: 0px;
      
      --chat-container-marginTop: 0;

	  --chat-btn-width: 41px;
	  --chat-btn-height: 40px;
	  --chat-btn-img-scale: scale(1.27);
	  --chat-btn-active: scale(.95);
	  
	  --otherChatBtn-width: 130px;
      --otherChatBtn-height: 35px;
      --otherChatBtn-border: 25px;

	  --chat-box-radius: 0;
  	  --chat-box-border: 2px solid #5fcd8c !important;
	  --chat-container-width: 100vw;
	  --chat-container-height: 95vh;

	  --chatView-minimize-width: 25px;
	  --chatView-minimize-height: 12px;
	  --chatView-minimize-margin: 55px 0 0 12px;
	  --chatView-agentImg-size: 50px;
	  --chatView-agentImg-margin: 30px 20px 0 12px;
	  --chatView-agentName-fSize: 17px;
	  --chatView-agentName-margin: 40px 0 0 0;
	  --chatView-agentPos-fSize: 10px;
	  --chatView-agentPos-marginTop: -5px;
	  --chatView-message-fSize: 12px;
	  --chatView-textarea-height: 30px;
	  --chatView-textarea-fSize: 13px;
	  --chatView-button-width: 80px;
	  --chatView-button-height: 25px;
	  --chatView-button-fSize: 13px;
	  --chatView-button-margin: 5px 15px 10px 25px;
	  --chatView-textarea-margin: 10px 0 0 5%;
	  --chatView-message-border: 15px;
	  --chatView-icon-size: 15px;
	  --chatView-icon-margin: 5px;
	  --chatView-message-padding: 15px;
	  --chatView-arrow-width: 15px;
	  --chatView-arrow-height: 25px; 
	  --chatView-message-margin: 0 0 0px -1px;
	  --chatView-message-margin2: 0 -1px 0 0;
	  --chatView-li-marginTop: 5px;

	  --closeChat-btn-size: 15px;
	  --closeChat-btn-marginTop: -79vh;
	  --closeChat-toolTip-fSize: 11px;
	  --closeChat-toolTip-padding: 3px 6px;
	  --closeChat-toolTip-margin: -78vh 20px 0 0;

	  --closePopup-height: 120%;
	  --closePopup-marginTop: -100vh;
	  --closePopup-panel-height: 85px;
	  --closePopup-panel-margin: 35vh 0 0 10%;
	  --closePopup-fSize: 11px;
	  --closePopup-p-padding: 20px 0 10px 0;
	  --closePopup-button-padding: 2px 0;
	  --closePopup-button-width: 50px;

	  --animation-from-height: 0px;
	  --animation-to-height: 500px;

	  --animation-from-width: 0px;
	  --animation-to-width: 285px;

	  --animation-from-height2: 500px;
	  --animation-to-height2: 0px;

	  --animation-from-width2: 285px;
	  --animation-to-width2: 0px;

	  --minimize-btn-width: 45px;
	  --minimize-btn-height: 22px;
	  --minimize-btn-padding: 10px;
	  --minimize-btn-scale: scale(.95);

	  --h5-margin: 30vh;
	  --agent-panel-height: 42vh;
 	  --agent-panel-margin: -95px auto;
 	  --h5-font-size: 15px;

 	  --minimize-margin: 30px;
 	  --agent-tl-radius: 15px;
 	  --agent-tr-radius: 15px;
 	  --agent-shadow: 0px -12px 15px -5px rgba(68,68,68,.3);
	
      --agent-image-width: 50px;
  	  --agent-image-height: 50px;
 	  --image-container-margin: -25px;

 	  --message-panel-height: 180px;
  	  --message-panel-margin: 60px;

  	  --agent-p-size: 15px;
  	  --agent-p-padding:50px 0px 0px 0px;

	  --chat-icon-width: 35px;
	  --chat-icon-height: 30px;
	  --chat-icon-margin: 0px auto;

	  --client-form-padding: 5px;
	  --client-form-input: 23px;
	  --client-form-fsize: 11px;
	  --client-form-margin: 0px;
	  --client-form-bradius: 10px;

	  --message-button-height: 25px;
	  --message-button-width: 80px;
	  --message-button-radius: 15px;
	  --message-button-fsize: 11px;
	  --message-button-margin: 30px 20px;
	  --client-form-indent: 15px;
	  --client-form-border: 1px solid rgba(0,0,0,.2);

	  --message-panel-p: 10px;
	  
	  --waiting-height: 80px;
      --waiting-marginTop: 0;
      --waiting-loader-width: 80px;
      --waiting-loader-height: 40px;
      
      --concernBTN-margin: 20px 5% 0 0;
      
      --chatView-header-height: 20%;
      --conversationPanel-height: 63%;
  	  --send-message-container-height: 22%;
	}
	
	.chat-box-container {
	    left: 0; top: 0; width: 100vw; height: 100vh;
	}

}

@import url("https://fonts.googleapis.com/css?family=Allura|Raleway:200,300,400,500,600,700,800,900");
@import url('https://fonts.googleapis.com/css?family=Varela+Round&display=swap');
@import url('https://fonts.googleapis.com/css?family=Tomorrow&display=swap');
@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
@import url('https://fonts.googleapis.com/css?family=Hind&display=swap');

/* FLOAT */
.left { float: left; } 
.right { float: right; }
.center { margin: 0 auto; }


/* COLUMNS */
.my-column-1 { width: 100%; }
.my-column-2 { width: 50%; }
.my-column-3 { width: 33.33%; }
.my-column-4 { width: 25%; }
.my-column-5 { width: 20%; }
.my-column-10 { width: 10%; }
.my-column-75 { width: 75%; }


/* COLUMNS */
.my-row-1 { height: 100%; }
.my-row-2 { height: 50%; }
.my-row-3 { height: 33.33%; }
.my-row-4 { height: 25%; }
.my-row-5 { height: 20%; }
.my-row-10 { height: 10%; }
.my-row-75 { height: 75%; }


/* BACKGROUND COLORS */
.black { background: #000; }
.white { background: #fff; }
.red { background: red; }
.blue { background: blue; }
.light-green-1 {
	background: #f6fff6;
}


/* TEXT COLORS */
.c-black { color: #000; }
.c-white { color: #fff; }
.c-ash { color: #808184; }
.c-rogue { color: #ff9999; }
.c-darkrogue { color: #C69696; }
.c-brown { color: #7b5050; }

/* POSITIONS */
.pos-inline-block {
	position: inline-block;
} .pos-fixed {
	position: fixed;
}

/* CHAT TOOL */
@keyframes chatButtonShow {
	from {
		transform: scale(.2);
	} to {
		transform: scale(1);
	}
}

.other-chat-btn {
    width: var(--otherChatBtn-width);
    height: var(--otherChatBtn-height);
    border-radius: var(--otherChatBtn-border);
	cursor: pointer;
	box-shadow: 5px 5px 10px rgba(0,0,0,.2);
	animation: chatButtonShow .5s;
} .other-chat-btn img {
    width: 100%;
    height: 100%;
    transform: scaleY(1.25);
}.other-chat-btn:active {
	transform: var(--chat-btn-active);
}

.bottom-left {
    bottom: var(--chat-container-bottom);
	left: var(--chat-container-left);
} .bottom-right {
    bottom: var(--chat-container-bottom);
	right: var(--chat-container-right);
} .middle-left {
    top: 50%; transform: translateY(-50%);
	left: var(--chat-container-left);
} .middle-right {
    top: 50%; transform: translateY(-50%);
	right: var(--chat-container-right);
} .bar-view {
    bottom: 0; width: 100%; height: 50px; background: red;
}

.chat-tool-container {
	position: fixed; padding: 0; border: none;
} .chat-btn {
	width: var(--chat-btn-width);
	height: var(--chat-btn-height);
	cursor: pointer;
	box-shadow: 5px 5px 10px rgba(0,0,0,.2);
	animation: chatButtonShow .5s;
} .chat-btn img {
	width: 100%;
	height: 100%;
	transform: var(--chat-btn-img-scale);
} .chat-btn:active {
	transform: var(--chat-btn-active);
}

@keyframes chatBoxScale {
	from {
		transform: scaleY(0);
	} to {
		transform: scaleY(1);
	}
} @keyframes chatBoxScaleHide {
	from {
		transform: scaleY(1);
	} to {
		transform: scaleY(0);
	}
}

@keyframes chatBoxShow {
	from {
		height: var(--animation-from-height);
		width: var(--animation-from-width);
	} to {
		height: var(--animation-to-height);
		width: var(--animation-to-width);
	}
}

@keyframes chatBoxHide {
	from {
		height: var(--animation-from-height2);
		width: var(--animation-from-width2);
	} to {
		height: var(--animation-to-height2);
		width: var(--animation-to-width2);
	}
}

.chat-box-container {
	width: var(--chat-container-width);
	height: var(--chat-container-height);
	border-radius: var(--chat-box-radius);
	overflow: hidden;
	display: none;
	box-shadow: 3px 3px 5px rgba(0,0,0,.2);
	/*margin-left: -10px;*/
	background: #fff;
} .chat-first-view {
	width: 100%; height: 100%;
} .minimize-btn {
	width: var(--minimize-btn-width);
	height: var(--minimize-btn-height);
	padding-top: var(--minimize-btn-padding);
	cursor: pointer;
	margin-bottom: var(--minimize-margin);
} .minimize-btn img {
	width: 100%; height: 100%
} .minimize-btn:active {
	transform: var(--minimize-btn-scale);
} .chat-first-view h5 {
	margin-bottom: var(--h5-margin);
	font-size: var(--h5-font-size);
}

.agent-panel {
	width: 80%;
	height: var(--agent-panel-height);
	background: #fff;
	margin: var(--agent-panel-margin);
	border-top-left-radius: var(--agent-tl-radius);
	border-top-right-radius: var(--agent-tr-radius);
	/*transform: skewY(-25deg);*/
	box-shadow: var(--agent-shadow);
} .image-panel {
	width: var(--agent-image-width);
	height: var(--agent-image-height);
	margin: 0px auto;
	/*border-radius: 50%;*/
	overflow: hidden;
	transform: scale(1.5);
} .image-panel img {
	width: 100%; height: 100%;
} .image-container {
	width: 100%; float: left;
	margin-top: var(--image-container-margin);
} .agent-panel p {
	width: 80%;
	margin: 0 10%;
	text-align: center;
	font-size: var(--agent-p-size);
	padding: var(--agent-p-padding);
} .chat-icon {
	width: var(--chat-icon-width);
	height: var(--chat-icon-height);
	margin: var(--chat-icon-margin);
} .chat-icon img {
	width: 100%; height: 100%;
} .chat-icon svg {
	width: 100%; height: 100%;
}

.client-info-form {
	margin: 0 auto;
	width: 80%;
	padding-top: var(--client-form-padding);
} .client-info-form input {
	width: 100% !important;
	height: var(--client-form-input) !important;
	font-size: var(--client-form-fsize) !important;
	text-indent: var(--client-form-indent) !important;
	outline: none !important;
	margin-bottom: var(--client-form-margin) !important;
	border: var(--client-form-border) !important;
	border-radius: var(--client-form-bradius) !important;
	font-family: "Raleway", sans-serif !important;
}


.send-message-container1 textarea::-webkit-scrollbar {
    width: 0; height: 0;
} .send-message-container1 textarea::-webkit-scrollbar-track {

} .send-message-container1 textarea::-webkit-scrollbar-thumb {
  opacity: 0;
} .send-message-container1 textarea::-webkit-scrollbar-button {
   height: 0px;
}

.send-message-container1 {
	width: 100%;
	height: 24%;
	background: #fff;
	float: left;
	margin-top: var(--send-message-container1-marginTop);
} .send-message-container1 input {
	width: 55%;
	height: var(--chatView-textarea-height);
	float: left;
	outline: none;
	font-size: var(--chatView-textarea-fSize);
	border: none;
	margin: var(--chatView-textarea-margin);
	resize: none;
	border: 1px solid rgba(0,0,0,.1);
	border-radius: 20px;
	text-indent: 10px;
	font-size: 13px;
} .send-message-container1 button {
	float: right;
	outline: none; border: none;
	height: var(--chatView-button-height);
	border-radius: 15px;
	font-size: var(--chatView-button-fSize);
	width: var(--chatView-button-width);
	letter-spacing: 1px;
	/*margin: var(--chatView-button-margin);*/
	margin: 10px 5% 0 0;
} .send-message-container1 button:hover {
	opacity: .9;
} .send-message-container1 button:active {
	transform: scale(.95);
}


.message-panel {
	width: 100%;
	height: var(--message-panel-height);
	background: #fff;
	/*transform: skewY(-25deg);*/
	margin-top: var(--message-panel-margin);
} .message-panel p {
	width: 100%;
	text-align: center;
	font-size: var(--message-panel-p);
	line-height: 1.6;
}  

 .chat-offline-view {
	width: 100%; height: 100%; display: none;
} .chat-offline-view h5 {
	margin-bottom: var(--h5-margin);
	font-size: var(--h5-font-size);
}.send-message-container2 {
	width: 100%;
	height: 24%;
	background: #fff;
	float: left;
	margin-top: var(--send-message-container-marginTop);
} .send-message-container2 textarea {
	width: 62%;
	height: var(--chatView-textarea-height);
	float: left;
	outline: none;
	font-size: var(--chatView-textarea-fSize);
	border: none;
	margin: var(--chatView-textarea-margin);
	resize: none;
} .send-message-container2 button {
	float: right;
	outline: none; border: none;
	height: var(--chatView-button-height);
	border-radius: 15px;
	font-size: var(--chatView-button-fSize);
	width: var(--chatView-button-width);
	letter-spacing: 1px;
	/*margin: var(--concerBTN-margin);*/
	margin: var(--concernBTN-margin);
} .send-message-container2 button:hover {
	opacity: .9;
} .send-message-container2 button:active {
	transform: scale(.95);
}

.send-message-container1 textarea::-webkit-scrollbar {
    width: 0; height: 0;
} .send-message-container1 textarea::-webkit-scrollbar-track {

} .send-message-container1 textarea::-webkit-scrollbar-thumb {
  opacity: 0;
} .send-message-container1 textarea::-webkit-scrollbar-button {
   height: 0px;
}

.chat-view {
	width: 100%; height: 90vh;
	display: none;
} .chat-view-header {
	width: 100%;
	height: var(--chatView-header-height);
	float: left;
} .chat-view-header #btn-container {
	float: left;
} .chat-view-header #btn-container img {
	width: var(--chatView-minimize-width);
	height: var(--chatView-minimize-height);
	margin: var(--chatView-minimize-margin);
	cursor: pointer;
} .chat-view-header #btn-container img:active {
	transform: scale(.95);
} .chat-view-header #agent-container {
	float: right;
}  .chat-view-header #agent-container img {
	width: var(--chatView-agentImg-size);
	height: var(--chatView-agentImg-size);
	border-radius: 50%;
	margin: var(--chatView-agentImg-margin);
	float: right;
} .chat-view-header #agent-container #info {
	float: right;
	height: 100%;
} .chat-view-header #agent-container #info p {
	color: #fff;
	font-size: var(--chatView-agentName-fSize);
	margin: var(--chatView-agentName-margin);
	padding: 0;
} .chat-view-header #agent-container #info label {
	color: rgba(255,255,255,.7);
	font-size: var(--chatView-agentPos-fSize);
	font-family: Microsoft JhengHei Light;
	float: left;
	margin-top: var(--chatView-agentPos-marginTop);
	text-indent: 1px;
}

.client-info-form textarea::-webkit-scrollbar {
    width: 0; height: 0;
}.client-info-form textarea::-webkit-scrollbar-track {

}.client-info-form textarea::-webkit-scrollbar-thumb {
  opacity: 0;
}.client-info-form textarea::-webkit-scrollbar-button {
   height: 0px;
}


.conversation-panel {
	background: #f1f1f2;
	float: left;
	width: 100%;
	height: var(--conversationPanel-height);
}
.conversation-space {
	width: 100%;
	height: 2%;
	float: left;
}.conversation-space2 {
	width: 100%;
	height: 3%;
	float: left;
} .conversation-container {
	float: left;
	width: 100%;
	height: 95%;
	overflow: auto;
    display: flex; 
    flex-flow: column-reverse; 
    align-items: flex-end;
} .conversation-container ul {
	padding: 0;
	margin: 0;
	width: 100%;
} .conversation-container ul li {
	list-style: none;
	margin: 0;
	width: 100%;
	float: left;
	margin-top: var(--chatView-li-marginTop);
} .conversation-container ul li #message-box {
	width: 90%;
} .user-message {
	float: right;
    display: flex; 
    flex-flow: row-reverse; 
    align-items: flex-end;
} .user-message #icon {
	float: right;
	width: var(--chatView-icon-size);
	height: var(--chatView-icon-size);
	border-radius: 50%;
	margin-right: var(--chatView-icon-margin);
} .user-message #arrow {
	float: right;
	width: var(--chatView-arrow-width);
	height: var(--chatView-arrow-height);
} .user-message #rightarrow {
	float: right;
	width: 0;
	height: 0;
	border-left: var(--chatView-arrow-width) solid #bfffe7;
	border-top: var(--chatView-arrow-height) solid transparent;
} .user-message p {
	background: #bfffe7;
	float: right;
	max-width: 80%;
	padding: var(--chatView-message-padding);
	border-top-right-radius: var(--chatView-message-border);
	border-top-left-radius: var(--chatView-message-border);
	border-bottom-left-radius: var(--chatView-message-border);
	font-size: var(--chatView-message-fSize);
	margin: var(--chatView-message-margin2);
	line-height: 1.5;
}

 .client-message {
	float: left;
    display: flex; 
    flex-flow: row; 
    align-items: flex-end;
} .client-message #icon {
	float: left;
	width: var(--chatView-icon-size);
	height: var(--chatView-icon-size);
	border-radius: 50%;
	margin-left: var(--chatView-icon-margin);
} .client-message #arrow {
	float: left;
	width: var(--chatView-arrow-width);
	height: var(--chatView-arrow-height);
} .client-message #leftarrow {
	float: left;
	width: 0;
	height: 0;
	border-right: var(--chatView-arrow-width) solid #e0e0e0;
	border-top: var(--chatView-arrow-height) solid transparent;
} .client-message p {
	background: #e0e0e0;
	float: left;
	max-width: 80%;
	padding: var(--chatView-message-padding);
	border-top-right-radius: var(--chatView-message-border);
	border-top-left-radius: var(--chatView-message-border);
	border-bottom-right-radius: var(--chatView-message-border);
	font-size: var(--chatView-message-fSize);
	margin: var(--chatView-message-margin);
	line-height: 1.5;
} .defaultIcon {
	opacity: .3;
}

 
 .conversation-container::-webkit-scrollbar {
    width: 0; height: 0;
} .conversation-container::-webkit-scrollbar-track {

} .conversation-container::-webkit-scrollbar-thumb {
  opacity: 0;
} .conversation-container::-webkit-scrollbar-button {
   height: 0px;
}

.send-message-container textarea::-webkit-scrollbar {
    width: 0; height: 0;
} .send-message-container textarea::-webkit-scrollbar-track {

} .send-message-container textarea::-webkit-scrollbar-thumb {
  opacity: 0;
} .send-message-container textarea::-webkit-scrollbar-button {
   height: 0px;
}

.send-message-container {
	width: 100%;
	height: var(--send-message-container-height);
	background: #fff;
	float: left;
	margin-top: -1%;
} .send-message-container textarea {
	width: 90%;
	height: 50%;
	float: left;
	outline: none;
	font-size: var(--chatView-textarea-fSize);
	border: none;
	margin: var(--chatView-textarea-margin);
	resize: none;
} .send-message-container button {
	float: right;
	outline: none; border: none;
	height: var(--chatView-button-height);
	border-radius: 15px;
	font-size: var(--chatView-button-fSize);
	width: var(--chatView-button-width);
	letter-spacing: 1px;
	margin: var(--chatView-button-margin);
} .send-message-container button:hover {
	opacity: .9;
} .send-message-container button:active {
	transform: scale(.95);
} 

.close-chat-btn {
	width: var(--closeChat-btn-size); 
	height: var(--closeChat-btn-size); 
	float: right; 
	margin-top: var(--closeChat-btn-marginTop); 
	position: relative;
	cursor: pointer;
	opacity: .7;
	margin-right: 3px;
}.close-chat-btn:active {
	transform: scale(.9);
}.close-chat-btn:hover {
	opacity: 1;
}.close-tool-tip {
	font-size: var(--closeChat-toolTip-fSize);
	padding: var(--closeChat-toolTip-padding);
	border: 1px solid rgba(0,0,0,.2);
	float: right;
	margin: var(--closeChat-toolTip-margin); 
	position: relative;
	display: none;
} 

.ssl-secured {
    float: left;
    margin: var(--closeChat-btn-marginTop) 0 0 0; 
	position: relative;
	font-size: var(--closeChat-toolTip-fSize);
	color: rgba(255,255,255,.7);
	padding: 0;
	text-indent: 10px;
}

.close-chat-popup {
	width: 100%;
	height: var(--closePopup-height);
	position: relative;
	background: rgba(0,0,0,.2);
	margin-top: var(--closePopup-marginTop);
	float: left;
	display: none;
} .close-chat-popup #panel {
	width: 80%;
	height: var(--closePopup-panel-height);
	background: #fff;
	float: left;
	margin: var(--closePopup-panel-margin);
	box-shadow: 3px 3px 5px rgba(0,0,0,.2);
	animation: closeChatPopup .5s;
}  .close-chat-popup #panel p {
	width: 100%;
	text-align: center;
	font-size: var(--closePopup-fSize);
	padding: var(--closePopup-p-padding);
	margin: 0;
} .close-chat-popup #panel button {
	outline: none;
	border: none;
	font-size: var(--closePopup-fSize);
	padding: var(--closePopup-button-padding);
	width: var(--closePopup-button-width);
	background: #f0f0f0;
} .close-chat-popup #panel button:hover {
	background: #D4D4D4;
} .close-chat-popup #panel button:active {
	transform: scale(.95);
}

 .end-chat-popup, .end-chat-listener {
	width: 100%;
	height: var(--closePopup-height);
	position: relative;
	background: rgba(0,0,0,.2);
	margin-top: var(--closePopup-marginTop);
	float: left;
	display: none;
} .end-chat-popup #panel, .end-chat-listener #panel {
	width: 80%;
	padding: var(--endPopup-panel-padding);
	background: #fff;
	float: left;
	margin: var(--closePopup-panel-margin);
	box-shadow: 3px 3px 5px rgba(0,0,0,.2);
	animation: closeChatPopup .5s;
}  .end-chat-popup #panel p, .end-chat-listener #panel p {
	width: 90%;
	font-size: var(--closePopup-fSize);
	padding: 0;
	float: left;
	margin: var(--endPopup-p-margin);
	text-indent: var(--endPopup-p-indent);
	text-align: justify;
} .end-chat-popup #panel button, .end-chat-listener #panel button {
	outline: none;
	border: none;
	font-size: var(--closePopup-fSize);
	padding: var(--closePopup-button-padding);
	width: var(--closePopup-button-width);
	background: #f0f0f0;
} .end-chat-popup #panel button:hover, .end-chat-listener #panel button:hover {
	background: #D4D4D4;
} .end-chat-popup #panel button:active, .end-chat-listener #panel:active {
	transform: scale(.95);
}

.disable-send-button {
    width: 100%;
	height: var(--waiting-height);
	position: relative;
	background: rgba(0,0,0,.4);
	margin-top: var(--waiting-marginTop);
	float: left;
	display: none;
}.disable-send-button > p {
    float: left; 
    padding: 0; 
    font-size: 11px; 
    width: 80%;
    margin: 10px 0 0 10%;
    color: rgba(255,255,255,.8); 
    padding: 0; 
    text-align: center;
}.disable-send-button > img {
    float: left; 
    width: var(--waiting-loader-width);
    position: relative;
    height: var(--waiting-loader-height);
    margin-top: -10px;
    position: relative; 
    left: 50%; 
    transform: translateX(-50%);
    opacity: .5;
}

@keyframes closeChatPopup {
	from { transform: scale(.2); }
	to { transform: scale(1); }
}


/* OTHERS */
.circle {
	border-radius: 50%;
} .t-center {
	text-align: center;
} .h-line {
	line-height: 1.6;
} .break-30 {
	margin-bottom: 30px;
}  .break-100 {
	margin-bottom: 100px;
}  .skewY-25 {
	transform: skewY(25deg);
} .z-index-2 {
	z-index: 2; position: absolute;
} .padding-t-150 {
	padding-top: 150px;
} .padding-b-50 {
	padding-bottom: 50px;
} .padding-t-200 {
	padding-top: 200px;
} .bold {
	font-weight: bold;
}

.client-info-form input {
    margin-top: 4px; 
    font-size: 12px;
    min-height: var(--client-info-form-height) !important;
    max-height: var(--client-info-form-height) !important; 
    padding: 0 !important;
}.client-info-form input:first-child {
    margin-top: -5px;
}.client-info-form textarea {
    float: left; 
    width: 99%; 
    min-height: 34px; 
    max-height: 34px; 
    font-family: arial; 
    border-radius: 10px; 
    border: 1px solid rgba(0,0,0,.2); 
    font-size: 12px; 
    padding: 3px 5px; 
    margin: 5px 0; 
    resize: none; 
    outline: none;
}

.offline-p {
    
}

@keyframes bounce {
    0% { transform: translateY(0px); }
    40% { transform: translateY(-3px); }
    60% { transform: translateY(2px); }
    80% { transform: translateY(0px); }
    90% { transform: translateY(0px); }
    100% { transform: translateY(0px); }
} .bounceMsg { animation: bounce 2s infinite; animation-delay: 1s;}


.alert-popup {
    background: #fff; width: 300px; height: 140px; border-radius: 10px; float: left; position: relative; display: none;
    border: 1px solid rgba(0,0,0,.1); box-shadow: 3px 3px 10px rgba(0,0,0,.1);
} .alert-popup > #close {
    cursor: pointer;  float: right; margin: 5px 5px 0 0; width: 15px; height: 15px; opacity: 0.6;
} .alert-popup > #close:active {
    transform: scale(.9);
} .alert-popup > #close:hover {
    opacity: 0.8;
} .alert-popup > #agent {
    width: 100%; float: left;
} .alert-popup > #agent > img {
    float: left; width: 50px; height: 50px; margin: 0 20px;
} .alert-popup > #agent > p {
    float: left; padding: 0; margin: 3px 0 0 0; font-size: 17px; font-weight: bold; font-family: arial; color: rgba(0,0,0,.7);
} .alert-popup > #agent > p > span {
    font-size: 13px; color: rgba(0,0,0,.4);
} .alert-popup > #msg {
    width: 100%; text-align: center; font-size: 18px; color: rgba(0,0,0,.7); padding: 0; margin: 25px 0 0 0; float: left; font-family: arial;
}

.activeIndicator {
    position: relative; width: 12px; height: 12px; border-radius: 50%; background: #00C172; float: right; margin: -15px 3px 0 0;
	display: none;
}

.bar-activeIndicator {
    position: relative; width: 12px; height: 12px; border-radius: 50%; background: #00C172; float: right; margin: 7px 10px 0 0;
    display: none;
}

.chat-bar-btn {
    width: 109.5vw; padding: 15px 0 13px 0; display: none; float: left; position: relative; text-align: center; font-family: arial;
    font-size: 20px; color: #fff; font-weight: bold; margin: 0 -5vw 0 0;
}

</style>
        

	
<div class="chat-tool-container" id="chatContainer">
   <div class="alert-popup">
        <img id="close" src="https://canvaschat-tool.com/assets/img/icon/close.png" onclick="$('.alert-popup').fadeOut()">
        
        <div id="agent">
            <img src="https://canvaschat-tool.com/chat-tool/avatar/avatar_2.png">
            <p>Nancy<br><span>California Hair MD</span></p>
        </div>
        
        <p id="msg">Hi I'm online and happy to help!</p>
    </div>
    
	<div class="chat-btn circle bottom-right" id="chatBTN" onclick="execute.chatView()">
	</div>
	
	<div class="other-chat-btn bottom-right" id="otherChatBTN" onclick="execute.chatView()" style="display: none;">
	    <img src="https://canvaschat-tool.com/FrontEnd/assets/img/icon/chat-icon4.png">
	</div>
	
	<div class="chat-bar-btn" onclick="execute.chatView()">Live Chat <span class="bar-activeIndicator"></span></div>

	<div class="chat-box-container">
	    <div class="chat-offline-view">
	        <div class="minimize-btn center">
				<img src="https://canvaschat-tool.com/FrontEnd/assets/img/icon/minimize.png">
			</div>

			<h5 class="my-column-1 c-white t-center center h-line">Sorry, we're offline as of now,<br>Agents are not yet available.</h5>
			
			<div class="my-column-1 my-row-75 white left">
				<!-- <form> -->
				    <div class="agent-panel">
    					<div class="image-container">
    						<div class="image-panel">
    							<img src="https://canvaschat-tool.com/chat-tool/avatar/avatar.png">
    						</div>
    						<p style="margin-top: -5px; margin-bottom: 0; font-size: 12px; line-height: 1.2">Fill out the information below and send us your concern.</p>
    						
    						<div class="client-info-form">
    						    <input id="offlineFullname" type="text" placeholder="Fullname">
    						    <input id="offlineEmail" type="email" placeholder="Email Address">
    						    <input id="offlineContactNumber" type="text" placeholder="Contact Number">
    						    
    						    <textarea id="offlineConcern" placeholder="Your concern.."></textarea>
    						</div>
    					</div>
    				</div>
    
    				<div class="message-panel">
    					<div class="chat-icon" id="brandIcon">
    						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 619.9 662.4" style="enable-background:new 0 0 619.9 662.4; transform: scale(.7); margin-top: -5px;" xml:space="preserve">
                            	<style type="text/css">
                            		.st0{fill:#808184;}
                            		.st1{fill:#FFFFFF;}
                            	</style>
                            	<g>
                            		<g>
                            			<path class="st0" d="M415,502.8c-29.3,13-62.4,19.2-97.1,16.4c-97.7-7.9-176.3-88.2-182.2-186.1
                            				c-6.9-115.5,84.7-211.3,198.6-211.3c71.2,0,133.6,37.4,168.7,93.5c9.6,15.4,26,25.2,44.2,25.2c0.8,0,1.6,0,2.5,0
                            				c43.8,0,70.2-48.3,46.7-85.3C538.9,64.4,435.5,5.5,318.7,11.2C161.8,18.9,33.7,145.9,24.8,302.7C19.9,387,48.9,464.4,99.2,522.9
                            				L76.6,630.3c-2.8,13.2,10.6,23.9,22.9,18.4l104-46.7c39.8,18.6,84.1,29,130.9,29c102.5,0,193.4-49.8,249.8-126.4
                            				c27.1-36.8,1.5-88.8-44.2-88.8h-0.4c-17.9,0-33.2,9.9-45.1,23.3C458.4,479.3,415,502.8,415,502.8z"/>
                            			<circle class="st0" cx="250" cy="323" r="24.6"/>
                            			<circle class="st0" cx="329.6" cy="323" r="24.6"/>
                            			<circle class="st0" cx="409.3" cy="323" r="24.6"/>
                            		</g>
                            	</g>
                            </svg>
                            <p class="c-ash" style="margin-top: -10px; position: relative; width: 300px; left: 50%; transform: translateX(-50%)">Powered by <span id="brandName"></span><br><u>Terms & Conditions</u></p>
    					</div>
    					
    					<div class="send-message-container2">
            				<button class="c-white" id="submitConcernBtn" style="padding: 0;font-size: 12px;" onclick="execute.submitOfflineData()">Submit</button>
            			</div>
    				</div>
				<!-- </form> -->
			</div>

			<div class="end-chat-listener">
				<div id="panel">
					<p>Your concern is successfully submitted!</p>
					<center>
						<button onclick="execute.closeListener()">Close</button>
					</center>
				</div>
			</div>
	    </div>
	    
		<div class="chat-first-view">
			<div class="minimize-btn center">
				<img src="https://canvaschat-tool.com/FrontEnd/assets/img/icon/minimize.png">
			</div>

			<h5 class="my-column-1 c-white t-center center h-line" id="headerMSG"></h5>
			
			<!--<form action="">-->
				<div class="my-column-1 my-row-75 white left">
					<div class="agent-panel">
						<div class="image-container">
							<div class="image-panel">
								<img src="https://canvaschat-tool.com/chat-tool/avatar/avatar.png">
							</div>
							<p id="introMSG" style="margin-bottom: 0"></p>
						</div>
					</div>

					<div class="message-panel">
						<div class="chat-icon" id="brandIcon">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 619.9 662.4" style="enable-background:new 0 0 619.9 662.4;" xml:space="preserve">
                            	<style type="text/css">
                            		.st0{fill:#808184;}
                            		.st1{fill:#FFFFFF;}
                            	</style>
                            	<g>
                            		<g>
                            			<path class="st0" d="M415,502.8c-29.3,13-62.4,19.2-97.1,16.4c-97.7-7.9-176.3-88.2-182.2-186.1
                            				c-6.9-115.5,84.7-211.3,198.6-211.3c71.2,0,133.6,37.4,168.7,93.5c9.6,15.4,26,25.2,44.2,25.2c0.8,0,1.6,0,2.5,0
                            				c43.8,0,70.2-48.3,46.7-85.3C538.9,64.4,435.5,5.5,318.7,11.2C161.8,18.9,33.7,145.9,24.8,302.7C19.9,387,48.9,464.4,99.2,522.9
                            				L76.6,630.3c-2.8,13.2,10.6,23.9,22.9,18.4l104-46.7c39.8,18.6,84.1,29,130.9,29c102.5,0,193.4-49.8,249.8-126.4
                            				c27.1-36.8,1.5-88.8-44.2-88.8h-0.4c-17.9,0-33.2,9.9-45.1,23.3C458.4,479.3,415,502.8,415,502.8z"/>
                            			<circle class="st0" cx="250" cy="323" r="24.6"/>
                            			<circle class="st0" cx="329.6" cy="323" r="24.6"/>
                            			<circle class="st0" cx="409.3" cy="323" r="24.6"/>
                            		</g>
                            	</g>
                            </svg>
						</div>
						<p class="c-ash">Powered by <span id="brandName"></span></span><br><u>Terms & Conditions</u></p>
						
						<div class="send-message-container1">
            				<input type="text" id="messageContent1" placeholder="Type something here...">
            				<button class="c-white" id="submitBtn" onclick="execute.submitVisitor()">Send</button>
            			</div>
					</div>
				</div>
			<!--</form>-->
		</div>

		<div class="chat-view">
			<div class="chat-view-header">
				<div id="btn-container">
					<img class="header-minimize" src="https://canvaschat-tool.com/FrontEnd/assets/img/icon/minimize.png">
				</div>

				<div id="agent-container">
					<img src="https://canvaschat-tool.com/chat-tool/avatar/avatar_2.png">
					<div id="info">
						<p>Nancy</p>
						<label>Chat Professional</label>
					</div>
				</div>
			</div>

			<div class="conversation-panel">
				<div class="conversation-space"></div>
				<div class="conversation-container">
					<ul id="reverse"></ul>
				</div>
				<div class="conversation-space2">
				    <!-- <i id="istyping" style="font-size: 10px; float: left; text-indent: 10px; font-family: arial; padding-top: 2px; color: rgba(0,0,0,.7)">Agent is typing...</i> -->
				</div>
			</div>

			<div class="send-message-container">
				<textarea id="messageContent" placeholder="Type something to send..." onfocus="execute.typing(1)" onblur="execute.typing(0)"></textarea>
				<button class="c-white" id="sendBtn" onclick="execute.getMessage()">Send</button>
			</div>


			<img class="close-chat-btn" src="https://canvaschat-tool.com/FrontEnd/assets/img/icon/close2.png" alt="">
			<p class="close-tool-tip white">Close chat</p>
			<p class="ssl-secured">This chat is SSL Secured</p>
			
			<div class="close-chat-popup">
				<div id="panel">
					<p>Are you sure you want to close the chat?</p>
					<center>
						<button onclick="execute.endChatConvo()">Yes</button>
						<button>Cancel</button>
					</center>
				</div>
			</div>
			<div class="end-chat-popup">
				<div id="panel">
					<p style="line-height: 1.4; text-indent: 15px">We are sorry to keep you waiting, it seems that admins are too busy as of the moment, we'll send you a message to your email to make sure that we can assist you with your concern, you can also try to reach back to us after a couple of minutes.</p>
					<center>
						<button onclick="execute.endChatConvo()">Close</button>
					</center>
				</div>
			</div>
			<div class="end-chat-listener">
				<div id="panel">
					<p>This chat is closed, if you have further questions, you may chat with us any comfortable time you want.</p>
					<center>
						<button onclick="execute.clearStoredData()">Close</button>
					</center>
				</div>
			</div>
			<div class="disable-send-button">
			    <p>You are <b id="queueRank"></b> in queue, please wait for the Agent to initiate the chat.</p>
			    <img src="https://canvaschat-tool.com/chat-tool/waiting.gif">
			</div>
		</div>
	</div>
</div>
		
<script>
    $(document).ready(function(){
    	$(".chat-btn").click(function() {
    	    $(".chat-box-container").css({
                "background": widgetBackground
            });
            
            $(".message-panel button").css({"background": widgetBackground});
            $(".send-message-container button").css({"background": widgetBackground});
    		$(this).fadeOut(300);
    		if (widgetPos == "middle_left" || widgetPos == "middle_right") {
    		    $(".chat-box-container").css({
        			"animation": "chatBoxScale .5s",
    		        "transform": "scaleY(1)"
        		}).delay(400).fadeIn();
    		} else {
    		    $(".chat-box-container").css({
        			"animation": "chatBoxShow2 .5s"
        		}).delay(400).fadeIn();
    		}	
    	});
    	
    	$(".other-chat-btn").click(function() {
    	    $(".chat-box-container").css({
                "background": widgetBackground
            });
            
            $(".message-panel button").css({"background": widgetBackground});
            $(".send-message-container button").css({"background": widgetBackground});
    		$(this).fadeOut(300);
    		if (widgetPos == "middle_left" || widgetPos == "middle_right") {
    		    $(".chat-box-container").css({
        			"animation": "chatBoxScale .5s",
    		        "transform": "scaleY(1)"
        		}).delay(400).fadeIn();
    		} else {
    		    $(".chat-box-container").css({
        			"animation": "chatBoxShow2 .5s"
        		}).delay(400).fadeIn();
    		}	
    	});
    	
    	$(".chat-bar-btn").click(function() {
    	    $(".chat-box-container").css({
                "background": widgetBackground
            });
            
            $(".message-panel button").css({"background": widgetBackground});
            $(".send-message-container button").css({"background": widgetBackground});
    		$(this).fadeOut(300);
		    $(".chat-box-container").delay(400).fadeIn();	
    	});
    
    	$(".minimize-btn").click(function() {
    	    if ($(window).width() > 480) {
        	    if (widgetPos == "middle_left" || widgetPos == "middle_right") {
        	        $(".chat-box-container").css({
        		        "transform": "scaleY(0)",
            			"animation": "chatBoxScaleHide .5s"
            		}).delay(200).fadeOut();
        	    } else {
        	        $(".chat-box-container").css({
            			"animation": "chatBoxHide .5s"
            		}).fadeOut(500);
        	    }
    	    
    	        if  (widgetIcon == "chat-icon4.png") {
        	        $(".other-chat-btn").delay(650).fadeIn(500);
        	    } else {
        	        $(".chat-btn").delay(650).fadeIn(500);
        	    }
    	    } else {
    	        $(".chat-box-container").delay(200).fadeOut();
    	        
    	        $(".chat-bar-btn").delay(650).fadeIn(500);
    	    }
        	    
    	});
    
    	$(".header-minimize").click(function() {
    	    if ($(window).width() > 480) {
        	    if (widgetPos == "middle_left" || widgetPos == "middle_right") {
        	        $(".chat-box-container").css({
        		        "transform": "scaleY(0)",
            			"animation": "chatBoxScaleHide .5s"
            		}).delay(200).fadeOut();
        	    } else {
        	        $(".chat-box-container").css({
            			"animation": "chatBoxHide .5s"
            		}).fadeOut(500);
        	    }
    	    
    	        if  (widgetIcon == "chat-icon4.png") {
        	        $(".other-chat-btn").delay(650).fadeIn(500);
        	    } else {
        	        $(".chat-btn").delay(650).fadeIn(500);
        	    }
    	    } else {
    	        $(".chat-box-container").fadeOut(500);
        		
    	        $(".chat-bar-btn").delay(650).fadeIn(500);
    	    }
    	});
    
    	$(".my-menu-bar").stop().click(function() {
    		$(".my-side-nav").stop().animate({'width': 'toggle'},200);
    	});
    
    	$(".close-chat-btn").stop().mouseover(function() {
    		if (typeof window.orientation == 'undefined') { 
    			$(".close-tool-tip").show();
            }
    	}).mouseout(function(){
    		if (typeof window.orientation == 'undefined') { 
    			$(".close-tool-tip").hide();
            }
    	});
    
    	$(".close-chat-btn").stop().click(function() {
    		$(".close-chat-popup").fadeIn();
    	});
    
    	$(".close-chat-popup #panel button:last-child").stop().click(function() {
    		$(".close-chat-popup").fadeOut();
    	});
    	
    	if ($(window).width() < 480) {
    	    var meta = document.createElement('meta');
            meta.name = "viewport";
            meta.content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no";
            document.getElementsByTagName('head')[0].appendChild(meta);
    	} 
    });
</script>

