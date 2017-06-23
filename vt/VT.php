<script>
    var output;
    $(function (){
        req = $.ajax("/vt/vt.json").done(function(){
            output = JSON.parse(req.responseText);
            for(i in output["data"]){
                $("#json").append("<option id=" + i + ">" + i + "</option>");
            }
        });   
        $("#json").change(function(){
            //var index = $("select#elem").prop('selectedIndex';
            var current = $("#json").val();
            console.log(output["data"]);
            console.log(output["data"][current]);
            for(i in output["data"][current]){
                
                $("#out").append(i + "<br>");   
                console.log(i);
            }
            
            
        });
    });
    
</script>
<h3>Bite Klasse auswählen</h3>
<select id="json">
    <option></option>
</select>
<div id="out"></div>