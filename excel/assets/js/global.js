/* Global JavaScript File for working with JQuery library */

// execute when the HTML file's (document object model: DOM) has loaded
/*
$(document).ready(function() {
    
                
    var ctrllr = 'product_item';
    var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';
 
    
    $('.supplier_id').change(function() {
       //alert ('Ola World');
        
        //$.ajax({
          //          'url' : base_url + '/' + ctrllr + '/ajax',
            //        'type' : 'POST', //the way you want to send data to your URL
              //      'data' : {'type' : type},
                //    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                  //      var container = $('#container'); //jquery selector (get element by id)
                    //    if(data){
                      //      container.html(data);
                        //}
                    //}
                //});
    
        var url1 = base_url + '/' + ctrllr + '/ajax'
        $.post(url1,
            {
                name:"Donald Duck",
                city:"Duckburg"
            },
            function(data,status){
                var container = $('#container');
                //alert("Data: " + data + "\nStatus: " + status);
                container.html(encodeURI(data));
            });
    });
  
}); 

*/
