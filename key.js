document.addEventListener('keydown', function(event) {
    if(event.keyCode == 38) {
	$.get('servo1.php', {runFunction: 'backward'});$.get('servo2.php', {runFunction: 'backward'});
        console.log('up arrow key was pressed');
		
    }
    if(event.keyCode == 40) {
	$.get('servo2.php', {runFunction: 'forward'});$.get('servo1.php', {runFunction: 'forward'});
        console.log('down arrow key was pressed');
    }
    if(event.keyCode == 37) {
	$.get('servo1.php', {runFunction: 'forward'});$.get('servo2.php', {runFunction: 'backward'});
        console.log('Left arrow key was pressed');
    }

    if(event.keyCode == 39) {
	$.get('servo1.php', {runFunction: 'backward'});$.get('servo2.php', {runFunction: 'forward'});
        console.log('Right arrow key was pressed');
    }
});
document.addEventListener('keyup', function(event) {
    if(event.keyCode == 38) {
         
		$.get('servo1.php', {runFunction: 'stop'});$.get('servo2.php', {runFunction: 'stop'});
		console.log("up arrow key was released");
    }
    if(event.keyCode == 40) {
         
		$.get('servo1.php', {runFunction: 'stop'});$.get('servo2.php', {runFunction: 'stop'});
		console.log("down arrow key was released");
    }
    if(event.keyCode == 37) {
        
		$.get('servo1.php', {runFunction: 'stop'});$.get('servo2.php', {runFunction: 'stop'});
		console.log("left arrow key was released");
    }

    if(event.keyCode == 39) {
        
		$.get('servo1.php', {runFunction: 'stop'});$.get('servo2.php', {runFunction: 'stop'});
		 console.log("right arrow key was released");
    }
});