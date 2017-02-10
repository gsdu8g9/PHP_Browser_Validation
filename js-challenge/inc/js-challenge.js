jQuery(document).ready(function($){
    //Show PortCDN Notify - User
    $("#portcdn_notify").show();
    
    //Create our Timer Icon
    $('.pie_progress').asPieProgress({
        namespace: 'pie_progress'
    });
    
    //Timer Counter
    countValue = 0;
    setInterval( function(){
        if(countValue >= 100)
        {
            $('.pie_progress').asPieProgress('go', 100);
        }
        else
        {
            $('.pie_progress').asPieProgress('go', countValue);
            countValue += 1;
        }
    }, 50);
    
    //DDoS Check - Function
    $(function(){setTimeout(
       function(){
           $('#portcdn_answer').val(1097+36*2);
           $('#PortCDN_ChallengeForm').submit();
       },
       5850
    )});
});