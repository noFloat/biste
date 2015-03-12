var tabContainer;
function Marquee() {
	    for (var i = 0; i < msgStrings.length; i++) {
	        var cellMsg = document.getElementById("msg" + i);
	        var rightPadd = cellMsg.style.right;
	        var rightValue = rightPadd.substring(0, rightPadd.length - 2);
	        if (rightValue <= tabContainer.offsetWidth) {
	            rightValue = cellSpeed[i] + parseInt(rightValue);
	            cellMsg.style.right = rightValue + "px";
	        }
	        else {
	            cellMsg.style.right = "0px";
	        }
	    }
	}
	var msgStrings = ["逗比", "炒鸡逗比的弹幕", "Fly go  a beauty", "first blood", "毛线弹幕 "];
	var cellSpeed = new Array();
	function InitAnimal() {
	    for (var i = 0; i < msgStrings.length; i++) {
	        var msgCell = document.createElement("div");
	        msgCell.id = "msg" + i;
	        msgCell.className = "MsgTip";
	        var topCell = Math.floor(Math.random() * tabContainer.offsetHeight);
	        msgCell.style.top = topCell + "px";
	        msgCell.style.right = "0px";
	        msgCell.style.position = "absolute";
	        msgCell.innerHTML = msgStrings[i];
	        tabContainer.appendChild(msgCell);
	        var speendCell = Math.floor(Math.random() * 100) + 20;
	        cellSpeed.push(speendCell);
	    }
	}
	window.onload = function () {
	    tabContainer = document.getElementById("demo");
	    InitAnimal();
	    var MyMar = setInterval(Marquee, 200);
	};