/**
 * Created by User on 6/13/2016.
 */
function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}
function verify(valid) {
    var letters = /^[A-Za-z]+$/;
    if(valid.value.match(letters))
    {
        return true;
    }
    else
    {
        alert("message");
        return false;
    }
}
