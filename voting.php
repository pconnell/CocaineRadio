<form id = 'vote_form' action ='javascript:sendFeedback()'>
	rating (5 is best):<br/>
    <div id = 'rating_buttons'>
        <input type = 'radio' name = 'score' value = '1'/>1<br/>
        <input type = 'radio' name = 'score' value = '2'/>2<br/>
        <input type = 'radio' name = 'score' value = '3'/>3<br/>
        <input type = 'radio' name = 'score' value = '4'/>4<br/>
        <input type = 'radio' name = 'score' value = '5'/>5<br/>
    </div>
	optional comments for the artist:<br/>
    <div id = 'optional comments'>
        <input type = 'checkbox' name = 'c1'/>I would pay for this track.<br/>
        <input type = 'checkbox' name = 'c2' value = '2'/>I would want to hear more from this artist.<br/>
        <input type = 'checkbox' name = 'c3' value = '3'/>I think the artist put a lot of work into this track.<br/>
        <input type = 'checkbox' name = 'c4' value = '4'/>I think this could have been better.<br/>
        <input type = 'checkbox' name = 'c5' value = '5'/>My IQ dropped by listening to this piece.<br/>
		<input type = 'checkbox' name = 'c6' value = '6'/>I would throw this in the garbage and set it on fire.<br/>
    </div>
    <input type = 'submit' value = 'vote'/>
</form>
<script>
    function sendFeedback(){
		var form = document.vote_form;
		var score = form.score.value;
		var c1 = form.c1.checked;
		var c2 = form.c2.checked;
		var c3 = form.c3.checked;
		var c4 = form.c4.checked;
		var c5 = form.c5.checked;
		var c6 = form.c6.checked;
		
		
    }
</script>